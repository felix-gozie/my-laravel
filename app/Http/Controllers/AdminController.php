<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; // Use your Product model

class AdminController extends Controller
{
    // Display all products
    public function index()
    {
        $products = Product::all();
        return view('display')->with([
            'products' => $products
        ]);
    }

    // Show the edit form
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('edit')->with([
            'product' => $product
        ]);
    }

    // Update a product
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('uploads', 'public');
            $product->image_path = $imagePath;
        }

        $product->save();

        return redirect()->route('admin.products')->with('success', 'Product updated successfully.');
    }

    // Delete a product
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('admin.products')->with('success', 'Product deleted successfully.');
    }
}
