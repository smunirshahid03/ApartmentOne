<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    // Display a listing of the users
    public function index()
    {
        $users = User::all(); // Fetch all users from the database
        return view('Dashboard.admin.user.index', compact('users')); // Return the view with users data
    }

    // Show the form for creating a new user
    public function create()
    {
        return view('Dashboard.admin.user.create'); // Return the user creation form
    }

    // Store a newly created user in the database
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'required',
            'city' => 'nullable|string|max:100',
            'country' => 'nullable|string|max:100',
            'state' => 'nullable|string|max:100',
            'postal_code' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:255',
            'profile_img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'date_of_birth' => 'nullable|date',
            'password' => 'required|string|min:6', // Removed `confirmed` rule
            'role' => 'required|string',
        ]);

        $land_lord = Role::firstOrCreate(['name' => 'land_lord']);

        $tenant = Role::firstOrCreate(['name' => 'tenant']);
        // Create Admin User
        if($request->role == 'user'){
        $user = User::firstOrCreate([
            'email' => $request->email,
        ], [
            'name' => $request->name,
            'address' => $request->address ?? 'null',
            'phone' => $request->phone,
            'city' => $request->city,
            'country' => $request->country,
            'state' => $request->state,
            'postal_code' => $request->postal_code,
            'date_of_birth' => $request->date_of_birth,
            'password' => Hash::make($request->password),
        ]);
        $user->assignRole($tenant);

            // Handle profile image upload if it exists
            if ($request->hasFile('profile_img')) {
                $user['profile_img'] = $request->file('profile_img')->store('profiles', 'public');
            }

        }

        if($request->role == 'land_lord'){
            $user = User::firstOrCreate([
                'email' => $request->email,
            ], [
                'name' => $request->name,
                'address' => $request->address ?? 'null',
                'phone' => $request->phone,
                'city' => $request->city,
                'country' => $request->country,
                'state' => $request->state,
                'postal_code' => $request->postal_code,
                'date_of_birth' => $request->date_of_birth,
                'password' => Hash::make($request->password),
            ]);
            $user->assignRole($land_lord);

                // Handle profile image upload if it exists
                if ($request->hasFile('profile_img')) {
                    $user['profile_img'] = $request->file('profile_img')->store('profiles', 'public');
                }

            }

        return redirect()->route('admin.user.index')->with('success', 'User created successfully!');
    }


    // Show the form for editing the specified user
    public function edit($id)
    {
        $user = User::findOrFail($id); // Find the user by ID
        return view('Dashboard.admin.user.edit', compact('user')); // Return the edit form with user data
    }

    // Update the specified user in the database
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $id, // Unique email validation excluding current user
            'phone' => 'required',
            'city' => 'nullable|string|max:100',
            'country' => 'nullable|string|max:100',
            'state' => 'nullable|string|max:100',
            'postal_code' => 'nullable|string|max:1',
            'address' => 'nullable|string|max:255',
            'profile_img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'date_of_birth' => 'nullable|date',
            'password' => 'nullable|string|min:6', // Password is nullable for update
            'role' => 'required|string',
        ]);

        // Retrieve user by ID
        $user = User::findOrFail($id);

        // Update user data
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->city = $request->city;
        $user->country = $request->country;
        $user->state = $request->state;
        $user->postal_code = $request->postal_code;
        $user->address = $request->address ?? 'null';
        $user->date_of_birth = $request->date_of_birth;

        // Update password only if provided
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        // Handle profile image upload if it exists
        if ($request->hasFile('profile_img')) {
            // Delete the old profile image if it exists
            if ($user->profile_img) {
                Storage::disk('public')->delete($user->profile_img);
            }
            // Store the new profile image
            $user->profile_img = $request->file('profile_img')->store('profiles', 'public');
        }

        // Assign roles
        $land_lord = Role::firstOrCreate(['name' => 'land_lord']);
        $tenant = Role::firstOrCreate(['name' => 'tenant']);

        if ($request->role == 'user') {
            $user->syncRoles([$tenant]);
        } elseif ($request->role == 'land_lord') {
            $user->syncRoles([$land_lord]);
        }

        $user->save();

        return redirect()->route('admin.user.index')->with('success', 'User updated successfully!');
    }

    // Remove the specified user from the database
    public function destroy($id)
    {
        $user = User::findOrFail($id); // Find the user by ID
        $user->delete(); // Delete the user

        return redirect()->route('admin.users.index')->with('success', 'User deleted successfully!');
    }
}
