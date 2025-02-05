<?php

namespace App\Http\Controllers\FrontEnd;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\UserReview;

class FrontendReviewController extends Controller
{
    public function store(Request $request)
    {

        // dd($request->all());
        $request->validate([
            'name' => 'required|string|max:255',
            'message' => 'required|string|max:255',
            'rating' => 'required|integer|min:1|max:5',
            'image' => 'nullable|image|max:2048',  // Optional image upload validation
        ]);

        // Handle image upload if exists
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('reviews', 'public');
        } else {
            $path = null;
        }

        // Create the review
        UserReview::create([
            'name' => $request->name,
            'message' => $request->message,
            'rating' => $request->rating,
            'image' => $path,
        ]);

        session()->flash('success', 'Your review has been submitted successfully!');

        return response()->json(['message' => 'Your review has been submitted successfully!'], 200);
    }
}
