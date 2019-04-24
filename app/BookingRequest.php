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
        return $this->belongsTo('App\Client', 'client_id', 'user_id');
    }

    public function therapist()
    {
        return $this->belongsTo('App\Therapist', 'therapist_id', 'user_id');
    }

    public function bookingDetails()
    {
        return $this->hasOne('App\BookingDetail', 'booking_id');
    }

    public function appointment()
    {
        return $this->hasOne('App\Appointment', 'booking_id');
    }

    public function checklist()
    {
        return $this->hasOne('App\Checklist', 'booking_id');
    }

    public function progress()
    {
        return $this->hasMany('App\Progress', 'booking_id');
    }

    public function report()
    {
        return $this->hasOne('App\Report', 'booking_id');
    }

    public function reject()
    {
        return $this->update([
            'status' => 2
        ]);
    }

    public function approve()
    {
        return $this->update([
            'status' => 1
        ]);
    }

    public function finish()
    {
        return $this->update([
            'status' => 3
        ]);
    }

    public function cancel()
    {
        return $this->update([
            'status' => 4
        ]);
    }

    public function is($status)
    {
        $allStatus = ['pending', 'approved', 'rejected', 'finished', 'cancelled'];

        return array_search(strtolower($status), $allStatus) == $this->status;
    }

    public function scopeApproved($query)
    {
        return $query->where('status', 1);
    }

    public function scopeOfBooking($query, $bookingID)
    {
        return $query->where('id', $bookingId);
    }
}