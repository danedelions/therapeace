<?php
namespace App\Http\Controllers;
use App\Message;
use App\Therapist;
use App\Client;
use Illuminate\Http\Request;
use Auth;       
class MessagingController extends Controller
{
    public function therapistindex($recipientId = null)
    {
        $threadList = Auth::user()->getConversationList()->keyBy('sender_id');

        if (Auth::user()->isRole('therapist')) {  
            $contacts = Client::ofTherapist(data_get(Auth::user(), 'therapist.user_id'));
        } elseif (Auth::user()->isRole('client')) {
            // $contacts = Therapist::find($threadList->pluck('sender_id'));
            $contacts = Therapist::ofClient(data_get(Auth::user(), 'client.user_id'));
        }
//        dd($threadList->toArray());
        $thread = [];
        if ($recipientId) {
            $thread = Auth::user()->conversationWith($recipientId); //see model of conversationWith() use the variables there
        }
        // dd($thread->toArray());
        return view('therapist.message', compact('threadList', 'thread', 'contacts'));
    }
    public function therapistsend($recipientId, Request $request)
    {
        $request->validate([
            'message' => 'required'
        ]);
        Message::create([
            'sent_from' => Auth::id(),
            'sent_to'   => $recipientId,
            'message'   => $request->input('message'),
            'status' => 0
        ]);
        return redirect()->back();
    }
    public function clientindex($recipientId = null)
    {
        $threadList = Auth::user()->getConversationList()->keyBy('sender_id');
        if (Auth::user()->isRole('therapist')) {  
            $contacts = Client::ofTherapist(data_get(Auth::user(), 'therapist.user_id'));
        } elseif (Auth::user()->isRole('client')) {
            // $contacts = Therapist::find($threadList->pluck('sender_id'));
            $contacts = Therapist::ofClient(data_get(Auth::user(), 'client.user_id'));
        }
//        dd($threadList->toArray());
        $thread = [];
        if ($recipientId) {
            $thread = Auth::user()->conversationWith($recipientId);
        }
        // dd($thread->toArray());
        return view('client.message', compact('threadList', 'thread', 'contacts'));
    }
    public function clientsend($recipientId, Request $request)
    {
        $request->validate([
            'message' => 'required'
        ]);
        Message::create([
            'sent_from' => Auth::id(),
            'sent_to'   => $recipientId,
            'message'   => $request->input('message'),
            'status' => 0
        ]);
        return redirect()->back();
    }

    public function removeReply($id)
    {
        $message = Message::findOrFail($id);
        $message->remove();
        return redirect()->back();
    }

    public function deleteReply($id)
    {
        $message = Message::findOrFail($id);
        $message->delete();
        return redirect()->back();
    }

    public function remove($id)
    {
        $message = Message::findOrFail($id);
        $message->remove();
        return redirect()->back();
    }

    public function delete($id)
    {
        $message = Message::findOrFail($id);
        $message->delete();
        return redirect()->back();
    }

}