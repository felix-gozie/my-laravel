<?php

namespace App\Http\Controllers;
use App\Models\Product;


use Illuminate\Http\Request;

class productController extends Controller
{
    public function show($id)
{
    // Find the product by ID or return a 404 error if not found
    $product = Product::findOrFail($id);
    
    // Pass the product data to the 'nav_describe' view
    return view('product', compact('product'));
}

}
