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

}
