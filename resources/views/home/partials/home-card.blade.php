<!-- BESTSELLERS CARD ROW-->
<h4 class="text-center">Bestsellers</h4>
<hr class="my-3">
<div class="row">
    @foreach ($bestsellers as $bestseller)

        @if ($loop->iteration <= 3)
            <div class="col-12 col-md-4 d-flex align-items-stretch">
                <div class="card card-home mb-3">
                    <div class="card-img-div-home d-flex align-items-center justify-content-center">
                    
                        @foreach ($bestseller->images as $image)
                            @if ($image->box === 1)
                                <img class="card-img-top card-img-home" src="{{asset($image->location)}}" alt="{{asset($image->alt)}}">
                            @endif
                        @endforeach
                        
                    </div>
                    <div class="card-body card-home-div">
                        <h5 class="card-title text-center text-lg-start">{{$bestseller->name}}</h5>
                        {{-- <h6 class="card-subtitle mb-2 text-muted"><del class="pe-2">€{{$bestseller->price}}</del>€{{$bestseller->price_discount}}</h6> --}}
                        @if ($bestseller->price_discount)
                                <h6 class="px-3"><del class="text-muted pe-2">€{{$bestseller->price}}</del>  €{{$bestseller->price_discount}}</h6>
                            @else
                                <h6 class="px-3 mb-2">€{{$bestseller->price}}</h6>
                        @endif
                        <p class="card-text d-none d-lg-block">{{$bestseller->description}}</p>
                        <a href="/products/{{$bestseller->slug}}" class="stretched-link"></a>
                    </div>
                </div>
            </div>
        @endif

    @endforeach
</div>

<!-- NEW RELEASES CARD ROW -->
<h4 class="text-center">New Releases</h4>
<hr class="my-3">
<div class="row">
    @foreach ($newProducts as $product)

        @if ($loop->iteration <= 3)
            <div class="col-12 col-md-4 d-flex align-items-stretch">
                <div class="card card-home mb-3">
                    <div class="card-img-div-home d-flex align-items-center justify-content-center">
                    
                        @foreach ($product->images as $image)
                            @if ($image->box === 1)
                                <img class="card-img-top card-img-home" src="{{asset($image->location)}}" alt="{{asset($image->alt)}}">
                            @endif
                        @endforeach
                        
                    </div>
                    <div class="card-body card-home-div">
                        <h5 class="card-title">{{$product->name}}</h5>
                        {{-- <h6 class="card-subtitle mb-2 text-muted"><del class="pe-2">€{{$product->price}}</del>€{{$product->price_discount}}</h6> --}}
                        @if ($product->price_discount)
                                <h6 class="px-3"><del class="text-muted pe-2">€{{$product->price}}</del>  €{{$product->price_discount}}</h6>
                            @else
                                <h6 class="px-3 mb-2">€{{$product->price}}</h6>
                        @endif
                        <p class="card-text d-none d-lg-block">{{$product->description}}</p>
                        <a href="/products/{{$product->slug}}" class="stretched-link"></a>
                    </div>
                </div>
            </div>
        @endif

    @endforeach
</div>

<!-- SALES CARD ROW -->
<h4 class="text-center">Best Deals!</h4>
<hr class="my-3">
<div class="row">
    @foreach ($sales as $sale)

        @if ($loop->iteration <= 3)
            <div class="col-12 col-md-4 d-flex align-items-stretch">
                <div class="card card-home mb-3">
                    <div class="card-img-div-home d-flex align-items-center justify-content-center">
                    
                        @foreach ($sale->images as $image)
                            @if ($image->box === 1)
                                <img class="card-img-top card-img-home" src="{{asset($image->location)}}" alt="{{asset($image->alt)}}">
                            @endif
                        @endforeach
                        
                    </div>
                    <div class="card-body card-home-div">
                        <h5 class="card-title">{{$sale->name}}</h5>
                        {{-- <h6 class="card-subtitle mb-2 text-muted"><del class="pe-2">€{{$sale->price}}</del>€{{$sale->price_discount}}</h6> --}}
                        @if ($sale->price_discount)
                                <h6 class="px-3"><del class="text-muted pe-2">€{{$sale->price}}</del>  €{{$sale->price_discount}}</h6>
                            @else
                                <h6 class="px-3 mb-2">€{{$sale->price}}</h6>
                        @endif
                        <p class="card-text d-none d-lg-block">{{$sale->description}}</p>
                        <a href="/products/{{$sale->slug}}" class="stretched-link"></a>
                    </div>
                </div>
            </div>
        @endif

    @endforeach
</div>


@push('scripts')
    <script>
        $(window).on( 'resize', function () {
            $('.card-img-div-home ').height( $('.card-img-div-home ').width());
        }).resize();
    </script>
@endpush
