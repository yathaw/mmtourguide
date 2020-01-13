<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = ['tokenno', 'bookingdate', 'confirmdate', 'finishdate', 'invoicepdf', 'total', 'totalguide', 'status', 'tourist_id'];

    public function bookingdetail()
    {
        return $this->hasOne('App\Bookingdetail');
    }

    public function tourist()
    {
        return $this->belongsTo('App\Tourist');
    }
    
}
