<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'user_id',
        'fname',
        'lname',
        'contact',
        'gender',
        'city',
        'province',
        'street',
        'brgy',
        'res_detail',
        'building',
        'landmark',
        'address_remarks',

    ];

    protected $appends = [
        'fullName',
        'address'
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function scopeOfUser($query, $userId)
    {
        return $query->where('user_id', $userId);
    }

    public function booking()
    {
        return $this->hasMany('App\BookingRequest', 'client_id', 'user_id');
    }

    public function appointment()
    {
        return $this->hasMany('App\Appointment', 'client_id', 'user_id');
    }

    public function getFullNameAttribute()
    {
        return "{$this->fname} {$this->lname}";
    }

    public function getAddressAttribute()
    {
        return "{$this->res_detail} {$this->building} {$this->street} {$this->brgy} {$this->city} {$this->province} {$this->landmark} {$this->address_remarks} ";
    }

    public static  function ofTherapist(int $therapistId)
    {
        $bookingRequests = BookingRequest::query()
                                         ->select('client_id')
                                         ->where([
                                             ['therapist_id', '=', $therapistId],
                                             ['status', '=', 1]
                                         ])->pluck('client_id');

        return $bookingRequests->count() ? parent::find($bookingRequests->all()) : collect();
    }
}
