<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Date extends Model
{
    protected $fillable =['id','date', 'created_at'];
    public function schedule()
    {
        return $this->hasMany('App\Schedule');
    }
    public static function boot() {
        parent::boot();

        static::deleting(function($user) { // before delete() method call this
            $user->schedule()->delete();
             // do the rest of the cleanup...
        });
    }
}
