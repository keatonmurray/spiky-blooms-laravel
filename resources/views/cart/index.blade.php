@extends('layouts.head')
@section('content')
    <section id="cart">
        <div class="row">
            <form class="d-flex flex-wrap" action="{{ route('paypal.pay') }}" method="POST">
                @csrf
                <div class="col-12 col-md-7">
                    <div class="contact-info shadow p-4">
                        <h5 class="my-4">Contact Information</h5>
                        <div class="mb-2">
                            <x-form-input-component name="name" label="Name" type="text"/>
                        </div>
                        <div class="mb-2">
                            <x-form-input-component name="email" label="Email Address" type="email"/>
                        </div>
                        <div class="mb-2">
                            <x-form-input-component name="phone_number" label="Contact Number" type="text"/>
                        </div>
        
                        <h5 class="my-4">Shipping Address</h5>
                        <div class="row">
                            <div class="col-12 col-md-8">
                                <div class="mb-2">
                                    <x-form-input-component name="street-address" label="Street Address" type="text"/>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="mb-2">
                                    <x-form-input-component name="apartment-number" label="Apt #" type="text"/>
                                </div>
                            </div>
                        </div>
                        <div class="mb-2">
                            <div class="row">
                                <div class="col-12 col-md-4">
                                    <x-form-input-component name="state" label="State" type="text"/>
                                </div>
                                <div class="col-12 col-md-4">
                                    <x-form-input-component name="city" label="City" type="text"/>
                                </div>
                                <div class="col-12 col-md-4">
                                    <x-form-input-component name="zip-code" label="ZIP Code" type="text"/>
                                </div>
                            </div>
                        </div>
                        <div class="mb-2">
                            <x-form-input-component name="country" label="Country" type="text"/>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-5">
                    <div class="cart-info card p-4 w-100" style="border-radius: 0 !important;">
                        <h5 class="my-4">Cart Info</h5>
                        @if(count($items) > 0)
                            <ul class="list-group mb-3">
                                @foreach($items as $item)
                                    <li class="list-group-item p-3 d-flex justify-content-between align-items-center">
                                        <div>
                                            {{ $item->name }}
                                            <span class="d-block" style="font-size: 13px !important; font-weight: bold">Quantity: {{ $item->quantity }}</span>
                                        </div> 
                                        {{-- @php $total += $item->price; @endphp  --}}
                                        <span class="badge bg-dark">${{ $item->price * $item->quantity }}</span>
                                    </li>
                                @endforeach
                            </ul>
                            <div class="list-group-item d-flex justify-content-between align-items-center my-1">
                                <strong>Shipping Fee</strong>
                                <span class="fw-bold">$7.00</span>
                            </div>
                            <div class="list-group-item d-flex justify-content-between align-items-center my-1">
                                <strong>VAT</strong>
                                <span class="fw-bold">$1.00</span>
                            </div>
                            <div class="list-group-item d-flex justify-content-between align-items-center my-1">
                                <strong>Subtotal</strong>
                                <span class="fw-bold" id="order_total"></span>
                                <input type="hidden" name="order_total" id="subtotal" value="{{ $subtotal }}">
                            </div>
                            <div class="mt-4">
                                <button class="btn btn-dark w-100" type="submit">
                                    <i class="fas fa-credit-card me-2"></i>
                                    Checkout 
                                </button>
                            </div>
                            @else 
                            <p class="text-center">
                                No products added
                            </p>
                        @endif
                        <div class="mt-2 mb-4">
                            <a href="/" class="btn btn-dark w-100" type="button">
                                <i class="fas fa-shopping-bag me-2"></i>
                                Shop More
                            </a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection