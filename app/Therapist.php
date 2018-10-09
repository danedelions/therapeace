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

<<<<<<< HEAD
    	return $this->belongsTo('App\User', 'id');
    	// return $this->belongsTo('App\User', 'user_id');
=======
    	// return $this->belongsTo('App\User', 'id');

    	return $this->belongsTo('App\User', 'user_id');

>>>>>>> f671f61c891ae8376c38116a544ea8f92e174568
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

    public function booking()
    {
        return $this->hasMany('App\Booking');
    }
}
