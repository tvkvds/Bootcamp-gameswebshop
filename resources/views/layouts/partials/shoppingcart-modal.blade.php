<!-- SHOPPING CART MODAL -->
<div class="modal right fade" id="modalCart" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <button id="modalClose" type="button" class="close" data-bs-dismiss="modal">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#000" class="bi bi-x" viewBox="0 0 20 20">
                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                </svg>
            </button>
            <div class="modal-header mt-3">
                <h6 class="mx-auto">SHOPPING CART</h6>
            </div>
            <ul class="list-group list-group-lg list-group-flush">

                <!-- PRODUCT -->
                @foreach ($cart_products as $product)

                <li class="list-group-item">
                    <div class="row">

                        <!-- PROD INFO -->
                        <div class="col-4 cart-img-div d-flex align-items-center justify-content-center">
                            <a href="/products/{{$product->slug}}">

                                @foreach ($product->images as $image)
                                    @if ($image->box === 1)
                                        <img class="img-fluid cart-img" src="{{$image->location}}" alt="{{$image->alt}}">
                                    @endif
                                @endforeach
                            
                            </a>    
                        </div>

                        <div class="col-8">
                            <p>
                                <a class="text-muted text-decoration-none" href="/products/{{$product->slug}}">{{$product->name}}</a> <br>
                                <span class="text-muted">€{{$product->price}}</span>
                            </p>
                            <div class="mt-auto mb-0">

                               

                                    <!-- PROD COUNTER -->
                                    <div class="input-group">

                                        @foreach ($cart as $item => $amount)
                                            @if ($product->id === $item)
                                                <input type="text" class="form-control cart-input text-center counter input-sm p-0" name="product[{{$product->id}}]" maxlength="2" value="{{$amount}}">
                                            @endif
                                        @endforeach
                                        
                                        <span class="input-group-btn ms-2">
                                            <button class="btn-counter btn-minus" type="button">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#000" class="bi bi-dash-circle" viewBox="0 0 16 16">
                                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                                <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/>
                                                </svg>
                                            </button>
                                        </span>

                                        <span class="input-group-btn ms-2">
                                            <button class="btn-counter btn-plus" type="button">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#000" class="bi bi-plus-circle" viewBox="0 0 16 16">
                                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                                </svg>
                                            </button>
                                        </span>

                                        <span class="input-group-btn ms-auto">
                                            <button class="btn-counter btn-delete" type="button">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#000" class="bi bi-x" viewBox="0 0 16 16">
                                                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                                </svg>
                                            </button>   
                                        </span>

                                    </div>  

                                

                            </div> 

                        </div>

                    </div>
                </li>

                @endforeach
               
            </ul>

            <!-- TOTAL PRICE ETC -->
            <div class="modal-footer mt-auto">
                <strong>Subtotal</strong> 
                <strong class="ms-auto">€120.00</strong>
                <a class="btn w-100 mb-3" href="">Checkout</a>
                <a class="btn w-100 mb-3" href="">Place Order</a>
            </div>
        </div>  
    </div>
</div>

@push('scripts')
    <script>
        // minus button
        $('.btn-minus').on('click', function(){           
	        $(this).parent().siblings('.cart-input').val(parseInt($(this).parent().siblings('.cart-input').val()) - 1)
        })
        //pluss button
        $('.btn-plus').on('click', function(){            
            $(this).parent().siblings('.cart-input').val(parseInt($(this).parent().siblings('.cart-input').val()) + 1)
        })
        //delete button takes value to 0
        $('.btn-delete').on('click', function(){            
            $(this).parent().siblings('.cart-input').val(parseInt($(this).parent().siblings('.cart-input').val()) - parseInt($(this).parent().siblings('input').val()))
        })
    </script>
@endpush