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
}
