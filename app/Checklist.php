<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Checklist extends Model
{
    protected $fillable = [
        'booking_id',
        'therapist_id',
        'client_id',
        'chief_complaint',
        'vital_sign',
        'bp',
        'pr',
        'rr',
        'assessment',
        'area_ue',
        'area_le',
        'arom',
        'prom',
        'massage',
        'massage_area',
        'massage_min',
        'stretching',
        'stretching_hold',
        'stretching_sets',
        'es_tens',
        'estens_area',
        'estens_min',
        'resistance',
        'resistance_weight',
        'resistance_motion',
        'resistance_reps',
        'resistance_sets',
        'other',
        'other_text',
    ];

    public function booking()
    {
        return $this->belongsTo('App\Booking', 'booking_id');
    }
}
