<?php

namespace App\Http\ViewComposers;

use App\Client;
use App\Therapist;
use App\User;
use Illuminate\View\View;
use Carbon\Carbon;

Class AdminNotificationComposer
{
	public function create(View $view)
	{   
		
		// new client count
		$client = Client::select('created_at')->whereNotNull('created_at')->get();
		$this->newClientCount = $client->filter(function ($client) {
			return Carbon::now()->gte(Carbon::parse($client->created_at));
		})->count();

		// new therapist count
		$this->newTherapistCount = User::where('user_type', 'therapist')->where('status', 2)->count();

		// expired therapist list
		$therapists = Therapist::all();
		$this->therapistExpiration = $therapists->filter(function ($therapist) {
			return Carbon::now()->gte(Carbon::parse($therapist->expiry_date)->subDay(5));
		});

		$this->therapistCount = $this->therapistExpiration->count();


		$view->with('count', $this->newClientCount + $this->newTherapistCount + $this->therapistCount)
			 ->with('newClientCount', $this->newClientCount)
			 ->with('newTherapistCount', $this->newTherapistCount)
			 ->with('expiredTherapists', $this->therapistExpiration);
	}
}
