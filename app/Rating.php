<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $fillable = ['star', 'guide_id', 'tourist_id'];
    
    public function guide()
    {
        return $this->belongsTo('App\Guide');
    }

    public function tourist()
    {
        return $this->belongsTo('App\Tourist');
    }
}
