@extends('layouts.app')

@section('content')

<section class="container my-4">
        <div class="row">
            <h3 class="text-center my-4">{{$user->first_name . ' ' . $user->last_name  ?? ''}} Account</h3>
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
                                <p>{{$latestOrder->id  ?? ''}}</p>
                            </div>
                            <div class="col-12 col-mb-6 col-lg-3">
                                <h6>Order Date</h6>
                                <p>{{date('d-m-Y', strtotime($latestOrder->created_at ?? ''))  ?? ''}}</p>
                            </div>
                            <div class="col-12 col-mb-6 col-lg-3">
                                <h6>Status</h6>
                                <p>{{$latestOrder->status  ?? ''}}</p>
                            </div>
                            <div class="col-12 col-mb-6 col-lg-3">
                                <h6>Total Price</h6>
                                <p>€{{$latestOrder->total_price  ?? ''}}</p>
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
                                <input class="form-control form-control-sm" id="firstName" type="text" value="{{$user->first_name ?? ''}}">
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="lastName">Last Name *</label>
                                <input class="form-control form-control-sm" id="lastName" type="text" value="{{$user->last_name  ?? ''}}">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="email">Email *</label>
                                <input class="form-control form-control-sm" id="email" type="email" value="{{$user->email  ?? ''}}">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group mb-0">
                                <label for="phone">Mobile Phone *</label>
                                <input class="form-control form-control-sm" id="phone" type="tel" value="{{$user->phone  ?? ''}}">
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group mb-0">
                                <label for="username">User Name *</label>
                                <input class="form-control form-control-sm" id="username" type="text" value="{{$user->username  ?? ''}}">
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group mb-0">
                                <label for="password">Password *</label>
                                <input class="form-control form-control-sm" id="password" type="password" value="{{$user->password  ?? ''}}">
                            </div>
                        </div>
                        <button class="btn w-100 mt-4 btn-sm" id="updateProfile" type="button">Edit Profile</button>
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
                                <input class="form-control form-control-sm" id="billingAddress1" type="text" value="{{$billingAddress->address_1  ?? ''}}">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="address">Address *</label>
                                <input class="form-control form-control-sm" id="billingAddress2" type="text" value="{{$billingAddress->address_2  ?? ''}}">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="country">Country *</label>
                                <input class="form-control form-control-sm" id="billingCountry" type="text" value="{{$billingAddress->country  ?? ''}}">
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="city">Town / City *</label>
                                <input class="form-control form-control-sm" id="billingCity" type="text" value="{{$billingAddress->city  ?? ''}}">
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="zip">ZIP / Postcode *</label>
                                <input class="form-control form-control-sm" id="billingZip" type="text" value="{{$billingAddress->zipcode  ?? ''}}">
                            </div>
                        </div>
                        <button class="btn w-100 mt-4 btn-sm" type="button" id="billingUpdate" >Edit Address</button>
                    </div>
                </form>
                <form>
                    <h6 class="text-center my-4">Shipping Address</h6>
                    <hr class="my-3">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="address">Address *</label>
                                <input class="form-control form-control-sm" id="shippingAddress1" type="text" placeholder="Richmond avenue 47" value="{{$shippingAddress->address_1 ?? ''}}">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="address">Address *</label>
                                <input class="form-control form-control-sm" id="shippingAddress2" type="text" placeholder="Appartment C4" value="{{$shippingAddress->address_2 ?? ''}}">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="country">Country *</label>
                                <input class="form-control form-control-sm" id="shippingCountry" type="text" placeholder="UK" value="{{$shippingAddress->country ?? ''}}">
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="city">Town / City *</label>
                                <input class="form-control form-control-sm" id="shippingCity" type="text" placeholder="London" value="{{$shippingAddress->city ?? ''}}">
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="zip">ZIP / Postcode *</label>
                                <input class="form-control form-control-sm" id="shippingZip" type="text" placeholder="E1W 1BQ" value="{{$shippingAddress->zipcode ?? ''}}">
                            </div>
                        </div>
                        <button class="btn w-100 mt-4 btn-sm" type="button" id="shippingUpdate" >Edit Address</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

@endsection

@push('scripts')
    <script>

        $('#updateProfile').on('click', function(){ 

            console.log("clicked");
            axios({
                method: 'POST',
                url: '{{ route("ajaxuserupdate") }}',

                data: {
                    first_name: $('#firstName').val(),
                    last_name: $('#lastName').val(),
                    username: $('#username').val(),
                    phone: $('#phone').val(),
                    username: $('#username').val(),
                    email: $('#email').val(),
                    password: $('#password').val(), 
                    user_id: '{{ $user->id }}'  
                },
            }).then(function(response) {
                if (response.data.success) {
                    console.log(response)
                }
            }).catch(function(error) {
            console.log(error.response)
            })            
	       
        }) 

        function updateAddres(type, id) {
           
            axios({
                method: 'POST',
                url: '{{ route("ajaxaddressupdate") }}',

                data: {
                    address_1: $(type.concat('Address1')).val(),
                    address_2: $(type.concat('Address2')).val(),
                    country: $(type.concat('Country')).val(),
                    city: $(type.concat('City')).val(),
                    zipcode: $(type.concat('Zip')).val(), 
                    address_id: id,
                    type: type,
                    user_id: '{{ $user->id }}'
                },
            }).then(function(response) {
                if (response.data.success) {
                    console.log(response)
                }
            }).catch(function(error) {
            console.log(error.response)
            })    
        }

        $('#billingUpdate').on('click', function(){
            let type = '#billing';
            let id = '{{$billingAddress->id ?? '0'}}'
            updateAddres(type, id);
            
        })

        $('#shippingUpdate').on('click', function(){
            let type = '#shipping';
            let id = '{{$shippingAddress->id ?? '0'}}'
            updateAddres(type, id);
            
        })

        

    </script>
@endpush