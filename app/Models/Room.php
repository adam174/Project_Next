<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'hotel_id',
        'type',
        'price',
        'image',
        'n_rooms',
        'superficie',
        'couchage',
        'occupants',
    ];

    public function hotel() {
        return $this->belongsTo('App\Models\Hotel');
    }
}