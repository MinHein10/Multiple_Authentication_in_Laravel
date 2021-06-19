<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AdminLoginController extends Controller
{
    public function __construct(){
        $this->middleware('guest:admin')->except('logout');
    }

    public function showLoginForm()
    {
        return view('auth.admin-login',['url'=>'admin']);
    }

    public function login(Request $request){
        // Validate form data
        $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required|min:4',
        ]);

        // Attempt to log the user in
        if (Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password],$request->remember)) {
            return redirect()->intended(route('admin.dashboard'));
        }

        // if unsuccessful
        return back()->withInput($request->only('email','remember'));
    }
}
