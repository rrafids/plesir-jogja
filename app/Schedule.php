<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable = ['place_id', 'date', 'time_start', 'time_end'];

    public function user()
    {
        return $this->belongsTo('App\User');

    }

    public function Place() 
    {
        return $this->hasMany('App\Place');
    }
}
