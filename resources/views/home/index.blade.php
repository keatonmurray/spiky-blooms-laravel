@extends('layout/layout')
@section('content')
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.html">
                <img src="{{asset('images/logo.png')}}" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav flex-fill">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="single.html">Cart</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.html">My Account</a>
                    </li>
                </ul>
                <form class="d-flex ms-auto">
                    <input class="form-control line-input me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-dark" type="submit">
                        <i class="fas fa-search search-icon"></i>
                    </button>
                </form>
            </div>
        </div>
    </nav>

    <br>

    <section id="homepage" class="mt-4">
        <div class="row">
            <div class="col-12 col-md-6 d-flex justify-content-start align-items-center">
                <h1 class="heading title-one">Bringing Life 
                    <span class="d-block title-two">To Your Space</span>
                </h1>
            </div>
            <div class="col-12 col-md-6 d-flex justify-content-center align-items-center">
                <figure class="ms-auto">
                    <img src="{{asset('images/bg.jpg')}}" class="background-img" alt="Background Img">
                </figure>
            </div>
        </div>
    </section>

    <section id="products" class="full-height">
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
        
        <div id="products" class="mt-4">
            <div class="row">
                <div class="products col-12 col-md-3">
                    <div class="product-img-container text-center d-flex flex-column align-items-center"> 
                        <figure>
                            <img src="{{asset('images/cactus1.jpg')}}" alt="Product Image" class="img-fluid">
                        </figure>
                        <p class="product-title">Corsage Cactus</p>
                        <h3 class="product-price">$12.50</h3>
                    </div>
                </div>
                <div class="products col-12 col-md-3">
                    <div class="product-img-container text-center d-flex flex-column align-items-center"> 
                        <figure>
                            <img src="{{asset('images/cactus1.jpg')}}" alt="Product Image">
                        </figure>
                        <p class="product-title">Corsage Cactus</p>
                        <h3 class="product-price">$12.50</h3>
                    </div>
                </div>
                <div class="products col-12 col-md-3">
                    <div class="product-img-container text-center d-flex flex-column align-items-center"> 
                        <figure>
                            <img src="{{asset('images/cactus1.jpg')}}" alt="Product Image">
                        </figure>
                        <p class="product-title">Corsage Cactus</p>
                        <h3 class="product-price">$12.50</h3>
                    </div>
                </div>
                <div class="products col-12 col-md-3">
                    <div class="product-img-container text-center d-flex flex-column align-items-center"> 
                        <figure>
                            <img src="{{asset('images/cactus1.jpg')}}" alt="Product Image">
                        </figure>
                        <p class="product-title">Corsage Cactus</p>
                        <h3 class="product-price">$12.50</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="mt-4">
        <div class="row">
            <div class="col-12 col-md-6 d-flex flex-column align-items-center justify-content-center">
                <h1 class="about-heading text-center">
                    The most important things
                    <span class="d-block">are not things, so we design experiences.</span>
                </h1>
                <form action="" class="mt-4 w-100 text-center">
                    <div class="mb-2">
                        <label for="emailInput" class="form-label text-dark fs-5 fw-500">Subscribe to our newsletter</label>
                    </div>
                    <div class="d-flex">
                        <input id="emailInput" class="form-control line-input me-2" type="email" placeholder="Enter your email address" aria-label="Email">
                        <button class="btn btn-dark" type="submit">
                            <i class="fas fa-envelope"></i>
                        </button>
                    </div>
                </form>
            </div>
            <div class="col-12 col-md-6 d-flex justify-content-end about-bg-section">
                <figure class="ms-auto">
                    <img src="{{asset('images/about.jpg')}}" class="about-section-img" salt="Background Image">
                </figure>
            </div>
        </div>
    </section>

    <br><br>

    <section id="contact" class="mt-4">
        <div class="home-heading text-center mb-4">
            <h1>
                Have any questions?
                <span class="d-block">We'd love to hear about it!</span>
            </h1>
        </div>
        <form action="" class="contact-form">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-12 col-md-6">
                    <label for="" class="form-label">First Name</label>
                    <input type="text" class="form-control line-input mb-4">
                </div>
                <div class="col-12 col-md-6">
                    <label for="" class="form-label">Last Name</label>
                    <input type="text" class="form-control line-input mb-4">
                </div>
                <div class="col-12 col-md-6">
                    <label for="" class="form-label">Phone Number</label>
                    <input type="text" class="form-control line-input mb-4">
                </div>
                <div class="col-12 col-md-6">
                    <label for="" class="form-label">Email Address</label>
                    <input type="text" class="form-control line-input mb-4">
                </div>
                <div class="col-12">
                    <label for="" class="form-label">Message</label>
                    <textarea name="" id="" class="form-control line-input"></textarea>
                </div>
            </div>
            <div class="float-end mt-4">
                <button class="btn btn-dark send-message-btn" type="submit">
                    <i class="fas fa-paper-plane me-2"></i>
                    Send Message
                </button>
            </div>
        </form>
    </section>

    <br><br>

    <footer class="d-flex justify-content-center align-items-center mt-4">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-4 mb-4">
                    <h5>Location</h5>
                    <a href="" class="text-decoration-none text-dark">55278 Schinner Divide, Port Magaret, TX 76934</a>
                </div>
                <div class="col-md-4 mb-4">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-decoration-none text-dark">Home</a></li>
                        <li><a href="#" class="text-decoration-none text-dark">Shop</a></li>
                        <li><a href="#" class="text-decoration-none text-dark">About</a></li>
                        <li><a href="#" class="text-decoration-none text-dark">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-4 mb-4">
                    <h5>Follow Us</h5>
                    <a href="#" class="me-3 text-decoration-none">
                        <i class="fab fa-facebook fa-lg"></i>
                    </a>
                    <a href="#" class="me-3 text-decoration-none">
                        <i class="fab fa-instagram fa-lg"></i>
                    </a>
                    <a href="#" class="me-3 text-decoration-none">
                        <i class="fab fa-twitter fa-lg"></i>
                    </a>
                    <a href="#" class="text-decoration-none">
                        <i class="fab fa-pinterest fa-lg"></i>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center py-3">
                    <p class="mb-0">&copy; 2024 Spiky Blooms. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </footer>
@endsection