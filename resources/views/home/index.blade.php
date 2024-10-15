@extends('layout/layout')
@section('content')

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

    @include('home.products')

    <br><br>

    @include('home.about')

    <br><br>

    @include('home.contact')

@endsection