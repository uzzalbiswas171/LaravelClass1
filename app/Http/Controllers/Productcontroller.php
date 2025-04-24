<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Productcontroller extends Controller
{
    public function index()
    {
        return view('category'); // The form page
    }
    public function create()
    {
        return view('ProductFolderView.createproduct');
    }
    public function store(Request $request)
    {
        // Validate and store the product data
        // You can use Eloquent to save the product to the database
        // For example:
        // Product::create($request->all());
       //  print_r($request->all());
       return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }
}
