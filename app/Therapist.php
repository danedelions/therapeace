<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Therapist extends Model
{
    protected $fillable = [
        'user_id',
        'image',
        'fname',
        'lname',
        'contact',
        'gender',
        'streetaddress',
        'city',
        'town',
        'province',
        'barangay',
        'postal_code',
        'longitude',
        'latitude',
        'therapist',
        'license_number',
        'expiry_date',
        'license_image',
        'nbi_image',
        'bc_image'
    ] ;

    /**
     * 
     */
    public function specialty()
    {
    	return $this->belongsToMany('App\Specialty', 't_specialties', 'therapist_id', 'spec_id');
    }

    public function user(){


    	return $this->belongsTo('App\User', 'id');
    	// return $this->belongsTo('App\User', 'user_id');
    	// return $this->belongsTo('App\User', 'id');

    	// return $this->belongsTo('App\User', 'user_id');

    	// return $this->belongsTo('App\User', 'id');
    	// // return $this->belongsTo('App\User', 'user_id');

    }

    public function scopeOfUser($query, $userId)
    {
    	return $query->where('id', $userId);
    }

    public function scopeSearch($query, $search)
    {
        if($query === 'Physical Therapist'){
            return $query->where('therapist', 'LIKE', '%$search%');
        }
    }

    public function bookingRequest()
    {
        return $this->hasMany('App\BookingRequest','therapist_id','user_id');
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
