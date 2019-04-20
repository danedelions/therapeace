<?php

namespace App\Http\Controllers;

use App\Message;
use App\Therapist;
use Illuminate\Http\Request;
use App\Client;
use Auth;

class MessagingController extends Controller
{
    public function index($recipientId = null)
    {
        $threadList = Auth::user()->getConversationList()->keyBy('sender_id');

        if (Auth::user()->isRole('therapist')) {
            $contacts = Client::ofTherapist(data_get(Auth::user(), 'therapist.user_id'));
        } elseif (Auth::user()->isRole('client')) {
            $contacts = Therapist::whereIn('user_id', $threadList->pluck('sender_id'))->get();
        }
        
    //    dd($threadList->toArray());

        $thread = [];
        if ($recipientId) {
            $thread = Auth::user()->conversationWith($recipientId);
        }

//        dd($thread->toArray());

        return view('therapist.message', compact('threadList', 'thread', 'contacts'));
    }

    public function sendMessage($recipientId, Request $request)
    {
        $request->validate([
            'message' => 'required'
        ]);

        Message::create([
            'sent_from' => Auth::id(),
            'sent_to'   => $recipientId,
            'message'   => $request->input('message')
        ]);

        return redirect()->back();
    }

}
