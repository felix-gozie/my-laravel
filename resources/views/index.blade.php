<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="bg-gray-100">
    @include('nav.nav_main')
    <div class="flex flex-wrap gap-4 justify-center mt-4">
        <div class="hidden md:block ml-[4%]">
            @include('nav.nav_product')
        </div>
        @foreach($products as $product)
            <div class="w-64 bg-white p-4 shadow-lg rounded-lg text-center">
                <h2 class="text-xl font-semibold mb-2">{{ $product->name }}</h2>
                @if($product->image_path)
                    <img src="{{ asset('storage/' . $product->image_path) }}" alt="{{ $product->name }}" class="w-full h-auto mb-4 rounded-md">
                @endif
                <p class="text-lg text-gray-700">Price: ${{ $product->price }}</p>
                <p class="text-sm text-gray-500">{{ $product->description }}</p>
            </div>
        @endforeach
    </div>    
</body>
</html>