<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = [
		'booking_id',
		'therapist_id',
		'client_id',
		'name',
		'address',
		'start_date',
		'end_date',
	];

	public function booking()
	{
		return $this->belongsTo('App\BookingRequest', 'id', 'booking_id');
	}

	public function client()
	{
		return $this->belongsTo('App\Client', 'user_id', 'client_id');
	}

	public function therapist()
	{
		return $this->belongsTo('App\Therapist', 'user_id', 'therapist_id');
	}
}
