<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tourist extends Model
{
    protected $fillable = ['gender', 'phone', 'address', 'image', 'cardtype', 'passport', 'passportcard',  'nationality', 'dob', 'doi', 'doe', 'status', 'country_id', 'user_id'];

    public function country()
    {
        return $this->belongsTo('App\Country');
    }
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function booking()
    {
        return $this->hasOne('App\Booking');
    }

    public function rating()
    {
        return $this->hasOne('App\Rating');
    }

}
