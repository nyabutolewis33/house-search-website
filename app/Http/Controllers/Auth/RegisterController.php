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
            'password' => 'required|string|min:8|confirmed',
        ]);  
        
        // Hash password
        $formFields['password'] = bcrypt($formFields['password']);

        // Create user
        $user = UserDetail::create($formFields);
        
        // You can perform additional actions after user registration if needed

        return redirect()->route('signin')->with('status', 'Registration successful. You can now login.');
    
    }

    public function loginuser(Request $request)
{
    $request->only(['email', 'password']);

    $request->validate([
        'email' => 'required|email',
        'password' => 'required|min:8',
    ]);   
    
    
    // Attempt to authenticate the user
     // Retrieve user by email
     $user = UserDetail::where('email', $request->email)->first();

     if ($user) {
         // Verify password
         if (Hash::check($request->password, $user->password)) {
             // Authentication successful
             $userName = $user->name;
             $userEmail = $user->email;
 
             // Pass user data to the view
             return view('dashboard', [
                 'userName' => $userName,
                 'userEmail' => $userEmail
             ]);}
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

    public function showProperties()
    {
        return view('properties');
    }

    public function showGallery()
    {
        return view('gallery');
    }

    public function showProperties_detail()
    {
        return view('properties-detail');
    }

    public function showContact()
    {
        return view('contact');
    }

    public function showBlog_single()
    {
        return view('blog-single');
    }

    public function showBlog_archive()
    {
        return view('blog-archive');
    }

    public function show404()
    {
        return view('404');
    }

    public function showDashboard()
    {
        return view('dashboard');
    }

    public function showuploadForm()
    {
        return view('upload');
    }

}

