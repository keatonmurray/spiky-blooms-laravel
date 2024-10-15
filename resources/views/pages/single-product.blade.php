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
                <div class="stock mb-2">3 items left</div>
                <div class="product-details">
                    <h4 class="product-title mb-3">Corsage Cactus</h4>
                    <h3 class="product-price">$12.50</h3>
                    <h5 class="product-description">Bring a touch of the desert into your home with our Desert Bloom Cactus, the perfect low-maintenance plant that thrives on neglect! Known for its striking appearance and resilience, this cactus features plump, spiny stems that store water, making it ideal for busy plant lovers or those with a less-than-green thumb.</h5>
                    <div class="add-to-cart mt-auto">
                        <div class="px-4 d-flex justify-content-center align-items-center">
                            <div class="plus mx-2">+</div> 
                            <div class="quantity">1</div>
                            <div class="minus mx-2">-</div> 
                        </div>
                    </div>
                    <button class="btn btn-dark add-to-cart-button">
                        <i class="fas fa-cart-plus me-2"></i>
                        Add to cart
                    </button>
                </div>
            </div>
        </div>
    </section>
@endsection