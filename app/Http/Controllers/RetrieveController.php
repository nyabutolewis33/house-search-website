<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class RetrieveController extends Controller
{
    public function dashboardretrieve()
    {
        // Retrieve images uploaded by the authenticated user
        
        $images = Image::all(['title', 'description', 'path', 'created_at']);

        Log::info($images);
        return view('dashboard', compact('images'));
    }

    public function index()
    {
        // Retrieve all images in random order
        $images = Image::inRandomOrder()->get();
        
        $imageData = [];

        foreach ($images as $image) {
            $imageData[] = [
                'path' => json_decode($image->path, true),
                'title' => $image->title,
                'description' => $image->description,
                'posted_at' => $image->created_at->format('Y-m-d H:i:s'),
            ];
        }

        dd($imageData);
        return view('index', ['imageData' => $imageData]);
    }
}
