<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\Hotel;
use App\Models\Room;
use Auth;
use App\User;
use Illuminate\Support\Facades\Hash;
use Stripe;
use App\Mail\MyTestMail;
use Carbon\Carbon;
use Illuminate\Support\Str;
use App\Models\Country;

class AdminController extends Controller
{

    // public function __construct()
    //  {
    //      $this->middleware('admin');
    //  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $users = User::get();
       $reservations = Reservation::with('room', 'room.hotel')
                    ->orderBy('arrival', 'asc')
                    ->paginate(10);
        return view('admin.reservations', compact('reservations','users'));
    }

    /**
     * Show the form for creating a new resource.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
       
        //get list of countries 
         $countries = Country::all();
        // keep room_id in session and store it in variable
        $request->session()->put('room_id', $request->room_id);
        $room_id = $request->session()->get('room_id');
        // get dates from stored session
        $arrival = $request->session()->get('arrival');
        $departure = $request->session()->get('departure');
        $payment = $request->session()->get('payment');
        return view('admin.checkout', compact('arrival', 'room_id','departure','countries','payment'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //get info stored in sessions then Convert date format to Y-m-d (supported by mysql)
        $arrival = $request->session()->get('arrival');
        $departure = $request->session()->get('departure');
        $room_id = $request->session()->get('room_id');
        $payment = $request->session()->get('payment');
        $validator = $request->validate([
            'mobile' => ['nullable','numeric'],
            'name' => ['nullable','string'],
            'country' => ['nullable','exists:countries,id'],
            'email' => ['required','email']

        ]);
         // include functions we need
        include(app_path() . '\functions\n_rooms.php');
    
        
       
        //get the price of the room
        $price = Room::select('price')->where('id',$room_id)->first();
        // calculate price of total days of stay
        $price = $price->price * dateDifference($arrival, $departure);
        $room_type = Room::select('type')->where('id',$room_id)->first();
       
                $password = Str::random(8);
                $user = User::firstOrNew(['email' =>  $request->email]);
                if (!$user->exists) {
                        // user created from 'new'; does not exist in database.
                        $user->name = $request->name ?? 'guest';
                        // $name = $request->name;
                        $user->mobile = $request->mobile ?? '000000000';
                        $user->country = $request->country ?? 43;
                        $user->password = Hash::make($password);
                        $user->save();
                    }
               
                $user_id = User::where('email',$request->email)->pluck('id')->toArray()[0];
                $email = $request->email;
                 // store data to request 
                $request->request->add(['user_id' => $user_id]);
                $request->request->add(['arrival' => $arrival]);
                $request->request->add(['departure' => $departure]);
                $request->request->add(['price' => $price]);
                $request->request->add(['num_of_guests' => 2]);
                $request->request->add(['room_id' => $room_id]);
                 if($payment == "cash" || $payment == "check"){
                     $request->request->add(['payment_type' => $payment]);
                Reservation::create($request->all());
                 }else{
                Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
                $stripe = Stripe\Charge::create ([
                "amount" => $price * 100,
                "currency" => "eur",
                "source" => $request->stripeToken,
                "description" => "Test payment from RoyalHotel.",
                "receipt_email" => $email,
                            ]);
                // send request 
                     $request->request->add(['is_paid' => $stripe->status]);
                     $request->request->add(['payment_type' => $stripe->payment_method_details->card->brand]);
               Reservation::create($request->all());
            }
        return redirect()->route('bookings.index')
                        ->with('success','Reservation created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($reservation)
    {
         $reservation = Reservation::with('room', 'room.hotel')
          ->get()
          ->find($reservation);
        // security check : show only user's reservations || admin can see all
       
          $hotel_id = 1;
          $hotelInfo = Hotel::with('rooms')->get()->find($hotel_id);
      
          return view('admin.reservationSingle', compact('reservation', 'hotelInfo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $reservation = Reservation::with('room', 'room.hotel')
            ->get()
            ->find($id);
            $hotelInfo = Hotel::with('rooms')->get()->find(1);

            return view('admin.reservationEdit', compact('reservation', 'hotelInfo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $reservation = Reservation::with('room', 'room.hotel')
            ->get()
            ->find($id);
        if($request->arrival && $request->departure)
        {
        $arrival = $request->arrival;
        $departure = $request->departure;
         // get the rooms ids which is reserved in the requested dates  
        $arrr = Reservation::select('room_id')->whereBetween('arrival',array($arrival,$departure))->orwhereBetween('departure',array($arrival,$departure))
        ->orWhere(function($q) use($arrival, $departure) {
        $q->where('arrival', '<', $arrival)->where('departure', '>', $departure);
    })
        ->get('room_id')->toArray();
        $arrr = array_column($arrr, 'room_id');
        // declare an empty array then store the roomsid which was booked more than available rooms ( n_rooms)
        $dups = array();
        foreach(array_count_values($arrr) as $val => $c)  if($c >= Room::where('id',$val)->pluck('n_rooms')->toArray()[0] ) $dups[] = $val;
        //dd($dups);
        if(in_array($request->room_id, $dups))
        {
        return redirect()->back()->withErrors(['error' => $reservation->room->type]);
        }  
        $reservation->arrival = $request->arrival;
        $reservation->departure = $request->departure;
        }
        $reservation->price = $request->price;
        $reservation->is_paid = $request->paid == '0' ? 'succeeded' : Null;
        if ($request->payment == '0') {
            $reservation->payment_type = 'visa';
        } elseif($request->payment == '1') {
            $reservation->payment_type = 'mastercard';
        }elseif($request->payment == '2'){
            $reservation->payment_type = 'par chèque';
        }elseif($request->payment == '3')
        {
            $reservation->payment_type = 'virement bancaire';
        }
        elseif($request->payment == '4')
        {
            $reservation->payment_type = 'en espèces';
        }
        
        $reservation->room_id = $request->room_id;
        $reservation->save();
      
        return redirect('admin/bookings')->with('success', 'Successfully updated your reservation!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
            $reservation = Reservation::find($id);
            $reservation->delete(); 
            return redirect()->back()->with('success', 'Successfully deleted your reservation!');
    }
}
