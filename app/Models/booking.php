<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    //
    protected $fillable = [
        'room_id',
        'name',
        'email',
        'phone',
        'startdate',
        'enddate'
    ];

    //create function for to build relation with rooms and bookigs table using room id and room_id in bookings table
    //here this object contain the current data
    public function room(){
        return $this->hasOne('App\Models\Room','id','room_id');
    }
}
