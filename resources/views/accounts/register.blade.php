@extends('layout.layout')
@section('content')
    <section id="login" class="d-flex align-items-center justify-content-center h-auto w-100">
        <div class="row">
            <x-column-layout>
                <div class="vector-bg">
                    <figure>
                        <img src="{{asset('images/cactus.png')}}" alt="Cactus Vector Image" class="img-fluid">
                    </figure>
                </div>
            </x-column-layout>
            <x-column-layout additional-class="justify-content-center align-items-center">
                <form action="{{ route('register.store') }}" method="POST">
                    @csrf
                    <h2 class="mb-4">Let's get your account setup.</h2>
                    <x-form-input 
                        label="Name" 
                        name="name" 
                        type="text"
                    />
                    <x-form-input 
                        label="Email Address" 
                        name="email" 
                        type="text"
                    />
                    <x-form-input 
                        label="Password" 
                        name="password" 
                        type="password"
                    />
                    <div class="d-flex justify-content-between">
                        <p>Already have an account?</p>
                        <a href="/login" class="text-dark">Login instead</a>
                    </div>
                    <br>
                    <div class="d-flex justify-content-center align-items-center mt-1">
                        <button type="submit" class="btn btn-dark login-button w-100">
                            <i class="fas fa-sign-in-alt me-2"></i>
                            Signup
                        </button>
                    </div>
                </form>
            </x-column-layout>
        </div>
    </section>
@endsection