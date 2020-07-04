<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Translation;

class AdminRoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rooms = Room::paginate(15);
        return view('admin.rooms', compact('rooms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.roomCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'type' => ['required','string'],
            'image' => ['required','string'],
            'price' => ['required','numeric'],
            'n_rooms' => ['required','numeric'],
            'hotel_id' => ['required','numeric'],
            'superficie' => ['required','string'],
            'couchage' => ['required','string'],
            'occupants' => ['required','numeric'],
            'description_en' => ['required','string'],
            'description_fr' => ['required','string']
        ]);
        Translation::insertOrIgnore([
            ['language_id' => 1, 'group' => 'rooms', 'key' => $request->type, 'value' => $request->description_en],
            ['language_id' => 2, 'group' => 'rooms', 'key' => $request->type, 'value' => $request->description_fr]
        ]);
        Room::create($request->all());
        return redirect()->route('rooms.index')
                        ->with('success','Room created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Room $room)
    {
        return view('admin.roomShow',compact('room'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $room = Room::find($id);

            return view('admin.roomEdit', compact('room'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Room $room)
    {
        $request->validate([
            'type' => 'required',
            'price' => 'required',
        ]);
  
        $room->update($request->all());
  
        return redirect()->route('rooms.index')
                        ->with('success','Room updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Room $room)
    {
        $room->delete();
  
        return redirect()->route('rooms.index')
                        ->with('success','Room deleted successfully');
    }
}
