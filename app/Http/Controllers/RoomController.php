<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class RoomController extends Controller
{
 
    public function index() {
        $rooms = Room::all();
        return view('rooms')->with('rooms', $rooms);
    }

    public function show($id) {
            $rooms = Room::where('id',$id)->get();
             return view('room-details')->with('rooms', $rooms);
    }

}