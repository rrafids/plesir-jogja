<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    protected $fillable =['nama','hari','buka','tutup','harga_tiket','deskripsi','tempat_umum', 'gambar' ];

    public $timestamps = false;

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    public function tickets()
    {
        return $this->hasMany('App\Ticket');
    }

    public static function boot() {
        parent::boot();

        static::deleting(function($user) { // before delete() method call this
            $user->comments()->delete();
             // do the rest of the cleanup...
        });
    }

    public function schedules()
    {
        return $this->hasMany('App\Schedule');
    }
}
