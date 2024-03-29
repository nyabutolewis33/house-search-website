<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class RetrieveController extends Controller
{
    public function dashboardretrieve()
    {
        // Retrieve images uploaded by the authenticated user
        $images = Image::all(['title', 'description', 'path', 'created_at']);
    
        // Pass the $images variable to the 'dashboard' view
        return view('dashboard', compact('images'));
    }
    
    public function index()
    {
        // Retrieve all images in random order
        $images = Image::inRandomOrder()->get();
        
        $imageData = [];

        foreach ($images as $image) {
            $imageData[] = [
                'path' => $image->path,
                'title' => $image->title,
                'description' => $image->description,
                'posted_at' => $image->created_at->format('Y-m-d H:i:s'),
            ];
        }

        // dd($imageData); // Remove or comment out this line once you've confirmed $imageData is populated correctly

        return view('index', ['imageData' => $imageData]);
    }
}
