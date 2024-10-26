@extends('layouts.head')
@section('content')
    <section id="shop">
        <h1 class="text-center mb-4">{{ $heading }}</h1>
        
        <div class="row my-4">
            <x-quarter-column-component>
                <x-product-card-component>
                    <hr>
                    <form>
                        <x-product-filter-component 
                            heading="Availability" 
                            id="availability-checkbox" 
                            :checkboxValues="[
                                ['id' => 'in_stock', 'label' => 'In Stock', 'value' => '1'],
                                ['id' => 'out_of_stock', 'label' => 'Out of Stock', 'value' => '0']
                            ]"
                        />

                        <x-product-filter-component 
                            heading="Categories" 
                            id="categories-checkbox" 
                            :checkboxValues="[
                                ['id' => 'indoor_plants', 'label' => 'Indoor Plants', 'value' => 'Indoor Plants'],
                                ['id' => 'succulents', 'label' => 'Succulents & Cacti', 'value' => 'Succulents & Cacti'],
                                ['id' => 'flowering', 'label' => 'Flowering Plants', 'value' => 'Flowering Plants'],
                                ['id' => 'herbs', 'label' => 'Herbs', 'value' => 'Herbs'],
                            ]"
                        />

                        <x-product-filter-component 
                            heading="Type" 
                            id="categories-checkbox" 
                            :checkboxValues="[
                                ['id' => 'perennial', 'label' => 'Perennial Plants', 'value' => 'Perennial Plants'],
                                ['id' => 'annual', 'label' => 'Annual Plants', 'value' => 'Annual Plants'],
                            ]"
                        />

                        <x-product-filter-component 
                            heading="Style" 
                            id="categories-checkbox" 
                            :checkboxValues="[
                                ['id' => 'tropical', 'label' => 'Tropical Plants', 'value' => 'Tropical Plants'],
                                ['id' => 'desert', 'label' => 'Desert Plants', 'value' => 'Desert Plants']
                            ]"
                        />

                        <button type="submit" class="btn btn-dark mt-3 w-100 apply-filter-button">
                            <i class="fas fa-sliders-h me-2"></i>
                            Apply Filter
                        </button>
                    </form>
                </x-product-card>
            </x-quarter-column>
            <div class="col-12 col-md-9 d-flex justify-content-start align-items-start all-products">
                <div class="row">
                    @if(count($products) > 0)
                        @foreach ($products as $product)
                            <div class="col-12 col-md-3">
                                <figure class="product-img-container">
                                    <a href="{{ route('collection', ['id' => $product->id] ) }}">
                                        @if(is_array($product->image) && count($product->image) > 0)
                                            <img src="{{ asset('storage/' . $product->image[0]) }}" alt="Product Image" class="img-fluid shop-page-image">
                                        @endif
                                    </a>
                                </figure>
                                <div class="product-details text-center">
                                    <p class="product-name">{{$product->name}}</p>
                                    <p class="product-price">${{$product->price}}</p>
                                    <div class="product-rating mb-4">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        @else
                        <p class="text-center">Looks like there are no products to show here yet. Please check back in a while!</p>
                    @endif
                </div>
            </div>

            <div class="col-12 d-flex justify-content-end pagination-container">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item disabled">
                            <a class="page-link pagination-prev-button" href="#" tabindex="-1" aria-disabled="true">
                                <i class="fas fa-angle-left"></i>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link text-dark" href="#">1</a></li>
                        <li class="page-item"><a class="page-link text-dark" href="#">2</a></li>
                        <li class="page-item"><a class="page-link text-dark" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link pagination-next-button" href="#">
                                <i class="fas fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>
@endsection