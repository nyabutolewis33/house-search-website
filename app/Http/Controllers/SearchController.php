<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $location = $request->input('location');
        $category = $request->input('category');
        $price = $request->input('price');

        // Query the database based on search parameters
        $results = Image::query()
            ->when($location, function ($query) use ($location) {
                return $query->where('title', 'like', "%$location%");
            })
            ->when($category != 0, function ($query) use ($category) {
                return $query->where('category_id', $category);
            })
            ->when($price != 0, function ($query) use ($price) {
               
                $priceRange = [2000, 3000]; // Dummy values, replace with your logic
                return $query->whereBetween('cost', $priceRange);
            })
            ->get();

        // Pass $results to the view
        return view('index', compact('results'));
    }
}
