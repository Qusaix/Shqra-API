<?php

namespace App\Http\Controllers\api\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class RigsterController extends Controller
{
    
    public function signup(Request $request)
    {

        // $user = new User;
        // $user->name = "Qusai";
        // $user->email = "qusai1@gmail.com";
        // $user->password = bcrypt(123456);
        // $user->zip_code = '12141';
        // $user->phone = '099099179';
        // $user->save();

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->zip_code = $request->zip_code;
        $user->phone = $request->phone;
        $user->save();

        return response()->json([
            'secc'=>'User Was Created'
        ]);
    }


}
