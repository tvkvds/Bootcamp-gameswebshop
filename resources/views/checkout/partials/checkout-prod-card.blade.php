@if ($cart_products)
    @foreach ($cart_products as  $product)
            
        <li class="list-group-item">
            <div class="row align-items-center">
                
                <div class="col-4 checkout-img-div text-center align-text-center">
                    <a href="/products/{{$product->slug}}">
                        
                        @foreach ($product->images as $image)
                            @if ($image->box === 1)
                                <img class="img-fluid checkout-img" src="{{$image->location}}" alt="{{$image->alt}}">
                            @endif
                        @endforeach

                    </a>
                </div>

                <div class="col">
                
                    <p class="mb-4">
                        <a class="text-body" href="/products/{{$product->slug}}">{{$product->name}}</a> <br>
                        <span class="text-muted">€{{$product->price}}</span>
                    </p>

                    <div class="text-muted">
                        
                        @foreach ($cart as $item => $amount)
                            @if ($product->id === $item)
                                Amount: {{$amount}} <br>
                            @endif
                        @endforeach
                        Discount: €{{($product->price_discount) ? $product->price_discount : '0'}}
                    </div>

                </div>

            </div>
        </li>
        
    @endforeach
@endif


@push('scripts')
    <script>
        $(window).on( 'resize', function () {
            $('.checkout-img-div').height( $('.checkout-img-div').width());
        }).resize();
    </script>
@endpush