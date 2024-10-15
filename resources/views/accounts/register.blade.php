@extends('layout.layout')
@section('content')
    <section id="login" class="d-flex align-items-center justify-content-center h-auto w-100">
        <div class="row">
            <div class="col-12 col-md-6 d-flex align-items-center justify-content-center">
                <div class="vector-bg">
                    <figure>
                        <img src="{{asset('images/cactus.png')}}" alt="Cactus Vector Image" class="img-fluid">
                    </figure>
                </div>
            </div>
            <div class="col-12 col-md-6 d-flex align-items-center justify-content-center">
                <form action="" method="POST">
                    <h2 class="mb-4">Let's get your account setup.</h2>
                    <label for="" class="form-label mt-2">Email Address</label>
                    <input type="email" class="form-control line-input mb-2">
                    <label for="" class="form-label">Password</label>
                    <input type="password" class="form-control line-input mb-3">
                    <div class="d-flex justify-content-between">
                        <p>Already have an account?</p>
                        <a href="login.html" class="text-dark">Login instead</a>
                    </div>
                    <br>
                    <div class="d-flex justify-content-center align-items-center mt-1">
                        <button type="submit" class="btn btn-dark login-button w-100">
                            <i class="fas fa-sign-in-alt me-2"></i>
                            Signup
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection