<?php
//what this code does is to avoid class conflict
namespace App\Http\Controllers;
//what this code does is that it is where the uploaded images/files are stored
use Illuminate\Support\Facades\Storage;
//this code is imported for submitting and retrieving data from the database
use Illuminate\Http\Request;
//this code is imported for a user to be able to perform actions on the users table like adding new users to the users table and retrieving data
use App\Models\Product;

//what this code does is that fileUploadController inherit laravel functionalities like request handling when it extends the base controller
class FileUploadController extends Controller
{
    //what this code does is that it shows the registration form when a user visit /upload on the browser
    public function create()
    {
        return view('formupload'); 
    }

    // what this code does is that it stores product details and images, the request $request captures form data and uploaded files
    public function store(Request $request)
    {
        //what this code does is that it validate the incoming form data
        $request->validate([
            // Name must be a string and should not pass 255 characters
            'name' => 'required|string|max:255',
            // it accept only numbers
            'price' => 'required|numeric',
            // only string are required
            'description' => 'required|string',
            //must be an image, jpg,png,jpeg and gif mimes type with file size of 2mb
            'image' => 'required|image|mimes:jpg,png,jpeg,gif|max:2048',
        ]);

        // what this code does is that it checks if the uploaded image/file is valid and then store it the upload directory
        if ($request->file('image')->isValid()) {
            $imagePath = $request->file('image')->store('uploads', 'public');

            //what this code does is that it inerted a new product into the database
            Product::create([
                'name' => $request->input('name'),
                'price' => $request->input('price'),
                'description' => $request->input('description'),
                'image_path' => $imagePath,
            ]);

            //what this code does is that it return a success message if the image is successfully uploaded
            return back()->with('success', 'Product uploaded successfully!');
        }
        //and returns and error message when the uplaod fail
        return back()->with('error', 'File upload failed');
    }

    //what this code does is that it retrieve all records from the product table in the database, return to the index view and display the images
    public function showDisplayImage()
    {
        $products = Product::all(); 
        return view('index')->with('products', $products); 
    }
}
