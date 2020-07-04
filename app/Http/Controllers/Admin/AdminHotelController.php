<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\Room;
use App\Models\Hotel;
use Auth;

class AdminHotelController extends Controller
{
   public function index() {
      
           return view('admin.hotels');
     
    }
     
    public function create(Request $request)
    {
        // inluding the function to calculate days of bookings 
        include(app_path() . '\functions\n_rooms.php'); 
        // storing form inputs to variables then save to session
        $arrival = $request->arrival;
        $departure = $request->departure;
        $payment = $request->payment;
        $request->session()->put('arrival', $request->arrival);
        $request->session()->put('departure', $request->departure);
        $request->session()->put('payment', $request->payment);
        // get the rooms ids which is reserved in the requested dates  
        $arrr = Reservation::select('room_id')->whereBetween('arrival',array($arrival,$departure))->orwhereBetween('departure',array($arrival,$departure))->get('room_id')->toArray();
        $arrr = array_column($arrr, 'room_id');
        // declare an empty array then store the roomsid which was booked more than available rooms ( n_rooms)
        $dups = array();
        foreach(array_count_values($arrr) as $val => $c)  if($c >= Room::where('id',$val)->pluck('n_rooms')->toArray()[0] ) $dups[] = $val;
        //Get available rooms
        $hotelInfo = Room::where('hotel_id',1)->whereNotIn('id', $dups)->get();
       
            return view('admin.reservationCreate', compact('arrival', 'hotelInfo','departure','payment'));
        

    }

     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Hotel $hotel)
    {   

           $hotel = Hotel::find(1);
             return view('admin.hotelEdit',compact('hotel'));
    }

     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hotel $hotel)
    {
        // $request->validate([
        //     'name' => 'required',
        // ]);
            $hotel = Hotel::find(1);
            $hotel->update($request->all());
    
        return redirect()->route('rooms.index')
                        ->with('success','Hotel updated successfully');
    }
}
