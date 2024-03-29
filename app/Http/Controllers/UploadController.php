<?php

namespace App\Http\Controllers;

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
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:102400' // Adjust file validation rules as needed
        ]);

        $user_id = Auth::id();
        $title = $request->title;
        $description = $request->description;

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
            'path' => json_encode($imagePaths) // Convert array to JSON string
        ]);

        return redirect()->back()->with('success', 'Images uploaded successfully.');
    }
}
