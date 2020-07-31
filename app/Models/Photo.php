<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = [
        'room_id',
        'photo',
    ];
     public function room() {
        return $this->belongsTo('App\Models\Room');
    }
}
