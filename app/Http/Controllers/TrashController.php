<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TrashController extends Controller
{
   public function index(){
    $users = User::onlyTrashed()->get();
    return view('Dashboard.admin.trash.index', compact('users'));
   }
   public function undo($id){
    $user = User::withTrashed()->find($id);
    if ($user) {
        $user->restore(); // Restore the user
    }
    return redirect()->route('admin.trash.index')->with('success', 'User Reverted successfully!');
    
}

}
