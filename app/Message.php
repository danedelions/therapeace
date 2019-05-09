<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
        'sent_from',
        'sent_to',
        'message',
        'status'
    ];

     protected $appends = [
        'fullName'
    ];

    protected $dates = [
        'created_at'
    ];

    public function remove()
    {
        return $this->update([
            'status' => 1
        ]);
    }

    public function active()
    {
        return $this->update([
            'status' => 0
        ]);
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function getFullNameAttribute()
    {
        return "{$this->fname} {$this->lname}";
    }
}
