<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index()
    {
        return view('Website.index');
    }

    public function about()    
    {
        return view('Website.about');
    }

    public function help()    
    {
        return view('Website.help');
    }

    
    public function blog()    
    {
        return view('Website.blog');
    }

    public function blogdescription()    
    {
        return view('Website.blogdescription');
    }

    public function faqs()    
    {
        return view('Website.faqs');
    }

    public function contact()    
    {
        return view('Website.contact');
    }

    public function services()    
    {
        return view('Website.services');
    }

    public function seekingahome()    
    {
        return view('Website.seekingahome');
    }

    public function rentahome()    
    {
        return view('Website.rentahome');
    }

    public function info()    
    {
        return view('Website.info');
    }

    public function login()    
    {
        return view('Website.login');
    }

    public function register()    
    {
        return view('Website.register');
    }
    
    
    
}
