@extends('layout.layout')
@section('content')
    <section id="shop">
        <h1 class="text-center mb-4">Hello, plant lovers.</h1>
        
        <br><br>
        
        <div class="row">
            <div class="col-12 col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="text-center fw-500">Filter</h5>
                        <hr>
                        <form>
                            <h5 class="card-title my-4 fw-500">Availability</h5>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="inStock" value="in_stock">
                                <label class="form-check-label" for="inStock">
                                    In Stock
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="soldOut" value="sold_out">
                                <label class="form-check-label" for="soldOut">
                                    Sold Out
                                </label>
                            </div>
                            <h5 class="card-title my-4 fw-500">Categories</h5>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="inStock" value="in_stock">
                                <label class="form-check-label" for="inStock">
                                    Indoor Plants 
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="soldOut" value="sold_out">
                                <label class="form-check-label" for="soldOut">
                                    Succulents & Cacti 
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="soldOut" value="sold_out">
                                <label class="form-check-label" for="soldOut">
                                    Flowering Plants
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="soldOut" value="sold_out">
                                <label class="form-check-label" for="soldOut">
                                    Herbs
                                </label>
                            </div>
                            <h5 class="card-title my-4 fw-500">Type</h5>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="inStock" value="in_stock">
                                <label class="form-check-label" for="inStock">
                                    Perennial Plants
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="soldOut" value="sold_out">
                                <label class="form-check-label" for="soldOut">
                                    Annual Plants
                                </label>
                            </div>
                            <h5 class="card-title my-4 fw-500">Style</h5>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="inStock" value="in_stock">
                                <label class="form-check-label" for="inStock">
                                    Tropical Plants
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="soldOut" value="sold_out">
                                <label class="form-check-label" for="soldOut">
                                    Desert Plants 
                                </label>
                            </div>
                            <button type="submit" class="btn btn-dark mt-3 w-100 apply-filter-button">
                                <i class="fas fa-sliders-h me-2"></i>
                                Apply Filter
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-9 d-flex justify-content-center align-items-center all-products">
                <div class="row">
                    <div class="col-12 col-md-3">
                        <figure class="product-img-container">
                            <img src="{{asset('images/product1.jpg')}}" alt="Product Image" class="img-fluid shop-page-image">
                        </figure>
                        <div class="product-details text-center">
                            <p class="product-name">Product Name</p>
                            <p class="product-price">$19.99</p>
                            <div class="product-rating mb-4">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <figure class="product-img-container">
                            <img src="{{asset('images/product1.jpg')}}" alt="Product Image" class="img-fluid shop-page-image">
                        </figure>
                        <div class="product-details text-center">
                            <p class="product-name">Product Name</p>
                            <p class="product-price">$19.99</p>
                            <div class="product-rating mb-4">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <figure class="product-img-container">
                            <img src="{{asset('images/product1.jpg')}}" alt="Product Image" class="img-fluid shop-page-image">
                        </figure>
                        <div class="product-details text-center">
                            <p class="product-name">Product Name</p>
                            <p class="product-price">$19.99</p>
                            <div class="product-rating mb-4">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <figure class="product-img-container">
                            <img src="{{asset('images/product1.jpg')}}" alt="Product Image" class="img-fluid shop-page-image">
                        </figure>
                        <div class="product-details text-center">
                            <p class="product-name">Product Name</p>
                            <p class="product-price">$19.99</p>
                            <div class="product-rating mb-4">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>  
                    <div class="col-12-12 col-md-3">
                        <figure class="product-img-container">
                            <img src="{{asset('images/product1.jpg')}}" alt="Product Image" class="img-fluid shop-page-image">
                        </figure>
                        <div class="product-details text-center">
                            <p class="product-name">Product Name</p>
                            <p class="product-price">$19.99</p>
                            <div class="product-rating mb-4">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <figure class="product-img-container">
                            <img src="{{asset('images/product1.jpg')}}" alt="Product Image" class="img-fluid shop-page-image">
                        </figure>
                        <div class="product-details text-center">
                            <p class="product-name">Product Name</p>
                            <p class="product-price">$19.99</p>
                            <div class="product-rating mb-4">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-12-12 col-md-3">
                        <figure class="product-img-container">
                            <img src="{{asset('images/product1.jpg')}}" alt="Product Image" class="img-fluid shop-page-image">
                        </figure>
                        <div class="product-details text-center">
                            <p class="product-name">Product Name</p>
                            <p class="product-price">$19.99</p>
                            <div class="product-rating mb-4">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <figure class="product-img-container">
                            <img src="{{asset('images/product1.jpg')}}" alt="Product Image" class="img-fluid shop-page-image">
                        </figure>
                        <div class="product-details text-center">
                            <p class="product-name">Product Name</p>
                            <p class="product-price">$19.99</p>
                            <div class="product-rating mb-4">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>  
                    <div class="col-12 col-md-3">
                        <figure class="product-img-container">
                            <img src="{{asset('images/product1.jpg')}}" alt="Product Image" class="img-fluid shop-page-image">
                        </figure>
                        <div class="product-details text-center">
                            <p class="product-name">Product Name</p>
                            <p class="product-price">$19.99</p>
                            <div class="product-rating mb-4">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>  
                    <div class="col-12 col-md-3">
                        <figure class="product-img-container">
                            <img src="{{asset('images/product1.jpg')}}" alt="Product Image" class="img-fluid shop-page-image">
                        </figure>
                        <div class="product-details text-center">
                            <p class="product-name">Product Name</p>
                            <p class="product-price">$19.99</p>
                            <div class="product-rating mb-4">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>  
                    <div class="col-12 col-md-3">
                        <figure class="product-img-container">
                            <img src="{{asset('images/product1.jpg')}}" alt="Product Image" class="img-fluid shop-page-image">
                        </figure>
                        <div class="product-details text-center">
                            <p class="product-name">Product Name</p>
                            <p class="product-price">$19.99</p>
                            <div class="product-rating mb-4">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>  
                    <div class="col-12 col-md-3">
                        <figure class="product-img-container">
                            <img src="{{asset('images/product1.jpg')}}" alt="Product Image" class="img-fluid shop-page-image">
                        </figure>
                        <div class="product-details text-center">
                            <p class="product-name">Product Name</p>
                            <p class="product-price">$19.99</p>
                            <div class="product-rating mb-4">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>  
                    <div class="col-12 col-md-3">
                        <figure class="product-img-container">
                            <img src="{{asset('images/product1.jpg')}}" alt="Product Image" class="img-fluid shop-page-image">
                        </figure>
                        <div class="product-details text-center">
                            <p class="product-name">Product Name</p>
                            <p class="product-price">$19.99</p>
                            <div class="product-rating mb-4">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div> 
                    <div class="col-12 col-md-3">
                        <figure class="product-img-container">
                            <img src="{{asset('images/product1.jpg')}}" alt="Product Image" class="img-fluid shop-page-image">
                        </figure>
                        <div class="product-details text-center">
                            <p class="product-name">Product Name</p>
                            <p class="product-price">$19.99</p>
                            <div class="product-rating mb-4">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div> 
                    <div class="col col-md-3">
                        <figure class="product-img-container">
                            <img src="{{asset('images/product1.jpg')}}" alt="Product Image" class="img-fluid shop-page-image">
                        </figure>
                        <div class="product-details text-center">
                            <p class="product-name">Product Name</p>
                            <p class="product-price">$19.99</p>
                            <div class="product-rating mb-4">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div> 
                    <div class="col-12 col-md-3">
                        <figure class="product-img-container">
                            <img src="{{asset('images/product1.jpg')}}" alt="Product Image" class="img-fluid shop-page-image">
                        </figure>
                        <div class="product-details text-center">
                            <p class="product-name">Product Name</p>
                            <p class="product-price">$19.99</p>
                            <div class="product-rating mb-4">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div> 
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