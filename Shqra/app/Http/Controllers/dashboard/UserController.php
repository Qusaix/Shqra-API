<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Datatables;


class UserController extends Controller
{
    public function index()
    {
        $users = User::role('normal_user')->paginate(15);
        
        return view('dashboard.user.index',compact('users'));
    }

    public function datatable()
    {   
        $users = User::role('admin')->paginate(15);
        return $users;

        return Datatables::of($users)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
   
                           $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';
     
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        
    }

}
