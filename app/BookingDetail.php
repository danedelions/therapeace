<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookingDetail extends Model
{
	protected $fillable = [
		'booking_id',
		'diagnosis',
		'image',
		'notes',
		'user_address',
		'contact',
		'email',
	];

    public function bookingRequest()
    {
    	return $this->belongsTo('App\BookingRequest', 'id', 'booking_id');
    }
}
