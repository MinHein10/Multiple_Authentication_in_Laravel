<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StaffLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:staff')->except('logout');
    }

    public function showLoginForm(){
        return view('auth.staff-login',['url'=>'employees']);
    }

    public function login(Request $request){
        // Validate form data
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:4'
        ]);


        // Attempt to log the user in
        if(Auth::guard('staff')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember))
        {
            return redirect()->intended(route('staff.dashboard'));
        }

        // if unsuccessful
        return back()->withInput($request->only('email','remember'));
    }
}
