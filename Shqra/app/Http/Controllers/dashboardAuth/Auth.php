<?php

namespace App\Http\Controllers\dashboardAuth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as AuthUser;
use RealRashid\SweetAlert\Facades\Alert;


class Auth extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function login_button(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if(AuthUser::attempt($credentials))
        {
            return redirect()->route('dashboard.home');
        }else{
            Alert::toast('The Email or the Password are Wrong', 'error');
            return back();
        }
    }

    public function logout()
    {
        AuthUser::logout();

        return redirect()->route('login');
    }
}
