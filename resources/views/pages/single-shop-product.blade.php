@extends('layout.layout')
@section('content')
    <section id="single" class="w-100 d-flex justify-content-center align-items-center mt-4">
        <div class="row justify-content-center">
            <div class="col-12 col-md-5 d-flex flex-column align-items-center">
                <figure>
                    <img src="{{asset('images/plant1.jpg')}}" class="product-image img-fluid" alt="Product Image">
                </figure>
                <div class="d-flex justify-content-center mt-3">
                    <figure class="mx-2">
                        <img src="{{asset('images/plant1.jpg')}}" class="product-preview-image img-fluid" alt="Product Image">
                    </figure>
                    <figure class="mx-2">
                        <img src="{{asset('images/plant1.jpg')}}" class="product-preview-image img-fluid" alt="Product Image">
                    </figure>
                    <figure class="mx-2">
                        <img src="{{asset('images/plant1.jpg')}}" class="product-preview-image img-fluid" alt="Product Image">
                    </figure>
                </div>
            </div>
            <div class="col-12 col-md-7 d-flex flex-column justify-content-start align-items-start">
                <div class="product-details">
                    <h4 class="product-title mb-3">{{ $product->name }}</h4>
                    <h3 class="product-price">${{ $product->price }}</h3>
                    <h6>Select Quantity</h6>
                    <div class="d-flex my-3">
                        <button class="btn btn-dark">+</button>
                        <span class="quantity-display">1</span>
                        <button class="btn btn-dark">-</button>
                    </div>
                    <h6>Variation</h6>
                    <select name="vartation" id="quantity" class="form-select">
                        <option value="" disabled selected>Select variation</option>
                        {{-- @foreach($product->variations as $variation)
                            <option value="{{ $variation['value'] }}">{{ $variation['value'] }}</option>
                        @endforeach --}}
                    </select>
                    <p class="my-1">Items in stock: {{ $product->quantity }}</p>
                    <button class="btn btn-dark add-to-cart-button mt-4">
                        <i class="fas fa-cart-plus me-2"></i>
                        Add to cart
                    </button>
                    <p class="my-1">SKU: {{ $product->sku }}</p>
                    <h5 class="product-description">{{ $product->description }}</h5>
                </div>
            </div>
        </div>
    </section>
@endsection