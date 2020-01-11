<?php

namespace App\Http\Controllers\dashboardAuth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as AuthUser;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\dashboard\UserRequest;
use App\User;
use Spatie\Permission\Models\Role;



class Auth extends Controller
{
    public function login()
    {
        if(auth()->user()){
            return redirect()->route('dashboard.home');
        }

        return view('auth.login');
    }

    public function login_button(Request $request)
    {

        $credentials = $request->only('email', 'password');

        if(AuthUser::attempt($credentials,isset($request->remember_me)))
        {
            $role = auth()->user()->getRoleNames();

            foreach($role as $name){
                if($name == 'admin'){
                    return redirect()->route('dashboard.home');
                    }
                    else{
                    return redirect()->route('home');
                    }
            }
           
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


    public function rigster()
    {
        return view('auth.registration');
    }

    public function rigster_button(UserRequest $request)
    {
        $user = new User;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name; 
        $user->zip_code = $request->zip_code;
        $user->phone = $request->phone;
        $user->password = bcrypt($request->password);
        $user->email = $request->email;

        if($request->company_conf){
        $role = Role::find(2);
        $user->company = $request->company_name;
        $user->save();
        $user->assignRole($role);

        }else{
            $role = Role::find(3);
            $user->save();
            $user->assignRole($role);
        }




        return redirect()->route('login');
    }
}
