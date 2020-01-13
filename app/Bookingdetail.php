<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bookingdetail extends Model
{
    protected $fillable = ['hour_startdate', 'numberofhours', 'daily_startdate', 'daily_enddate', 'tour_day', 'arrival_time', 'departure_time', 'numberofadult', 'numberofchild', 'requirement', 'cost', 'status', 'confirmdate', 'finishdate', 'guide_id', 'place_id', 'booking_id'];

    public function guide()
    {
        return $this->belongsTo('App\Guide');
    }

    public function place()
    {
        return $this->belongsTo('App\Place');
    }


    public function booking()
    {
        return $this->belongsTo('App\Booking');
    }
    
}
