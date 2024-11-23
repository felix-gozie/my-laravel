@extends('layout', ['page_title' => 'Display'])

@section('content')
<div class="bg-gray-100">
    <div class="py-4 bg-gray-100 grid grid-cols-2 hidden md:grid">
        <div class="flex items-center justify-center mr-[49%] space-x-2">
            <div class="h-6 w-6 bg-orange-400 text-white rounded-full flex items-center justify-center">
                <i class="fa fa-star text-xs"></i>
                </div>
            <a href="#" class="text-xl text-orange-500">Sell on Jumia</a>
            </div>
            <div class="flex items-center justify-center space-x-2 pr-[80%]">
                <a href="#" class="text-lg font-bold text-black">Jumia</a>
                <div class="h-6 w-6 bg-orange-400 text-white rounded-full flex items-center justify-center">
                <i class="fa fa-star text-xs"></i>
            </div>
        </div>
    </div>
    @include('nav.nav_main')
    <div class="flex flex-wrap gap-2 mt-4">
        <div class="hidden md:block ml-[7%]">
            @include('nav.nav_product')
        </div>
        @foreach($products as $product)
            <div class="w-60 h-80 bg-white p-4 shadow-lg rounded-lg text-center">
                <!-- Link to the product details page when clicking the image -->
                <a href="{{ route('product.show', $product->id) }}">
                    @if($product->image_path)
                        <img src="{{ asset('storage/' . $product->image_path) }}" alt="{{ $product->name }}" class="w-full h-auto rounded-md">
                    @endif
                    <h5 class="text-xl font-semibold mb-2">{{ $product->name }}</h5>
                    <p class="text-lg text-gray-700">Price: ${{ $product->price }}</p>
                </a>   
            </div>
        @endforeach
    </div>    
</div>    
@endsection
