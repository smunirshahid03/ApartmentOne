<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('Dashboard.tenant.dashboard');
    }

    public function properties()
    {
        return view('Dashboard.tenant.properties');
    }
    public function propertieslistings()
    {
        return view('Dashboard.tenant.propertieslistings');
    }

    public function applyhistory()
    {
        return view('Dashboard.tenant.applyhistory');
    }

    public function profile()
    {
        return view('Dashboard.tenant.profile');
    }
}


