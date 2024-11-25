@extends('layout', ['page_title' => 'delete page'])
@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-3xl font-bold mb-6">Products</h1>

    <!-- Add New Product Button -->
    <a href="#" class="bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-4 rounded mb-6 inline-block">Add New Product</a>

    <!-- Products Table -->
    <div class="overflow-x-auto">
        <table class="w-full table-auto border-collapse border border-gray-200">
            <thead>
                <tr class="bg-gray-100">
                    <th class="border border-gray-300 px-4 py-2 text-left">ID</th>
                    <th class="border border-gray-300 px-4 py-2 text-left">Name</th>
                    <th class="border border-gray-300 px-4 py-2 text-left">Price</th>
                    <th class="border border-gray-300 px-4 py-2 text-left">Description</th>
                    <th class="border border-gray-300 px-4 py-2 text-left">Image</th>
                    <th class="border border-gray-300 px-4 py-2 text-left">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr class="hover:bg-gray-50">
                    <td class="border border-gray-300 px-4 py-2">{{ $product->id }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $product->name }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $product->price }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $product->description }}</td>
                    <td class="border border-gray-300 px-4 py-2">
                        <img src="{{ asset('storage/' . $product->image_path) }}" alt="Image" class="h-12 w-12 object-cover rounded">
                    </td>
                    <td class="border border-gray-300 px-4 py-2">
                        <a href="{{ route('admin.products.edit', $product->id) }}" class="bg-yellow-500 hover:bg-yellow-600 text-white py-1 px-3 rounded text-sm inline-block">Edit</a>
                        <form action="{{ route('admin.products.delete', $product->id) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 hover:bg-red-600 text-white py-1 px-3 rounded text-sm" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
