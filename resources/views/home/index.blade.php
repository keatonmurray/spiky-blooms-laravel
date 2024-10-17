@extends('layout/layout')
@section('content')

    <x-home-component section="homepage" title="{{ $title }}" subtitle=" {{ $subtitle }}" />
    <x-products-component section="products" id="products"/>
    <x-about-component section="about"/>
    <x-contact-component section="contact"/>

@endsection