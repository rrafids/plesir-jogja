<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $dates = ['date'];
    protected $fillable =['id','user_id','place_id','date_id','day','hourStart','hourEnd'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function places()
    {
        return $this->belongsTo('App\Place', 'place_id');
    }

    public function date()
    {
        return $this->belongsTo('App\Date');
    }
    

}
