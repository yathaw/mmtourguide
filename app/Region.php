<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $fillable = ['name', 'division_id'];
    
    public function division()
    {
        return $this->belongsTo('App\Division');
    }

    public function places()
    {
        return $this->hasMany('App\Place');
    }

    
}
