<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Therapist extends Model
{
    protected $fillable = [
        'user_id',
        'image',
        'fname',
        'lname',
        'contact',
        'gender',
        'streetaddress',
        'city',
        'province',
        'barangay',
        'postal_code',
        'longitude',
        'latitude',
        'therapist',
        'license_number',
        'expiry_date',
        'license_image',
        'nbi_image',
        'bc_image'
    ];

    protected $appends = [
        'photo_url',
        'full_name'
    ];

    /**
     * 
     */
    public function specialty()
    {
        return $this->belongsToMany('App\Specialty', 't_specialties', 'therapist_id', 'spec_id');
    }
    public function user()
    {
        return $this->belongsTo('App\User', 'id');
    }

    public function associatedUser() 
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function scopeOfUser($query, $userId)
    {
        return $query->where('id', $userId);
    }
    public function bookingRequest()
    {
        return $this->hasMany('App\BookingRequest','therapist_id','user_id');
    }
    public function appointment()
    {
        return $this->hasMany('App\Appointment', 'therapist_id', 'user_id');
    }
    public function appointments()
    {
        return $this->hasMany('App\Appointment', 'therapist_id', 'user_id');
    }
    public function getFullNameAttribute()
    {
        return "{$this->fname} {$this->lname}";
    }
    public function getAddressAttribute()
    {
        return "{$this->streetaddress}, {$this->town}, {$this->barangay}, {$this->city}, {$this->province}";
    }
    public function specialties()
    {
        return $this->belongsToMany(Specialty::class, 't_specialties', 'therapist_id', 'spec_id');
    }
    public function accept()
    {
        return $this->associatedUser()->update([
            'status' => 0
        ]);
    }
}

