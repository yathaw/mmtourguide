<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bookingdetail extends Model
{
    protected $fillable = ['tour_date', 'tour_day', 'tour_time', 'status', 'guide_id', 'booking_id'];

    public function guide()
    {
        return $this->belongsTo('App\Guide');
    }

    public function booking()
    {
        return $this->belongsTo('App\Booking');
    }
    
}
