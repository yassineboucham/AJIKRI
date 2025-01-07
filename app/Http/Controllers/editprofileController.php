<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class EditProfileController extends Controller
{
    public function editprofile()
    {
        // Get the currently authenticated user
        $user = auth()->user();

        // Return the edit profile view with the user data
        return view('editprofile', compact('user'));
    }

    public function update(Request $request, $id)
    {
        // Validate the incoming request data
        $request->validate([
            'agency_name' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:15',
            'address' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'password' => 'nullable|string|min:8|confirmed',
            'bio' => 'nullable|string|max:500',
        ]);

        // Find the user by ID
        $user = User::findOrFail($id);

        // Update user data
        $user->agency_name = $request->agency_name;
        $user->name = $request->name;
        $user->phone_number = $request->phone_number;
        $user->address = $request->address;
        $user->email = $request->email;

        // Update password if provided
        if ($request->filled('password')) {
            $user->password = bcrypt($request->password);
        }

        $user->bio = $request->bio;
        $user->save(); // Save the changes

        return redirect()->route('editprofile')->with('success', 'Profile updated successfully.');
    }

    public function destroy($id)
    {
        // Delete the user account
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('account')->with('success', 'Account deleted successfully.');
    }
}
