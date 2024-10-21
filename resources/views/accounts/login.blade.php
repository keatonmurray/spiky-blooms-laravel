@extends('layout.layout')

@section('content')
    <x-flex-centered-column id="login" additional-class="h-auto w-auto">
        <div class="row">
            <x-column-layout>
                <div class="vector-bg">
                    <figure>
                        <img src="{{asset('images/cactus.png')}}" alt="Cactus Vector Image" class="img-fluid">
                    </figure>
                </div>
            </x-column-layout>
            <x-column-layout additional-class="justify-content-center align-items-center">
                <form action="{{ route('login.store') }}" method="POST">
                    @csrf
                    <h2 class="mb-4">Let's get started.</h2>
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
                        <p>Don't have an account yet?</p>
                        <a href="/register" class="text-dark">Signup instead</a>
                    </div>
                    <br>
                    <div class="d-flex justify-content-center align-items-center mt-1">
                        <button type="submit" class="btn btn-dark login-button w-100">
                            <i class="fas fa-sign-in-alt me-2"></i>
                            Login
                        </button>
                    </div>
                </form>
            </x-column-layout>
        </div>
    </x-flex-centered-column>
@endsection