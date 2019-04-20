<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * Class User
 * @package App
 *
 * @property $user_type string
 *
 */
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
        'password',
        'remember_token',
    ];

    protected $appends = [
        'fullName'
    ];

    protected $status = [
        '0' => 'unblocked',
        '1' => 'blocked',
        '2' => 'approved'
    ];


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

    public function isRole($role)
    {
        return $this->user_type === $role;
    }

    public function homepage()
    {
        switch ($this->user_type) {
            case 'therapist':
                return redirect(route('get.therapist-account'));
            case 'client':
                return redirect(route('get.client-find'));
            case 'admin':
                return redirect(route('get.view'));
        }
    }

    public function conversationWith($partner, $lastMessageId = false)
    {
        Message::query()
               ->where([
                   ['sent_to', '=', $this->id],
                   ['sent_from', '=', $partner],
               ])
               ->whereNull('seen_at')
               ->update([
                   'seen_at' => date_create(null)->format('Y-m-d H:i:s')
               ]);

        $data = Message::query()
                       ->where(function ($query) USE ($partner) {
                           $query->where(function ($q) USE ($partner) {
                               $q->where('sent_from', $this->id)->where('sent_to', $partner);
                           })->orWhere(function ($q) USE ($partner) {
                               $q->where('sent_from', $partner)->where('sent_to', $this->id);
                           });
                       })
                       ->orderBy('created_at');

        if ($lastMessageId) {
            $data->where('id', '>', $lastMessageId);
        } else {
            $data->limit(20);
        }

        return $data->get();
    }

    public function getConversationList()
    {
        return \DB::table('messages')
                 ->select(
                     'messages.sent_from AS sender_id',
                     \DB::raw('SUM(CASE WHEN messages.seen_at IS NULL THEN 1 ELSE 0 END) AS unseen_count')
                 )
                 ->where('messages.sent_to', $this->id)
                 ->groupBy('messages.sent_from')
                 ->get();
    }
}