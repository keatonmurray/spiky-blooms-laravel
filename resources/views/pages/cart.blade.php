@extends('layout.layout')
@section('content')
    <section id="cart">
        <div class="row">
            <form class="d-flex flex-wrap" action="/pay" method="POST">
                @csrf
                <div class="col-12 col-md-7">
                    <div class="contact-info shadow p-4">
                        <h5 class="my-4">Contact Information</h5>
                        <div class="mb-2">
                            <x-form-input name="contact-name" label="Name" type="text"/>
                        </div>
                        <div class="mb-2">
                            <x-form-input name="contact-email" label="Email Address" type="email"/>
                        </div>
                        <div class="mb-2">
                            <x-form-input name="contact-phone" label="Contact Number" type="text"/>
                        </div>
        
                        <h5 class="my-4">Shipping Address</h5>
                        <div class="row">
                            <div class="col-12 col-md-8">
                                <div class="mb-2">
                                    <x-form-input name="street-address" label="Street Address" type="text"/>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="mb-2">
                                    <x-form-input name="apartment-number" label="Apt #" type="text"/>
                                </div>
                            </div>
                        </div>
                        <div class="mb-2">
                            <div class="row">
                                <div class="col-12 col-md-4">
                                    <x-form-input name="state" label="State" type="text"/>
                                </div>
                                <div class="col-12 col-md-4">
                                    <x-form-input name="city" label="City" type="text"/>
                                </div>
                                <div class="col-12 col-md-4">
                                    <x-form-input name="zip-code" label="ZIP Code" type="text"/>
                                </div>
                            </div>
                        </div>
                        <div class="mb-2">
                            <x-form-input name="country" label="Country" type="text"/>
                        </div>
                    </div>
                </div>
        
                <div class="col-12 col-md-5">
                    <div class="cart-info card p-4 w-100" style="border-radius: 0 !important;">
                        <h5 class="my-4">Cart Info</h5>
                        <ul class="list-group mb-3">
                            <li class="list-group-item p-3 d-flex justify-content-between align-items-center">
                                Product 1
                                <span class="badge bg-dark">$10.00</span>
                            </li>
                            <li class="list-group-item p-3 d-flex justify-content-between align-items-center">
                                Product 2
                                <span class="badge bg-dark">$20.00</span>
                            </li>
                            <li class="list-group-item p-3 d-flex justify-content-between align-items-center">
                                Product 3
                                <span class="badge bg-dark">$15.00</span>
                            </li>
                        </ul>
                        <div class="list-group-item d-flex justify-content-between align-items-center my-1">
                            <strong>Shipping Fee</strong>
                            <span class="fw-bold">$7.00</span>
                        </div>
                        <div class="list-group-item d-flex justify-content-between align-items-center my-1">
                            <strong>VAT</strong>
                            <span class="fw-bold">$1.90</span>
                        </div>
                        <div class="list-group-item d-flex justify-content-between align-items-center my-1">
                            <strong>Subtotal</strong>
                            <span class="fw-bold">$45.00</span>
                            <input type="hidden" name="amount" value="1">
                        </div>
                        <div class="mt-4">
                            <button class="btn btn-dark w-100" type="submit">
                                <i class="fas fa-credit-card me-2"></i>
                                Checkout 
                            </button>
                        </div>
                        <div class="mt-2 mb-4">
                            <button class="btn btn-dark w-100" type="button">
                                <i class="fas fa-angle-left me-2"></i> 
                                Cancel
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection