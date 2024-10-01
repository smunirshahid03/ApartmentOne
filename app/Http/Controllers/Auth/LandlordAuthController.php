<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LandlordAuthController extends Controller
{


    public function dashboard()
    {
        return view('Dashboard.landlord.dashboard');
    }



    public function properties()
    {
        return view('Dashboard.landlord.properties');
    }

    public function add_property()
    {
        return view('Dashboard.landlord.add_property');
    }


}
