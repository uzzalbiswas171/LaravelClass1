<?php
namespace App\Http\Controllers;

use App\Models\category; 
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('category'); // The form page
    }

    public function store(Request $request)
    {
        // Validate incoming data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email,email', // Ensure the email is unique
        ]);
 

        // Store the data in the database
        category::create([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        // Redirect back with a success message
        return back()->with('success', 'Data saved successfully!');
    }
}
