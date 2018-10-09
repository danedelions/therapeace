<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Booking;

class Booking extends Model
{
	protected $fillable = [
		'therapist_id',
		'client_id',
		'status',
	];

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
    	return $this->hasOne('App\bookingDetails', 'booking_id', 'id');
    }
}
