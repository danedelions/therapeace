<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

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
        'start_date_time',
        'end_date_time',
        'other_services',
        'other_services_fee',
        'num_hours_per_day'
    ];

    protected $casts = [
        'num_hours_per_day'  => 'float',
        'other_services_fee' => 'float',
    ];

    protected $appends = [
        'start_timestamp',
        'end_timestamp',
        'durationDate'
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
        return $this->belongsTo('App\Therapist', 'user_id', 'therapist_id');
    }

    public function getStartDateTimeAttribute($val)
    {
        return $val ? Carbon::parse($val)->format('H:i') : $val; //translate words whenever possible (months, day names, etc.)
    }

    public function getEndDateTimeAttribute($val)
    {
        return $val ? Carbon::parse($val)->format('H:i') : $val;
    }

    public function getStartTimestampAttribute()
    {
        return Carbon::createFromFormat('Y-m-d H:i', "{$this->start_date} {$this->start_date_time}");
    }

    public function getEndTimestampAttribute()
    {
        return Carbon::createFromFormat('Y-m-d H:i', "{$this->end_date} {$this->end_date_time}");
    }

    public function getDurationDateAttribute()
    {
        return "{$this->start_date} - {$this->end_date}";
    }
}
