<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\Therapist;
use App\User;

class AdminController extends Controller
{
	public function getDashboard()
    {
    	return view('admin.dashboard');
    }

    public function getUserView()
    {
        $users = User::all()->toArray();
    	return view('admin.users', compact('users'));
    }

    public function getPendingView()
    {
    	return view('admin.pending');
    }

    public function getHistoryView()
    {
    	return view('admin.history');
    }

    public function getReportsView()
    {
    	return view('admin.reports');
    }
}
