<section id="{{ $section }}" class=" {{ $class }}">
    <div class="row">
        <div class="home-heading col-12 col-md-6 text-center text-lg-start">
            <h1>
                Discover
                <span class="d-block">Our Finest Selection</span>
            </h1>
        </div>
        <div class="nav-btn col-12 col-md-6 d-flex justify-content-center justify-content-md-end">
            <button class="btn header-btn float-end mt-5">
                <i class="fas fa-search me-3"></i>
                See all collections
            </button>
        </div>
    </div>
    <br><br>
    
    <div id=" {{ $id }}" class="mt-4">
        <div class="row">
            @if($products->count() > 0)
                @foreach($products as $product)
                    <div class="{{ $id }} col-12 col-md-3">
                        <div class="product-img-container text-center d-flex flex-column align-items-center"> 
                            <figure>
                                <a href="/product/{{ $product->id }}"> 
                                    <img src="{{ asset('images/cactus1.jpg') }}" alt="{{ $product->name }}" class="img-fluid">
                                </a>
                            </figure>
                            <p class="product-title">{{ $product->name }}</p> 
                            <h3 class="product-price">${{ number_format($product->price, 2) }}</h3> 
                        </div>
                    </div>
                @endforeach
            @else
                <p>No products available at this time.</p> 
            @endif
        </div>
    </div>
</section>