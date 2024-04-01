<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use App\Models\Image;
use Illuminate\Support\Facades\Auth;

class UploadController extends Controller
{
    public function create()
    {
        return view('upload');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:102400', // Adjust file validation rules as needed
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif|max:20000'
        ]);

        $user_id = Auth::id();
        $title = $request->title;
        $description = $request->description;

        
        $thumbnailName = time() . '_' . $request->thumbnail->getClientOriginalName();
        $request->thumbnail->storeAs('public/thumbnails', $thumbnailName);
        $thumbnailPath = 'storage/thumbnails/' . $thumbnailName;

        $imagePaths = [];

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imageName = time() . '_' . $image->getClientOriginalName();

                // Save the image
                $image->storeAs('public/images', $imageName);

                $imagePaths[] = 'storage/images/' . $imageName;
            }
        }

        Image::create([
            'user_id' => $user_id,
            'title' => $title,
            'description' => $description,
            'thumbnail' => $thumbnailPath,
            'path' => ($imagePaths) // Convert array to JSON string
        ]);

        return redirect()->back()->with('success', 'Images uploaded successfully.');
    }

    public function send()
    {
        return view('contact');
    }

    public function message(Request $request)
    {
            $formFields=$request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255',
                'subject' => 'string|max:255',
                'message' => 'required|string',
            ]); 
            
            Message::create($formFields);

            return redirect()->back()->with('success','your response has been recorded successfully');
    }
}
