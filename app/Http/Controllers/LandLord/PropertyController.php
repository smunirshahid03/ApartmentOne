<?php

namespace App\Http\Controllers\LandLord;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PropertyController extends Controller
{
    public function properties()
    {
        return view('Dashboard.landlord.properties');
    }

    public function add_property()
    {
        return view('Dashboard.landlord.add_property');
    }

    public function profile()
    {
    $user = Auth::user()->load('bank');

    return view('Dashboard.tenant.profile' ,compact('user'));
    }

    public function store(Request $request){
      dd($request->all());
    }

    public function category_store(Request $request)
    {
        // Validate the input
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:categories,name'
        ]);

        // Create the new category
        $category = Category::create([
            'name' => $validated['name']
        ]);

        // Return the newly created category as a JSON response
        return response()->json([
            'success' => true,
            'category' => $category
        ]);
    }

}
