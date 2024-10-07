<?php

namespace App\Http\Controllers\LandLord;

use App\Models\Pet;
use App\Models\Media;
use App\Models\Feature;
use App\Models\Category;
use App\Models\Property;
use App\Models\RentToWho;
use Illuminate\Http\Request;
use App\Models\RentToWhoDetails;
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
        $categories = Category::select('name','id')->get();
       $features = Feature::select('name','id')->get();
       $pets = Pet::select('name','id')->get();
       $rentWhos = RentToWho::select('name','id')->get();

        return view('Dashboard.landlord.add_property' ,compact('features','pets','rentWhos','categories'));
    }

    public function profile()
    {
    $user = Auth::user()->load('bank');

    return view('Dashboard.tenant.profile' ,compact('user'));
    }

    public function store(Request $request)
    {
        $id = Auth::user()->id;

        // Validate the request data
        $validated = $request->validate([
            'images' => 'required|array|min:3|max:50',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:4048',
            'name' => 'required|string|max:255',
            'category' => 'required|integer',
            'credit_point' => 'required|integer|min:10|max:2500',
            'features' => 'required|array',
            'pets' => 'required|array',
            'rent_whos' => 'required|array',
            'other_details' => 'nullable|string',
            'availability' => 'required|boolean',
            'price' => 'required|numeric',
        ]);

        // Create the new property
        $property = Property::create([
            'user_id' => $id,
            'name' => $validated['name'],
            'cat_id' => $validated['category'],
            'credit_point' => $validated['credit_point'],
            'other_details' => $validated['other_details'],
            'available_status' => $validated['availability'],
            'price_rent' => $validated['price'],
        ]);

        // Handle image upload and store paths in the Media model
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imagePath = $image->store('image/property', 'public');
                Media::create([
                    'property_id' => $property->id,
                    'img_path' => $imagePath,
                ]);
            }
        }

        // Handle the rent_to_who relationship
        if ($request->has('rent_whos') && is_array($request->rent_whos)) {
            foreach ($request->rent_whos as $rentWhoId) {
                RentToWhoDetails::create([
                    'property_id' => $property->id,
                    'rent_to_who_id' => $rentWhoId,
                ]);
            }
        }

        // Return a success response
        return response()->json(['message' => 'Property created successfully!'], 201);
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
    public function propertiesdetails()
    {
        return view('Dashboard.landlord.propertiesdetails');
    }

}
