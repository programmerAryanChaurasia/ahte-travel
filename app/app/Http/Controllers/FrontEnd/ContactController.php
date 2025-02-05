<?php

namespace App\Http\Controllers\FrontEnd;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Contact;

class ContactController extends Controller
{
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'message' => 'required|string|max:255',
            'phone' => 'required|string|max:15', // Changed to string for better handling
        ]);

        // Debugging Line (Remove in Production)
        // dd("AAA");

        // Create the contact entry
        Contact::create([
            'name' => $request->name,
            'message' => $request->message,
            'phone' => $request->phone, // Fixed field name
            'status' => 0,
        ]);

        // Flash success message
        session()->flash('success', 'Your review has been submitted successfully!');

        // Redirect back
        return redirect()->back();
    }
}
