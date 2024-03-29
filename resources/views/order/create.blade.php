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

                <form id="order" method="post" action="/orderconfirmed">
                @csrf
            
                <h6 class="text-center my-4">Payment</h6>
                <hr class="my-3">

                <div class="row mb-3">

                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="firstName">First Name *</label>
                            <input class="form-control form-control-sm"  name="user[first_name]" id="firstName" type="text" placeholder="First Name" required="">
                        </div>
                    </div>
                

                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="lastName">Last Name *</label>
                            <input class="form-control form-control-sm"  name="user[last_name]" id="lastName" type="text" placeholder="Last Name" required="">
                        </div>
                    </div>
                

                    <div class="col-12">
                        <div class="form-group">
                            <label for="email">Email *</label>
                            <input class="form-control form-control-sm"  name="user[email]" id="email" type="email" placeholder="Email" required="">
                        </div>
                    </div>
                

                    <div class="col-12">
                        <div class="form-group">
                            <label for="company">Company name *</label>
                            <input class="form-control form-control-sm"  name="user[company]" id="company" type="text" placeholder="Company name (optional)">
                        </div>
                    </div>
                

                    <div class="col-12">
                        <div class="form-group">
                            <label for="country">Country *</label>
                            <input class="form-control form-control-sm"  name="address[country]" id="country" type="text" placeholder="Country" required="">
                        </div>
                    </div>
                

                    <div class="col-12">
                        <div class="form-group">
                            <label for="address">Address*</label>
                            <input class="form-control form-control-sm"  name="address[address_1]" id="address" type="text" placeholder="Address Line 1" required="">
                        </div>
                    </div>
            

                    <div class="col-12">
                        <div class="form-group">
                            <label for="addressTwo">Address Line 2</label>
                            <input class="form-control form-control-sm" name="address[address_2]" id="addressTwo" type="text" placeholder="Address Line 2 (optional)">
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="city">Town / City *</label>
                            <input class="form-control form-control-sm"  name="address[city]" id="city" type="text" placeholder="Town / City" required="">
                        </div>
                    </div>
                

                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="zip">ZIP / Postcode *</label>
                            <input class="form-control form-control-sm"  name="address[zipcode]" id="zip" type="text" placeholder="ZIP / Postcode" required="">
                        </div>
                    </div>
                
                    <div class="col-12">
                        <div class="form-group mb-0">
                            <label for="phone">Mobile Phone *</label>
                            <input class="form-control form-control-sm"  name="user[phone]" id="phone" type="tel" placeholder="Mobile Phone" required="">
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

                                                <input class="custom-control-input" value="{{$ship->id}}" id="shipping-{{$ship->id}}" name="shipping" type="radio">

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
                                                <input class="form-control form-control-sm" name="address2[country]"  id="shippingCountry" type="text" placeholder="Country">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="shippingAddress">Address Line 1 *</label>
                                                <input class="form-control form-control-sm" name="address2[address_1]"  id="shippingAddressOne" type="text" placeholder="Address Line 1">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="shippingAdressTwo">Address Line 2</label>
                                                <input class="form-control form-control-sm"  name="address2[address_2]"  id="shippingAddressTwo" type="text" placeholder="Address Line 2 (optional)">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="shippingCity">Town / City *</label>
                                                <input class="form-control form-control-sm" name="address2[city]"  id="shippingCity" type="text" placeholder="Town / City">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="shippingZip">ZIP / Postcode *</label>
                                                <input class="form-control form-control-sm" name="address2[zipcode]" id="shippingZip" type="text" placeholder="ZIP / Postcode">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-sm w-100" type="button" id="addressformbutton">
                                            Save Address
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- PAYMENT OPTIONS -->
                            <div class="list-group list-group-sm mb-4">

                                <div class="list-group-item">
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" id="checkoutPaymentCard" value="creditcard" name="payment" type="radio" data-bs-toggle="collapse" data-bs-target="#creditcardCollapse">
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
                                                <input class="form-control form-control-sm" id="cardNumber" type="text" placeholder="Card Number *" >
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group mb-4">
                                                <label for="cardName">Name of Card Holder</label>
                                                <input class="form-control form-control-sm" id="cardName" type="text" placeholder="Name on Card *" >
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <label for="cardDate">Card Experation Date</label>
                                                <input class="form-control form-control-sm" id="cardDate" type="text" placeholder="Month/Year *" >
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <label for="cardCVV">CVV</label>
                                                <input class="form-control form-control-sm" id="cardCVV" type="text" placeholder="CVV *" >
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="list-group-item">
                                    <div class="custom-control custom-radio">
                                        <label class="custom-control-label" for="paypal"></label>
                                        <input class="custom-control-input" id="paypal" value="paypal" name="payment" type="radio" data-toggle="collapse" data-action="hide" data-target="#checkoutPaymentCardCollapse">
                                            PayPal <img class="ms-2" src="/images/paypal.svg" alt="paypal logo">
                                        </label>
                                    </div>
                                </div>

                                <div class="list-group-item">

                                    <div class="custom-control custom-radio">
                                        <label class="custom-control-label" for="ideal"></label>
                                        <input class="custom-control-input" id="ideal"  value="ideal" name="payment" type="radio" data-toggle="collapse" data-action="hide" data-target="#checkoutPaymentCardCollapse">
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

                            <textarea class="form-control form-control-sm mb-md-0 font-size-xs"  value="yeet" name="userNote" rows="5" placeholder="Add Note (optional)"></textarea>
                    </form>
                </div>

               
                            
                    

                    


                

            </div>

             <!-- SHOPPING CART DISPLAY -->
        
        <div class="col-12 col-md-5 col-lg-4 offset-lg-1">
        
            <h6 class="text-center my-4">Shopping Cart</h6>

            <hr class="my-3">

            <ul class="list-group list-group-lg list-group-flush-y list-group-flush-x mb-3">
                @include('.order.partials.checkout-prod-card')
            </ul>

            <div class="card mb-3 bg-light">
                <div class="card-body">

                    <ul class="list-group list-group-sm list-group-flush-y list-group-flush-x">
                        
                        <li class="list-group-item d-flex">
                            <span>Tax</span> <span class="ms-auto">€{{($cart_vat) ? $cart_vat : '0'}}</span>
                        </li>

                        <li class="list-group-item d-flex">
                            <span>Shipping</span> <span class="ms-auto shipping-price">€0.00</span>
                        </li>

                        <li class="list-group-item d-flex">
                            <span>Total</span> <span class="ms-auto total-price">€{{$cart_total}}</span>
                        </li>

                    </ul>

                </div>
            </div>
            
            <button class="btn btn-block w-100" type="submit" form="order">
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

        $('#shipping-3, #shipping-2, #shipping-1').on('change', function() {
            if($('#shipping-3').is(':checked')){
                    $('.shipping-price').text('€12.00');
                    var total = {{$cart_total}}+12;
                    $('.total-price').text('€'+total);
            } else if ($('#shipping-2').is(':checked')){
                    $('.shipping-price').text('€8.00');
                    var total = {{$cart_total}}+8;
                    $('.total-price').text('€'+total);
            } else if ($('#shipping-1').is(':checked')){
                    $('.shipping-price').text('€0.00');
                    var total = {{$cart_total}}+0;
                    $('.total-price').text('€'+total);
            }
        });

       

        // shipping address 
        $('#addressformbutton').on('click', function(){   

            console.log("button clicked");        
            
            axios({
                method: 'POST',
                url: '{{ route("ajaxaddress") }}',

                data: {
                    address:{
                    country: $('#shippingCountry').val(),
                    address_1: $('#shippingAddressOne').val(),
                    address_2: $('#shippingAddressTwo').val(),
                    city: $('#shippingCity').val(),
                    zipcode: $('#shippingZip').val()
                    },
                    user: {
                        first_name: $('#firstName').val(),
                        last_name: $('#lastName').val(),
                        email: $('#email').val(),
                        company: $('#company').val(),
                        phone: $('#phone').val(),
                    }      
                },
            }).then(function(response) {
                if (response.data.success) {
                    console.log(response)
                }
            }).catch(function(error) {
            console.log(error.response)
            });  

        });

        /*$(document).ready(function() {
            $('#checkoutPaymentCard').change(function() {
                if ($('#cardNumber #cardName #cardDate #cardCVV').attr('required')) {
                    $('#cardNumber #cardName #cardDate #cardCVV').removeAttr('required');
                } 
                else {
                    $('#cardNumber #cardName #cardDate #cardCVV').attr('required',true);
                }
            });
        });*/

       // $(window).on( 'resize', function () {
         //   $('.checkout-img-div').height( $('.checkout-img-div').width());
       // }).resize();
    </script>
@endpush