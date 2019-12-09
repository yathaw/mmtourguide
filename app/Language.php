<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $fillable = ['name', 'flag'];

    public function guides()
    {
        return $this->belongsToMany('App\Guide')
                    ->withTimestamps();
    }
    
}
