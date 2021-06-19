<?php

namespace App\Http\Controllers\Users\Staff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:staff');
    }

    public function index()
    {
        return view('staff');
    }
}
