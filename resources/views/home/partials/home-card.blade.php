
@foreach ($products as $product)

    @if ($loop->iteration <= 6)

        <div class="col-12 col-md-4 d-flex align-items-stretch">
            <div class="card mb-3">

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
                    <p class="card-text">{{$product->description}}</p>
                    <a href="/products/{{$product->slug}}" class="stretched-link"></a>

                </div>

            </div>
        </div>

    @endif

@endforeach


@push('scripts')
    <script>
        $(window).on( 'resize', function () {
            $('.card-img-div-home ').height( $('.card-img-div-home ').width());
        }).resize();
    </script>
@endpush
