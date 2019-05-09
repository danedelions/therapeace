<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\request;
use App\User;

class UserExpiryNotice extends Mailable
{
    use Queueable, SerializesModels;

    protected $id; 
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($id)
    {
        $this->id = $id;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(Request $request)
    {
        $user = User::find($this->id);

        // dd($user);

        return $this->view('admin.notice', compact('user'))->to($user->email);
    }
}
