@extends('layouts.app')

@section('content')

    <section class="container mt-5 mb-3">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="d-flex flex-row justify-content-center m-2"> 
                        <img src="/images/broke.gif" width="200">
                    </div>
                    <hr>
                    <div class="m-2">
                        <p>
                            Thank you for your order {{$user->first_name . ' ' . $user->last_name}}! <br><br>
                            Your order number is : <b>{{$order->id}}</b>
                        </p>
                    </div>
                    <hr>
                    <div class="m-2">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <td><b>Shipping adress:</b></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><b>Street:</b></td>
                                    <td>{{$address->address_1 . ' ' . $address->address_2}}</td>
                                </tr>
                                <tr>
                                    <td><b>ZIP:</b></td>
                                    <td>{{$address->zipcode}}</td>
                                </tr>
                                <tr>
                                    <td><b>City:</b></td>
                                    <td>{{$address->city}}</td>
                                </tr>
                                <tr>
                                    <td><b>Country:</b></td>
                                    <td>{{$address->country}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <hr>
                    <div class="m-2">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <td><b>Product:</b></td>
                                    <td class="text-center"><b>Qty:</b></td>
                                    <td class="text-center"><b>Price:</b></td>
                                    <td class="text-end"><b>Total:</b></td>
                                </tr>

                               <?php $total = 0; ?>

                                @foreach ($products as $product )
                                    
                                <tr>
                                    <td>{{$product->name}}</td>
                                    <td class="text-center">{{$cart[$product->id]}}</td>
                                    <td class="text-center">€{{($product->price_discount) ? $product->price_discount : $product->price;}}</td>
                                    <td class="text-end">€{{($product->price_discount) ? $product->price_discount * $cart[$product->id] : $product->price * $cart[$product->id];}}</td>
                                </tr> 

                                <?php $total += ($product->price_discount) ? $product->price_discount * $cart[$product->id] : $product->price * $cart[$product->id];?>

                                @endforeach
                                
                            </tbody>
                        </table>
                    </div>
                    <hr>
                    <div class="m-2">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <td class="text-center"><b>Subtotal:</b></td>
                                    <td class="text-center"><b>Shipping:</b></td>
                                    <td class="text-center"><b>Tax:</b></td>
                                    <td class="text-end"><b>Total:</b></td>
                                </tr>
                                <tr>
                                    <td class="text-center">€{{$total}}</td>
                                    <td class="text-center">€{{$shipping->shipping_cost}}</td>
                                    <td class="text-center">€{{$order->total_vat}}</td>
                                    <td class="text-end">€{{$cart_total}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <hr>
                    <div class="m-2">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <td><b>Payment Details:</b></td>
                                </tr>
                                <tr>
                                    <td> 
                                        {{$payment}}
                                        {{-- (for CC and bank we should add some details suchlast 3 didgits of the CC number or the acount number and bank name for bank) --}}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection