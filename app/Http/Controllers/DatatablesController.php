<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Datatables;
use App\Client;
use App\Therapist;
use App\User;
use Mail;
use DB;
use App\Http\Requests\UserRequest;

class DatatablesController extends Controller
{
    /**
     * Displays datatables front end view
     *
     * @return \Illuminate\View\View
     */
    public function getIndex()
    {
        return view('admin.users2');
    }

    /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function anyData()
    {
        return Datatables::of(User::query())->make(true);
    }
}
