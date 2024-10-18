<section id="{{ $section }}" class=" {{ $class }}">
    <div class="row">
        <div class="home-heading col-12 col-md-6 text-center text-lg-start">
            <h1>
                Discover
                <span class="d-block">Our Finest Selection</span>
            </h1>
        </div>
        <div class="nav-btn col-12 col-md-6 d-flex justify-content-center justify-content-md-end">
            <a href="/shop" class="btn header-btn float-end mt-5">
                <i class="fas fa-search me-3"></i>
                See all collections
            </a>
        </div>
    </div>
    <br><br>
    
    <div id=" {{ $id }}" class="mt-4">
        <div class="row">
            @if($catalogs->count() > 0)
                @foreach($catalogs as $catalog)
                    <div class="{{ $id }} col-12 col-md-3">
                        <div class="product-img-container text-center d-flex flex-column align-items-center"> 
                            <figure>
                                <a href="/product/{{ $catalog->id }}"> 
                                    <img src="{{ asset('images/cactus1.jpg') }}" alt="{{ $catalog->catalog_name }}" class="img-fluid">
                                </a>
                            </figure>
                            <p class="product-title">{{ $catalog->catalog_name }}</p> 
                            <h3 class="product-price">{{ $catalog->price_range }}</h3> 
                        </div>
                    </div>
                @endforeach
            @else
                <p>No collections available at this time.</p> 
            @endif
        </div>
    </div>
</section>