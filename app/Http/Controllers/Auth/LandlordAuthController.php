<?php

namespace App\Http\Controllers\Auth;

use App\Models\Bank;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class LandlordAuthController extends Controller
{


    public function dashboard()
    {
        return view('Dashboard.landlord.dashboard');
    }
    public function updateProfile(Request $request)
{
    $user = auth()->user();
    // Validate the incoming request
    $validator = Validator::make($request->all(), [
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users,email,' . Auth::id(),
        'phone' => 'nullable|string|max:255',
        'city' => 'nullable|string|max:255',
        'country' => 'nullable|string|max:255',
        'state' => 'nullable|string|max:255',
        'postal_code' => 'nullable|string|max:255',
        'date_of_birth' => 'nullable|date',
        'profile_img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:4048',
    ]);
    if($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    // Update user fields
    $user->name = $request->name;
    $user->email = $request->email;
    $user->phone = $request->phone;
    $user->city = $request->city;
    $user->country = $request->country;
    $user->state = $request->state;
    $user->postal_code = $request->postal_code;
    $user->date_of_birth = $request->date_of_birth;

    // Update password only if provided
    if ($request->filled('password')) {
        $user->password = Hash::make($request->password);
        $user->save();
    }

    // Handle profile image upload
    if ($request->hasFile('profile_img')) {
        // Delete old profile image if it exists
        if ($user->profile_img) {
            // Define the path to the old image
            $oldImagePath = storage_path('app/public/' . $user->profile_img);
            // Check if the old image exists and delete it
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }
        }

        // Generate a unique name for the new image
        $extension = $request->file('profile_img')->getClientOriginalExtension();
        $uniqueName = 'profile_' . Str::random(40) . '.' . $extension;
        // Store new image in the public directory
        $request->file('profile_img')->storeAs('public/profile_images', $uniqueName);
        // Update user's profile_img attribute
        $user->profile_img = 'profile_images/' . $uniqueName; // Store relative path
    }

    // Save the updated user
    $user->save();

    return redirect()->route('landlord.profile')->with('success', 'Profile updated successfully!');
}
    public function profile()
    {   $user = auth()->user();
        return view('Dashboard.landlord.profile',compact('user'));
    }
}
