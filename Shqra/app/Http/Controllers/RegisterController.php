<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    protected function create(Request $data)
    {
        $user = new User;
        $user->name = $data->name;
        $user->email = $data->email;
        $user->phone = $data->phone;
        $user->zip_code = $data->zip_code;
        $user->password = bcrypt($data->password);
        $user->save();

        return response()->json(['success:User Was Created'],201);
        
    }
}
