@extends('layouts.app')

@section('content')

    <section>
        <div class="container">

            <div class="row">
                <div class="col-12 text-center">
                    <h3 class="my-4">Checkout</h3>
                    <p class="mb-3">
                        Already have an account? <a class="font-weight-bold text-reset" href="">Click here</a>
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-7 mb-4">
                    
                    <form>
                        <h6 class="text-center my-4">Payment</h6>
                        <hr class="my-3">
                            <!-- PERSONAL INFO FORM -->
                            <div class="row mb-3">

                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="firstName">First Name *</label>
                                        <input class="form-control form-control-sm" id="firstName" type="text" placeholder="First Name" required="">
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="lastName">Last Name *</label>
                                        <input class="form-control form-control-sm" id="lastName" type="text" placeholder="Last Name" required="">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="email">Email *</label>
                                        <input class="form-control form-control-sm" id="email" type="email" placeholder="Email" required="">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="company">Company name *</label>
                                        <input class="form-control form-control-sm" id="company" type="text" placeholder="Company name (optional)">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="country">Country *</label>
                                        <input class="form-control form-control-sm" id="country" type="text" placeholder="Country" required="">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="address">Address Line 1 *</label>
                                        <input class="form-control form-control-sm" id="address" type="text" placeholder="Address Line 1" required="">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="addressTwo">Address Line 2</label>
                                        <input class="form-control form-control-sm" id="addressTwo" type="text" placeholder="Address Line 2 (optional)">
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="city">Town / City *</label>
                                        <input class="form-control form-control-sm" id="city" type="text" placeholder="Town / City" required="">
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="zip">ZIP / Postcode *</label>
                                        <input class="form-control form-control-sm" id="zip" type="text" placeholder="ZIP / Postcode" required="">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group mb-0">
                                        <label for="phone">Mobile Phone *</label>
                                        <input class="form-control form-control-sm" id="phone" type="tel" placeholder="Mobile Phone" required="">
                                    </div>
                                </div>

                            </div>

                            <h6 class="text-center my-4">Shipping Details</h6>

                            <!-- SHIPPING OPTIONS TABLE -->
                            <div class="table-responsive mb-4">
                                <table class="table table-bordered table-sm table-hover mb-0">
                                    <tbody>

                                        @foreach ($shipping_methods as $ship)
                                            <tr>
                                                <td>

                                                    <div class="custom-control custom-radio">
                                                        <label class="custom-control-label" for="{{$ship->id}}"></label>
                                                        <input class="custom-control-input" id="{{$ship->id}}" name="shipping" type="radio">
                                                        {{$ship->shipping_method}}
                                                        </label>
                                                    </div>

                                                </td>

                                                <td>{{$ship->time}}</td>
                                                <td>€{{$ship->shipping_cost}}</td>
                                            </tr>
                                        @endforeach
                                       
                                    </tbody>
                                </table>
                            </div>

                            <!-- DIFERENT SHIPPING ADRESS FORM -->
                            <div class="mb-5">
                                <a class="btn dropdown-toggle btn-sm w-100 mb-4" data-bs-toggle="collapse" href="#shippingAddress" role="button">
                                    Different shipping address?
                                </a>
                                <div class="collapse" id="shippingAddress">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="shippingCountry">Country *</label>
                                                <input class="form-control form-control-sm" id="shippingCountry" type="text" placeholder="Country">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="shippingAddress">Address Line 1 *</label>
                                                <input class="form-control form-control-sm" id="shippingAdress" type="text" placeholder="Address Line 1">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="shippingAdressTwo">Address Line 2</label>
                                                <input class="form-control form-control-sm" id="shippingAdressTwo" type="text" placeholder="Address Line 2 (optional)">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="shippingCity">Town / City *</label>
                                                <input class="form-control form-control-sm" id="shippingCity" type="text" placeholder="Town / City">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="shippingZip">ZIP / Postcode *</label>
                                                <input class="form-control form-control-sm" id="shippingZip" type="text" placeholder="ZIP / Postcode">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-sm w-100" type="submit">
                                            Save Address
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <h6 class="text-center mb-4">Payment Details</h6>

                            <!-- PAYMENT OPTIONS -->
                            <div class="list-group list-group-sm mb-4">

                                <div class="list-group-item">
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" id="checkoutPaymentCard" name="payment" type="radio" data-bs-toggle="collapse" data-bs-target="#creditcardCollapse">
                                        <label class="custom-control-label " for="checkoutPaymentCard">
                                            Credit Card <img class="ms-2" src="/images/cards.svg" alt="...">
                                        </label>
                                    </div>
                                </div>

                                <div class="list-group-item collapse" id="creditcardCollapse">
                                    <div class="row">

                                        <div class="col-12">
                                            <div class="form-group mb-4">
                                                <label for="cardNumber">Card Number</label>
                                                <input class="form-control form-control-sm" id="cardNumber" type="text" placeholder="Card Number *" required="">
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group mb-4">
                                                <label for="cardName">Name of Card Holder</label>
                                                <input class="form-control form-control-sm" id="cardName" type="text" placeholder="Name on Card *" required="">
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <label for="cardDate">Card Experation Date</label>
                                                <input class="form-control form-control-sm" id="cardDate" type="text" placeholder="Month/Year *" required="">
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <label for="cardCVV">CVV</label>
                                                <input class="form-control form-control-sm" id="cardCVV" type="text" placeholder="CVV *" required="">
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="list-group-item">
                                    <div class="custom-control custom-radio">
                                        <label class="custom-control-label" for="paypal"></label>
                                        <input class="custom-control-input" id="paypal" name="payment" type="radio" data-toggle="collapse" data-action="hide" data-target="#checkoutPaymentCardCollapse">
                                            PayPal <img class="ms-2" src="/images/paypal.svg" alt="paypal logo">
                                        </label>
                                    </div>
                                </div>

                                <div class="list-group-item">
                                    <div class="custom-control custom-radio">
                                        <label class="custom-control-label" for="ideal"></label>
                                        <input class="custom-control-input" id="ideal" name="payment" type="radio" data-toggle="collapse" data-action="hide" data-target="#checkoutPaymentCardCollapse">
                                        Ideal 

                                        <div id="bankDropdown" class="btn-group my-2">
                                            <button class="btn btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                                Select Bank
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li class="mx-2">ABN AMRO</li>
                                                <li class="mx-2">ING</li>
                                                <li class="mx-2">ASN Bank</li>
                                                <li class="mx-2">Bunq</li>
                                                <li class="mx-2">Knab</li>
                                                <li class="mx-2">Rabobank</li>
                                                <li class="mx-2">Regiobank</li>
                                                <li class="mx-2">Revolut</li>
                                            </ul>
                                        </div>

                                        <img id="idealLogo" class="ms-2" src="/images/ideal.svg" alt="ideal logo">
                                        </label>
                                    </div>
                                </div>

                            </div>

                            <textarea class="form-control form-control-sm mb-md-0 font-size-xs" rows="5" placeholder="Add Note (optional)"></textarea>
                    </form>

                </div>
                <!-- SHOPPING CART DISPLAY -->
                <div class="col-12 col-md-5 col-lg-4 offset-lg-1">

                    <h6 class="text-center my-4">Shopping Cart</h6>

                    <hr class="my-3">

                    <ul class="list-group list-group-lg list-group-flush-y list-group-flush-x mb-3">
                        @include('.checkout.partials.checkout-prod-card')
                    </ul>

                    <div class="card mb-3 bg-light">
                        <div class="card-body">
                            <ul class="list-group list-group-sm list-group-flush-y list-group-flush-x">
                                <li class="list-group-item d-flex">
                                    <span>Tax</span> <span class="ms-auto">€25.20</span>
                                </li>
                                <li class="list-group-item d-flex">
                                    <span>Shipping</span> <span class="ms-auto">€0.00</span>
                                </li>
                                <li class="list-group-item d-flex">
                                    <span>Total</span> <span class="ms-auto">€120.00</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <button class="btn btn-block w-100">
                        Place Order
                    </button>

                </div>
                
            </div>
        </div>
    </section>

@endsection

@push('scripts')
    <script>
        $(function(){
            $("#bankDropdown .dropdown-menu li").click(function(){
                $("#bankDropdown .btn").text($(this).text());
            });
        });

       // $(window).on( 'resize', function () {
         //   $('.checkout-img-div').height( $('.checkout-img-div').width());
       // }).resize();
    </script>
@endpush