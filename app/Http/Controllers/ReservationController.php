<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Reservation;
use App\Models\Hotel;
use App\Models\Room;
use Auth;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Stripe;
use App\Mail\MyTestMail;
use Carbon\Carbon;
use Illuminate\Support\Str;
use App\Models\Country;
use Redirect;
class ReservationController extends Controller
{
    /**
     * Display a listing of the reservations.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $users = User::get();
         // show only his reservations
                $reservations = Reservation::with('room', 'room.hotel')
                    ->where('user_id', Auth::user()->id)
                    ->orderBy('arrival', 'asc')
                    ->get();

        return view('dashboard.reservations', compact('reservations','users'));
    }

    /**
     * Show the form for creating a new reservation.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //security check available rooms
        $notavailable = $request->session()->get('notavailable');
        if ( in_array($request->room_id, $notavailable)) {
         return redirect('reserver');
        }

        //get list of countries
         $countries = Country::all();
        // keep room_id in session and store it in variable
        $request->session()->put('room_id', $request->room_id);
        $room_id = $request->session()->get('room_id');
        // get dates from stored session
        $arrival = $request->session()->get('arrival');
        $departure = $request->session()->get('departure');

           return view('dashboard.reservationCheckout', compact('arrival', 'room_id','departure','countries'));
    }

    /**
     * Store a newly created reservation in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // include functions we need
        include(app_path() . '\functions\n_rooms.php');

        //get info stored in sessions then Convert date format to Y-m-d (supported by mysql)
        $arrival = $request->session()->get('arrival');
        $departure = $request->session()->get('departure');
        $room_id = $request->session()->get('room_id');

        //get the price of the room
        $price = Room::select('price')->where('id',$room_id)->first();
        if(!$price){
        }
        // calculate price of total days of stay
        $price = $price->price * dateDifference($arrival, $departure);
        $room_type = Room::select('type')->where('id',$room_id)->first();
        // Create the request
        if ( Auth::guest()) {
            $validator = Validator::make($request->all(), [
                'email' => ['required','unique:users'],
                //'password' => ['required', 'string', 'min:8'],
                'mobile' => ['required','numeric'],
                'country' => ['required','numeric'],
                'name' => ['required','string'],
                ])->validate();
                $password = Str::random(8);
                $user = User::firstOrNew(['email' =>  $request->email]);
                $user->name = $request->name;
                $name = $request->name;
                $user->mobile = $request->mobile;
                $user->country = $request->country;
                $user->password = Hash::make($password);
                $user->save();
                $user_id = User::where('email',$request->email)->pluck('id')->toArray()[0];
                $email = $request->email;

            }else{  // store to variables to send email confirmation
                $user_id = Auth::user()->id;
                $name = Auth::user()->name;
                $email = Auth::user()->email;
                $password = null;
            }

            // using Stripe to make transaction and make it optional for admin
                Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
               $stripe = Stripe\Charge::create ([
                "amount" => $price * 100,
                "currency" => "eur",
                "source" => $request->stripeToken,
                "description" => "Test payment from RoyalHotel.",
                "receipt_email" => $email,
                            ]);
                             // store data to request
            $request->request->add(['user_id' => $user_id]);
            $request->request->add(['arrival' => $arrival]);
            $request->request->add(['departure' => $departure]);
            $request->request->add(['price' => $price]);
            $request->request->add(['num_of_guests' => 2]);
            $request->request->add(['room_id' => $room_id]);
            $request->request->add(['is_paid' => $stripe->status]);
            $request->request->add(['payment_type' => $stripe->payment_method_details->card->brand]);
        // send request
        Reservation::create($request->all());

       // send Reservation Confirmation to user
        $details = ['price' => $price,
                    'client' => $name,
                    'arrival' => $arrival,
                    'departure' => $departure,
                    'room_type' => $room_type,
                    'password' => $password,
                ];

        \Mail::to($email)->send(new \App\Mail\MyTestMail($details));

        return redirect('home')->with('success', 'Your Booking has been confirmed')
                               ->with('name', $name);
    }

    /**
     * Display the specified reservation.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $reservation)
    {
        // security check : show only user's reservations
        if ($reservation->user_id === Auth::user()->id) {
            // get reservations from database to edit
            $reservation = Reservation::with('room', 'room.hotel')
              ->get()
              ->find($reservation->id);
          $hotel_id = $reservation->room->hotel_id;
          $hotelInfo = Hotel::with('rooms')->get()->find($hotel_id);

          return view('dashboard.reservationSingle', compact('reservation', 'hotelInfo'));
        } else
          return redirect('dashboard/reservations')->with('error', 'You are not authorized to see that.');
    }

    /**
     * Show the form for editing the specified reservation.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $reservation)
    {
            return redirect('dashboard/reservations')->with('error', 'You are not authorized to do that');
    }

    /**
     * Update the specified reservation in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservation $reservation) {

           return redirect('dashboard/reservations')->with('error', 'You are not authorized to update this reservation');


    }

    /**
     * Remove the specified reservation from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation)
    {

            return redirect('dashboard/reservations')->with('error', 'You are not authorized to delete this reservation');
    }
}
