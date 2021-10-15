@extends('layouts.app')

@section('content')

<section class="container my-4">
        <div class="row">
            <h3 class="text-center my-4">"Name" Account</h3>
            <div class="col-12 col-md-4">
                <div class="list-group">
                    <a class="list-group-item account-nav-button d-flex" href="">Previous Orders</a>
                    <a class="list-group-item account-nav-button d-flex" href="">Personal Info</a>
                    <a class="list-group-item account-nav-button d-flex" href="">Adresses</a>
                    <a class="list-group-item account-nav-button d-flex" href="">Log Out</a>
                    <a class="list-group-item account-nav-button d-flex" href="">Delete Account</a>
                </div>
            </div>
            <div class="col-12 col-md-8">
                <!-- PREV ORDERS -->
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-mb-6 col-lg-3">
                                <h6>Order Number</h6>
                                <p>3634956795674</p>
                            </div>
                            <div class="col-12 col-mb-6 col-lg-3">
                                <h6>Order Date</h6>
                                <p>01/01/2020</p>
                            </div>
                            <div class="col-12 col-mb-6 col-lg-3">
                                <h6>Status</h6>
                                <p>awaiting delivery</p>
                            </div>
                            <div class="col-12 col-mb-6 col-lg-3">
                                <h6>Total Price</h6>
                                <p>€250,00</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <button class="btn w-100">Invoice</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- PERSONAL INFO -->
                <form>
                    <h6 class="text-center my-4">Personal Information</h6>
                    <hr class="my-3">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="firstName">First Name *</label>
                                <input class="form-control form-control-sm" id="firstName" type="text" value="Luitzen">
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="lastName">Last Name *</label>
                                <input class="form-control form-control-sm" id="lastName" type="text" value="Feenstra">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="email">Email *</label>
                                <input class="form-control form-control-sm" id="email" type="email" value="dfsjskdj@smurfjes.nl">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group mb-0">
                                <label for="phone">Mobile Phone *</label>
                                <input class="form-control form-control-sm" id="phone" type="tel" value="06 99999999">
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group mb-0">
                                <label for="username">User Name *</label>
                                <input class="form-control form-control-sm" id="username" type="text" value="ljkgnffdj">
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group mb-0">
                                <label for="password">Password *</label>
                                <input class="form-control form-control-sm" id="password" type="text" value="Gorilla1!">
                            </div>
                        </div>
                        <button class="btn w-100 mt-4 btn-sm" type="submit">Edit Profile</button>
                    </div>
                </form>

                <!-- ADRESSES -->
                <form>
                    <h6 class="text-center my-4">Billing Address</h6>
                    <hr class="my-3">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="address">Address *</label>
                                <input class="form-control form-control-sm" id="address" type="text" value="Address Line 1">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="country">Country *</label>
                                <input class="form-control form-control-sm" id="country" type="text" value="Country">
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="city">Town / City *</label>
                                <input class="form-control form-control-sm" id="city" type="text" value="Town / City">
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="zip">ZIP / Postcode *</label>
                                <input class="form-control form-control-sm" id="zip" type="text" value="ZIP / Postcode">
                            </div>
                        </div>
                        <button class="btn w-100 mt-4 btn-sm" type="submit">Edit Address</button>
                    </div>
                </form>
                <form>
                    <h6 class="text-center my-4">Shipping Address</h6>
                    <hr class="my-3">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="address">Address *</label>
                                <input class="form-control form-control-sm" id="address" type="text" value="Address Line 1">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="country">Country *</label>
                                <input class="form-control form-control-sm" id="country" type="text" value="Country">
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="city">Town / City *</label>
                                <input class="form-control form-control-sm" id="city" type="text" value="Town / City">
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="zip">ZIP / Postcode *</label>
                                <input class="form-control form-control-sm" id="zip" type="text" value="ZIP / Postcode">
                            </div>
                        </div>
                        <button class="btn w-100 mt-4 btn-sm" type="submit">Edit Address</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

@endsection