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
=======
    	return $this->belongsTo('App\User', 'user_id');
>>>>>>> e804af52f673025b54ffe9d45efc156104470456
    }

    public function scopeOfUser($query, $userId)
    {
    	return $query->where('id', $userId);
    }
}
