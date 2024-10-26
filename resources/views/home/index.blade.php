@extends('layouts.head')
@section('content')
    <x-home-component section="homepage" title="{{ $title }}" subtitle=" {{ $subtitle }}" class="mt-4" />
    <x-featured-products-component section="products" id="products" class="full-height" :products="$products"/>
    <x-about-component section="about" class="mt-4"/>
    {{-- <x-contact-component section="contact" class="mt-4"/> --}}
@endsection
