<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'user_id',
        'room_id',
        'num_of_guests',
        'arrival',
        'departure',
        'price',
    ];

    public function room() {
        return $this->belongsTo('App\Models\Room');
    }
    public function client() {
        return $this->belongsTo('App\User');
    }
    

}