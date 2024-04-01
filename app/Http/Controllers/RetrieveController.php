<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Image;

class RetrieveController extends Controller
{
    public function dashboard()
    {
    // Retrieve the user's uploaded images using the relationship method
        $images = Image::inRandomOrder()->get();
    
        // Pass the $images variable to the 'dashboard' view
        return view('dashboard', ['images' => $images]);
    }
    
    public function index()
    {
        // Retrieve all images in random order
        $images = Image::inRandomOrder()->get();
        
        

        // dd($imageData); // Remove or comment out this line once you've confirmed $imageData is populated correctly

        return view('index', ['images' => $images]);
    }

    public function show($id)
    {
        // Retrieve the image details based on the provided ID
        $image = Image::findOrFail($id);
        
        // Pass the image details to the view
        return view('overlay', ['image' => $image]);
    }
}
