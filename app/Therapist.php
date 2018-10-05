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

<<<<<<< HEAD
    public function user(){
    	return $this->belongsTo('App\User', 'id', 'user_id');
    }

=======
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function scopeOfUser($query, $userId)
    {
    	return $query->where('user_id', $userId);
    }
>>>>>>> 148cb2c4ed8505dc3f1ba38179f54c1b5902d685
}
