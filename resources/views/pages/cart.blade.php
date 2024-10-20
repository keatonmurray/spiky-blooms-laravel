@extends('layout.layout')
@section('content')
    <section id="cart">
        <div class="row">
            <form class="d-flex flex-wrap">
                <div class="col-12 col-md-7">
                    <div class="contact-info shadow p-4">
                        <h5 class="my-4">Contact Information</h5>
                        <div class="mb-3">
                            <label for="contact-name" class="form-label">Name</label>
                            <input type="text" class="form-control line-input" id="contact-name">
                        </div>
                        <div class="mb-3">
                            <label for="contact-email" class="form-label">Email Address</label>
                            <input type="email" class="form-control line-input" id="contact-email">
                        </div>
                        <div class="mb-3">
                            <label for="contact-phone" class="form-label">Contact Number</label>
                            <input type="tel" class="form-control line-input" id="contact-phone">
                        </div>
        
                        <h5 class="my-4">Shipping Address</h5>
                        <div class="row">
                            <div class="col-12 col-md-8">
                                <div class="mb-3">
                                    <label for="shipping-name" class="form-label">Street Address</label>
                                    <input type="text" class="form-control line-input" id="shipping-name">
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="mb-3">
                                    <label for="shipping-email" class="form-label">Apt # (optional)</label>
                                    <input type="email" class="form-control line-input" id="shipping-email">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-12 col-md-4">
                                    <label for="shipping-phone" class="form-label">State</label>
                                    <input type="tel" class="form-control line-input" id="shipping-phone">
                                </div>
                                <div class="col-12 col-md-4">
                                    <label for="shipping-phone" class="form-label">City</label>
                                    <input type="tel" class="form-control line-input" id="shipping-phone">
                                </div>
                                <div class="col-12 col-md-4">
                                    <label for="shipping-phone" class="form-label">ZIP Code</label>
                                    <input type="tel" class="form-control line-input" id="shipping-phone">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="shipping-phone" class="form-label">Country</label>
                            <input type="tel" class="form-control line-input" id="shipping-phone">
                        </div>
                    </div>
                </div>
        
                <div class="col-12 col-md-5">
                    <div class="cart-info card p-4 w-100" style="border-radius: 0 !important;">
                        <h5 class="my-4">Cart Info</h5>
                        <ul class="list-group mb-3">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Product 1
                                <span class="badge bg-dark">$10.00</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Product 2
                                <span class="badge bg-dark">$20.00</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
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