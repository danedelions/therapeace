<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Progress extends Model
{
    protected $fillable = [
        'booking_id',
        'client_id',
        'therapist_id',
        'session_date',
        'progress',
    ];

    public function booking()
    {
        return $this->belongsTo('App\BookingRequest', 'booking_id');
    }

    public function client()
    {
        return $this->belongsTo('App\Client', 'client_id', 'user_id');
    }

    public function therapist()
    {
        return $this->belongsTo('App\Therapist', 'therapist_id', 'user_id');
    }
}
