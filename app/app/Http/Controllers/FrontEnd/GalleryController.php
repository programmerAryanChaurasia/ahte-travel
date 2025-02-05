<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Gallery;

class GalleryController extends Controller
{

    public function index()
    {
        // Retrieve all records with pagination (3 items per page), ordered by 'id' descending
        $galleries = Gallery::orderBy('id', 'desc')->paginate(3);

        // Return the view with the paginated records
        return view('frontend.gallery', compact('galleries'));
    }




    // public function store(Request $request)
    // {

    //     // dd($request->all());
    //     // Validate the request
    //     $request->validate([
    //         'your_name' => 'required|string|max:255',
    //         'place_name' => 'required|string|max:255',
    //         'text' => 'required|string|max:255',
    //         // 'image' => 'nullable|image|max:2048', // Image upload validation
    //         'phone' => 'required|string|max:15', // Fixed phone validation
    //     ]);



    //     // Handle image upload if exists
    //     if ($request->hasFile('image')) {
    //         $path = $request->file('image')->store('reviews', 'public');
    //     } else {
    //         $path = null;
    //     }

    //     // Create the review entry
    //     Gallery::create([
    //         'your_name' => $request->your_name,
    //         'place_name' => $request->place_name,
    //         'text' => $request->text,
    //         'image' => $path,
    //         'phone' => $request->phone,
    //         'status' => 0,
    //     ]);

    //     // Flash success message
    //     session()->flash('success', 'Your review has been submitted successfully!');

    //     // Return JSON response for AJAX request

    //     return response()->json(['message' => 'Your review has been submitted successfully!'], 200);
    // }

    public function store(Request $request)
    {
        // Validate the request
        $validatedData = $request->validate([
            'your_name' => 'required|string|max:255',
            'place_name' => 'required|string|max:255',
            'text' => 'required|string|max:255',
            'image' => 'nullable|image|max:2048', // Image upload validation
            'phone' => 'required|string|max:15', // Fixed phone validation
        ]);

        // Handle image upload if exists
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('reviews', 'public');
        } else {
            $path = null;
        }

        // Create the review entry
        Gallery::create([
            'your_name' => $request->your_name,
            'place_name' => $request->place_name,
            'text' => $request->text,
            'image' => $path,
            'phone' => $request->phone,
            'status' => 1,
        ]);

        // Return JSON response for AJAX request
        session()->flash('success', 'Your review has been submitted successfully!');

        return redirect()->back();
    }
}
