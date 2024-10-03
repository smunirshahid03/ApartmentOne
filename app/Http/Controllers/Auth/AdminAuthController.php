<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminAuthController extends Controller
{
    public function dashboard()
    {
        $user = Auth::user();
        return view('Dashboard.admin.dashboard' ,compact('user'));
    }
    public function notifications()
    {
        return view('Dashboard.tenant.notifications');
    }

    public function properties()
    {
        return view('Dashboard.admin.properties');
    }


}
