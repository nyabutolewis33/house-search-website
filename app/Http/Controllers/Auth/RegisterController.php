<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;
use App\Models\UserDetail;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Auth\SessionGuard;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('register');
    }

    public function registeruser(Request $request)
    {
        $formFields=$request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:user_details',
            'national_id_number' => 'required|string|max:255|unique:user_details',
            'password' => 'required|string|min:8|confirmed:password_confirmation',
        ]);  
        
        // Hash password
        $formFields['password'] = bcrypt($formFields['password']);

        // Create user
        $user = UserDetail::create($formFields);
        
        // You can perform additional actions after user registration if needed

        return redirect()->route('signin')->with('success', 'Registration successful. You can now login.');
    
    }


    public function loginuser(Request $request)
{
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        // Authentication successful
        // Retrieve the authenticated user
        $user = Auth::user();
        
        // Extract user information
        $userName = $user->name; // Assuming your user model has a 'name' attribute
        $userEmail = $user->email;
    
        // Pass the user information to the dashboard view
        return view('dashboard', [
            'userName' => $userName,
            'userEmail' => $userEmail
        ]);
    } else {
        // Authentication failed
        return back()->withErrors(['email' => 'Invalid email or password.']);
    }
}



    public function showSigninForm()
    {
        return view('signin');
    }

    public function showIndex()
    {
        return view('index');
    }


    public function showContact()
    {
        return view('contact');
    }

    public function showDashboard()
    {
        return view('dashboard');
    }

    public function showuploadForm()
    {
        return view('upload');
    }

    public function showAbout()
    {
        return view('about');
    }

}

