<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Product; // Add your Product model here

class FileUploadController extends Controller
{
    // Show the file upload form
    public function create()
    {
        return view('formupload'); // Your form's view file
    }

    // Handle file upload
    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif|max:2048', // Adjust as needed
        ]);

        // Store the image file
        if ($request->file('image')->isValid()) {
            $imagePath = $request->file('image')->store('uploads', 'public');

            // Save product details to the database
            Product::create([
                'name' => $request->input('name'),
                'price' => $request->input('price'),
                'description' => $request->input('description'),
                'image_path' => $imagePath, // Store the image path
            ]);

            // Return success message
            return back()->with('success', 'Product uploaded successfully!');
        }

        return back()->with('error', 'File upload failed');
    }

    // Display the image gallery page
    public function showDisplayImage()
    {
        $products = Product::all(); // Fetch all products with their images
        return view('index')->with('products', $products); // Return the view with product data
    }
}
