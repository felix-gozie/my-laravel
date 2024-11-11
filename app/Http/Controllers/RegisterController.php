<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
class RegisterController extends Controller
{
    // Show the registration form
    public function showRegistrationForm()
    {
        return view('register'); // Ensure your form is in `resources/views/auth/register.blade.php`
    }

    // Handle the registration
    public function register(Request $request)
    {
        // Validate the form input
        $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
        ]);

        // Create the user
        User::create([
            'fname' => $request->input('firstname'),
            'lname' => $request->input('lastname'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);

        // Redirect with success message
        return redirect()->route('login')->with('success', 'Registration successful! Please log in.');
    }
}