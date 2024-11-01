<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
        {
            return view('Dashboard.admin.blogs.index');
        }

        public function create(){
            return view('Dashboard.admin.blogs.create');
        }
}
