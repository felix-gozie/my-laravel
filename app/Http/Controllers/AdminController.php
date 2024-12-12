<?php
// this code was imported to avoid naming conflict
namespace App\Http\Controllers;
//this code was imported for request handling i.e retrieving and submitting data into the database
use Illuminate\Http\Request;
//this code is imported for a user to be able to perform actions on the users table like adding new users to the users table and retrieving data
use App\Models\Product;
//what this code does is that it inherit laravel funtionalities from the base controller which handles HTTP request
class AdminController extends Controller
{
    //what this method does is that it is use to display list of items like fetching and showing all records of a resourse 
    public function index()
    {
        //what this code does is that it fetch all rows from the product table in the database and display them in display page
        $products = Product::all();
        return view('display')->with([
            'products' => $products
        ]);
    }

    //This code retrieves a product by it's id for editing
    public function edit($id)
    {
        // what this code does is that it retrives product by id and then returns to edit page if the product exist but throw 404 not found error if the product does not exist
        $product = Product::findOrFail($id);
        return view('edit')->with([
            'product' => $product
        ]);
    }

    // what this code does is that it update the existing record in the database
    public function update(Request $request, $id)
    {
        //retrieves product by id, throws error if not found
        $product = Product::findOrFail($id);

        //what this code does is that it is use to validate incoming request data
        $request->validate([
            //what this code does is that name input field should not be empty , it must be a string and should not exceed 255 characters
            'name' => 'required|string|max:255',
            //what this code does is that price input field should not be empty and it must be a number
            'price' => 'required|numeric',
            //what this code does is that description input field should not be empty and it must be a string
            'description' => 'required|string',
            //must be an image, jpg,png,jpeg and gif mimes type with file size of 2mb
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        //what this code does is that it update the product name, price and description in the database
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        //what this code does is that it checks if an image is uploaded, store it in the upload directory and then update the file-path
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('uploads', 'public');
            $product->image_path = $imagePath;
        }
        //saves the updated product to the database
        $product->save();
        //redirect the user to admin.products page with a success message "Product updated successfully"
        return redirect()->route('admin.products')->with('success', 'Product updated successfully.');
    }

    // what this code does is that it deletes products based on it's id
    public function destroy($id)
    {
        //Retrieves the product by id, also throws and error if it does not exist
        $product = Product::findOrFail($id);
        //delete the product from the database
        $product->delete();
        //and redirect the user to admin.products page with a success message "Product deleted successfully"
        return redirect()->route('admin.products')->with('success', 'Product deleted successfully.');
    }
}
