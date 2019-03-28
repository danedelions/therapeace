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
    ] ;
<<<<<<< HEAD
    protected $appends = [
        'photo_url'
=======

    protected $appends = [
        'full_name'
>>>>>>> b16711d16651a32f4ab082ad76622699dce84f5f
    ];
    /**
     * 
     */
    public function specialty()
    {
        return $this->belongsToMany('App\Specialty', 't_specialties', 'therapist_id', 'spec_id');
    }
    public function user(){
<<<<<<< HEAD
        return $this->belongsTo('App\User', 'id');
        // return $this->belongsTo('App\User', 'user_id');
        // return $this->belongsTo('App\User', 'id');
        // return $this->belongsTo('App\User', 'user_id');
        // return $this->belongsTo('App\User', 'id');
        // // return $this->belongsTo('App\User', 'user_id');
=======


    	return $this->belongsTo('App\User', 'id');

    }

    public function associatedUser() 
    {
        return $this->belongsTo(User::class, 'user_id');
>>>>>>> b16711d16651a32f4ab082ad76622699dce84f5f
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
<<<<<<< HEAD
=======

>>>>>>> b16711d16651a32f4ab082ad76622699dce84f5f
    public function appointments()
    {
        return $this->hasMany('App\Appointment', 'therapist_id', 'user_id');
    }
<<<<<<< HEAD
=======

>>>>>>> b16711d16651a32f4ab082ad76622699dce84f5f
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
<<<<<<< HEAD
}
=======

    public function accept()
    {
        return $this->associatedUser()->update([
            'status' => 0
        ]);
    }
}
>>>>>>> b16711d16651a32f4ab082ad76622699dce84f5f
