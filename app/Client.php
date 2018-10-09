<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
        protected $fillable = [
        'user_id',
        'fname',
        'lname',
        'contact',
        'gender',
        'city',
        'town',
        'province',
        'barangay',
        'client',
    ];

    public function user()
    {
    	return $this->belongsTo('App\User', 'user_id');
    }
        public function scopeOfUser($query, $userId)
    {
    	return $query->where('user_id', $userId);
    }

    public function booking()
    {
        return $this->hasMany('App\Booking');
    }
}
