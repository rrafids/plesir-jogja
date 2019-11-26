<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{    

    protected $fillable =['content', 'user_id','place_id'];

    public function user()
    {
        return $this->belongsTo('App\User');

    }
    public function Place()
    {
        return $this->belongsTo('App\Place', 'place_id', 'id');
    }
}
