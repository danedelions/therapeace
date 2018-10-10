<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookingRequest extends Model
{
	protected $fillable = [
		'therapist_id',
		'client_id',
		'name',
		'status',
	];

	public function client()
	{
		return $this->belongsTo('App\Client', 'client_id');
	}

	public function therapist()
	{
		return $this->belongsTo('App\Therapist', 'therapist_id', 'user_id');
	}

    public function bookingDetails()
    {
    	return $this->hasOne('App\bookingDetails', 'booking_id', 'id');
    }
}
