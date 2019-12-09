<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = ['tokenno', 'nop', 'note', 'tourist_id'];

    public function tourism()
    {
        return $this->belongsTo('App\Tourism');
    }

    public function bookingdetail()
    {
        return $this->hasOne('App\Bookingdetail');
    }
    
}
