<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Therapist extends Model
{
    protected $fillable = ['image'] ;

    /**
     * 
     */
    public function specialty()
    {
    	return $this->belongsToMany('App\Specialty', 't_specialties', 'therapist_id', 'spec_id');
    }
}
