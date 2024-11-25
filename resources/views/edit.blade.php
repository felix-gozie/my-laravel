@extends('layout', ['page_title' => 'edit page'])
@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-3xl font-bold mb-6">Edit Product</h1>

    <!-- Edit Product Form -->
    <form action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf
        @method('PUT')

        <!-- Name Input -->
        <div>
            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
            <input 
                type="text" 
                name="name" 
                id="name" 
                value="{{ $product->name }}" 
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                required>
        </div>

        <!-- Price Input -->
        <div>
            <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
            <input 
                type="number" 
                name="price" 
                id="price" 
                value="{{ $product->price }}" 
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                required>
        </div>

        <!-- Description Input -->
        <div>
            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
            <textarea 
                name="description" 
                id="description" 
                rows="3" 
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                required>{{ $product->description }}</textarea>
        </div>

        <!-- Image Upload -->
        <div>
            <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
            <input 
                type="file" 
                name="image" 
                id="image" 
                class="mt-1 block w-full text-sm text-gray-500 rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
            
            @if($product->image_path)
                <div class="mt-4">
                    <img src="{{ asset('storage/' . $product->image_path) }}" alt="Image" class="h-20 w-20 object-cover rounded">
                </div>
            @endif
        </div>

        <!-- Submit Button -->
        <div>
            <button 
                type="submit" 
                class="bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-4 rounded shadow">
                Update
            </button>
        </div>
    </form>
</div>
@endsection
