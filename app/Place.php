<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    protected $fillable = ['name', 'photo', 'description', 'region_id'];

    public function region()
    {
        return $this->belongsTo('App\Region');
    }

    public function guides()
    {
        return $this->belongsToMany('App\Guide')
                    ->withPivot('price')
                    ->withTimestamps();
    }

    public function booking()
    {
        return $this->hasOne('App\Booking');
    }
    
}
