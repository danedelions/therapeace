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
        return $this->hasMany('App\Booking', 'client_id', 'user_id');
    }

    public function getFullNameAttribute()
    {
        return "{$this->fname} {$this->lname}";
    }

    public function getAddressAttribute()
    {
        return "{$this->streetaddress}, {$this->town}, {$this->barangay}, {$this->city}, {$this->province}";
    }
}
