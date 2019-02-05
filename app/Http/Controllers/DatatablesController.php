<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class DatatablesController extends Controller
{
    
    public function getUser(Request $request)
    {
        $columns = array(
            0 => 'id',
            1 => 'username',
            2 => 'email',
            3 => 'user_type',
            4 => 'status',
            5 => 'action'
        );

        $totalData = User::count();
        $limit = $request->input('length');
        $start = $request->input('start');
        $order = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');

        if(empty($request->input('search.value'))){
            $posts = User::offset($start)
                ->limit($limit)
                ->orderBy($order,$dir)
                ->get();
            $totalFiltered = User::count();
        }else{
            $search = $request->input('search.value');
            $posts = User::where('id', 'like', "%{$search}")
                    ->orWhere('username', 'like', "%{$search}")
                    ->orWhere('email', 'like', "%{$search}")
                    ->orWhere('user_type', 'like', "%{$search}")
                    ->orWhere('status', 'like', "%{$search}")
                    ->offset($start)
                    ->limit($limit)
                    ->orderBy($order, $dir)
                    ->get();
            $totalFiltered = User::where('id', 'like', "%{$search}")
                    ->orWhere('username', 'like', "%{$search}")
                    ->orWhere('email', 'like', "%{$search}")
                    ->orWhere('user_type', 'like', "%{$search}")
                    ->orWhere('status', 'like', "%{$search}")
                    ->count();
        }

        $data = array();
        if($posts){
            foreach($posts as $r){
                $nestedData['id'] = $r->name;
                $nestedData['username'] = $r->username;
                $nestedData['email'] = $r->email;
                $nestedData['user_type'] = $r->usertype;
                $nestedData['status'] = $r->status;
                $nestedData['action'] = '
                    <a href="#" class="btn btn-info btn-xs">View</a>
                    <a href="#" class="btn btn-danger btn-xs">Del</a>
                ';
                $data[] = $nestedData;    
            }
        }

        $json_data = array(
            "draw"          => intval($require->input('draw')),
            "recordsTotal"  => intval($totalData),
            "recordsFiltered" => intval($totalFiltered),
            "data"          => $data
        );

        echo json_encode($json_data);
    }

    
}
