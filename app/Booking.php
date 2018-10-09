<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
	public function client()
	{
		return $this->belongsTo('App\Client', 'client_id');
	}

	public function therapist()
	{
		return $this->belongsTo('App\therapist', 'therapist_id');
	}

    public function bookingDetails()
    {
    	return $this->hasOne('App\Booking', 'booking_id');
    }
}
