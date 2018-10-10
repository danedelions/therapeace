<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookingDetail extends Model
{
	protected $fillable = [
		'booking_id',
		'diagnosis',
		'notes',
		'user_address',
		'contact',
		'email',
	];

    public function booking()
    {
    	return $this->hasOne('App\Booking', 'booking_id', 'id');
    }
}
