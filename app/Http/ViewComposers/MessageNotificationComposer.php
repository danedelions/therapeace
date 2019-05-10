<?php

namespace App\Http\ViewComposers;

use App\Message;
use Auth;
use Illuminate\View\View;

Class MessageNotificationComposer
{
	public function create(View $view)
	{   
		$this->messageCount = Message::where(function ($q) {
            $q->where('sent_to', Auth::user()->id)
                ->where('seen_at', NULL);
        })->count();

		$view->with('count', $this->messageCount);
	}
}
