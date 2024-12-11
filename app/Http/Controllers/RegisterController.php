<?php
//what this code does is to avoid class conflict
namespace App\Http\Controllers;
//this code is imported for a user to be able to perform actions on the users table like adding new users to the users table and retrieving data
use App\Models\User;
// this code is imported to hash or encrypt password rather than a plain text
use Illuminate\Support\Facades\Hash;
//this code is imported for submitting and retrieving data from the database
use Illuminate\Http\Request;
//what this code does is that it manage the logic for registering a new user, validate and create a new record in the database
class RegisterController extends Controller
{
  //what this code does is that it shows the registration form when a user visit /register on the browser
    public function showRegistrationForm()
    {
        return view('register'); 
    }

    //what this code does is that it stores a user data into the database(handles registration form)
    public function register(Request $request)
    {
        //what this code does is that it is use to validate incoming request data
        $request->validate([
            //what this code does is that user must put his/her firstname in the form field, it must be a string and should not exceed 255 characters
            'firstname' => 'required|string|max:255',
            //same happened here
            'lastname' => 'required|string|max:255',
            // same here but the word "unique" there is to avoid duplicate entries into the database 
            'email' => 'required|string|email|max:255|unique:users',
        ]);

        //what this code does is that it create a new record into the database by using the user model
        User::create([
            'fname' => $request->input('firstname'),
            'lname' => $request->input('lastname'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);

      //what this code does is that it redirect the user to the login page after a successful registration
        return redirect()->route('login')->with('success', 'Registration successful! Please log in.');
    }
}