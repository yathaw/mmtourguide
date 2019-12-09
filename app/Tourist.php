<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tourist extends Model
{
    protected $fillable = ['gender', 'image', 'cardtype', 'passport', 'passportcard',  'nationality', 'dob', 'doi', 'doe', 'status', 'country_id', 'user_id'];

    public function country()
    {
        return $this->belongsTo('App\Country');
    }
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
