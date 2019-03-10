<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specialty extends Model
{

    protected $fillable = [
        'name'
    ];

    public function specialty()
    {
        return $this->belongsTo('App\Specialty','spec_id');
    }

    public function therapist()
    {
        return $this->belongsTo('App\Specialty','therapist_id');
    }
}
