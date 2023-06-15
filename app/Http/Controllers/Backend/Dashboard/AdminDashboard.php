<?php

namespace App\Http\Controllers\Backend\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminDashboard extends Controller
{
    public function dashboard(Request $rqst)
    {
        // dd($rqst->route()->getName());
       return view('backend.dashboard.dashboard');
    }

    public function adminProfile(Request $rqst)
    {
    //    $val = Helper::Decrypt_Password('UThVbzFKYz0=');
       return view("Dashboard/SuperAdmin/profile");
    }
}
