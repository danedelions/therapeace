<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
	public function getDashboard()
    {
    	return view('admin.dashboard');
    }

    public function getUserView()
    {
    	return view('admin.users');
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
