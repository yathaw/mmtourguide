<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guide extends Model
{
    protected $fillable = ['license', 'licensecertificate', 'phone', 'address', 'gender', 'profile', 'cv', 'approveddate', 'bio', 'hourrate', 'dailyrate', 'status', 'user_id', 'division_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function division()
    {
        return $this->belongsTo('App\Division');
    }

    public function languages()
    {
        return $this->belongsToMany('App\Language');
    }

    public function places()
    {
        return $this->belongsToMany('App\Place');
    }

    public function guides()
    {
        return $this->hasMany('App\Guide');
    }
    
}
