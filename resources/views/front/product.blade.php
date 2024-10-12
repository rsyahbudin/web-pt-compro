@extends('front.layouts.app')
@section('content')

<div id="header" class="bg-[#F6F7FA] relative">
    <div class="container max-w-[1130px] mx-auto relative pt-10 z-10">
        <x-navbar />
        <div class="flex flex-col gap-[50px] items-center py-20">
            <div class="breadcrumb flex items-center justify-center gap-[30px]">
                <p class="text-cp-light-grey last-of-type:text-cp-black last-of-type:font-semibold">Home</p>
                <span class="text-cp-light-grey">/</span>
                <p class="text-cp-light-grey last-of-type:text-cp-black last-of-type:font-semibold">Our Product</p>
            </div>
            <h2 class="font-bold text-4xl leading-[45px] text-center">Since Beginning We Only <br> Want to Make World Better</h2>
        </div>
    </div>
</div>

<div class="container max-w-[1130px] mx-auto py-10">
    <div class="row mb-5">
        <div class="col-12">
            <h3 class="text-2xl font-bold mb-4">Our Products</h3>
            <p class="text-gray-600">Discover a wide range of products crafted to make your life better.</p>
        </div>
    </div>

    <div class="row">
        @foreach($products as $product)
        <div class="col-md-4 mb-4">
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="{{ $product->image_url }}" alt="{{ $product->name }}" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h4 class="text-lg font-semibold mb-2">{{ $product->name }}</h4>
                    <p class="text-gray-500 mb-3">{{ $product->description }}</p>
                    <p class="text-blue-600 font-bold mb-3">${{ number_format($product->price, 2) }}</p>
                    <a href="{{ route('product.show', $product->id) }}" class="btn btn-primary">View Details</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection
