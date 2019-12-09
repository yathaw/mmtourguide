<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    protected $fillable = ['name', 'flag', 'capital', 'region', 'type', 'description'];

    public function regions()
    {
        return $this->hasMany('App\Region');
    }

    public function guide()
    {
        return $this->hasOne('App\Guide');
    }
    
}
