<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'user_type',
        'status'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $appends = [
        'fullName'
    ];

      protected $status = array(
        '0' => 'unblocked',
        '1' => 'blocked',
        '2' => 'approved'
    );


    public function therapist()
    {
        return $this->hasOne('App\Therapist', 'user_id', 'id');
    }

    public function client()
    {
        return $this->hasOne('App\Client', 'user_id', 'id');
    }

    public function getFullNameAttribute()
    {
        return "{$this->fname} {$this->lname}";
    }

    public function getStatusAttribute($value)
    {
        return $this->status[$value];
    }
}