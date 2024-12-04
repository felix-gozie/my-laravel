<?php
//what this code does is to avoid class conflict
namespace App\Http\Controllers;
//this is authentication (checking wether the user is who they claim to be)
use Illuminate\Support\Facades\Auth;
//this code is imported for submitting and retrieving data from the database
use Illuminate\Http\Request;

//what this code does is that it manage the logic for registering a new user, validate and create a new record in the database
class LoginController extends Controller
{
    //what this code does is that it shows the login form when a user visit /loginform on the browser
    public function showLoginForm()
    {
        return view('loginform');
    }
    //  what this code does is that it is used to submit user credentials for a proper login
    public function login(Request $request)
    {
        // this code is to validate incoming request data
        $request->validate([
            // what this code does is that the email field must be filled
            'email' => 'required|email',
            // what this code does is that the password field must be filled
            'password' => 'required',
        ]);

        // checking if the user is who they claim to be through email and password and return to index page if the record match in the database
        if (Auth::attempt($request->only('email', 'password'))) {
           return redirect()->intended('index'); 
        }
        //if it doens't match, it returns with an error message "Invalid credentials" back to the login form
        return back()->withErrors([
            'email' => 'Invalid credentials',
        ]);
    }

    //what this code does is that it is use to log a user out 
    public function logout()
    {
    // what this code does is that it remove users authentication
        Auth::logout();
    //it returns back to login form or page after log out
        return redirect('/login');
    }
}