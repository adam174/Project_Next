<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class RoomController extends Controller
{


//******************** show all Rooms*******************// 

    public function index() {
        $rooms = Room::all();
        return view('rooms')->with('rooms', $rooms);
    }


//******************** Room details********************//  


        public function show($id) {
            $rooms = Room::where('id',$id)->get();
             return view('room-details')->with('rooms', $rooms);
        }

}