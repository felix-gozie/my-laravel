<?php
// This code was imported to avoid naming conflict
namespace App\Http\Controllers;
//this code is imported for a user to be able to perform actions on the users table like adding new users to the users table and retrieving data
use App\Models\Product;

//what this code does is that it inherit laravel funtionalities from the base controller which handles HTTP request
class productController extends Controller
{
    public function show($id)
{
    //retrieves the product record by id, throws 404 not found error if product is not found
    $product = Product::findOrFail($id);
    
    //it returns to product page if the product exist 
    return view('product', compact('product'));
}

}
