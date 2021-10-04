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
                            Thank you for your order Luitzen! <br><br>
                            Your order number is : <b>666</b>
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
                                    <td>Dark alley 3</td>
                                </tr>
                                <tr>
                                    <td><b>ZIP:</b></td>
                                    <td>3333NL</td>
                                </tr>
                                <tr>
                                    <td><b>City:</b></td>
                                    <td>Shithole</td>
                                </tr>
                                <tr>
                                    <td><b>Country:</b></td>
                                    <td>Netherlands</td>
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
                                <tr>
                                    <td>Halo</td>
                                    <td class="text-center">1</td>
                                    <td class="text-center">€60</td>
                                    <td class="text-end">€60</td>
                                </tr>
                                <tr>
                                    <td>Terraria</td>
                                    <td class="text-center">2</td>
                                    <td class="text-center">€20</td>
                                    <td class="text-end">€40</td>
                                </tr>
                                <tr>
                                    <td>Club Penguin</td>
                                    <td class="text-center">1</td>
                                    <td class="text-center">€3000</td>
                                    <td class="text-end">€3000</td>
                                </tr>
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
                                    <td class="text-center">€3100</td>
                                    <td class="text-center">€0</td>
                                    <td class="text-center">€654</td>
                                    <td class="text-end">€3100</td>
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
                                        Pay Pall/ Credit Card/ Bank
                                        (for CC and bank we should add some details suchlast 3 didgits of the CC number or the acount number and bank name for bank)
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