<!-- PRODUCT CARD -->
@foreach ($products as $product)

    <a class="card-link" href="/products/{{$product->slug}}">
    <div class="card card-search">
        <div class="row g-0">

            <div class="col-md-4 d-flex align-items-center justify-content-center card-img-div">
                @foreach ($product->images as $image)
                    @if ($image->box === 1)
                        <img src="{{asset($image->location)}}" class="img-fluid card-img rounded-start p-2">
                    @endif
                @endforeach
            </div>

            <div class="col-md-8">
                <div class="card-body d-flex flex-column">

                    <h5 class="card-title text-center text-md-start">{{$product->name}}</h5>
                    <p class="card-text d-none d-md-block">{{$product->description}}</p>
                    <p class="card-text text-muted">
                        @foreach ($product->categories as $category)
                        {{$category->name}}
                        @endforeach
                    </p>
                    <div class="mt-auto">
                       @if ($product->price_discount)
                            <strong class="px-3"><del class="text-muted pe-2">€{{$product->price}}</del></strong>
                            <strong class="">€{{$product->price_discount}}</strong>
                        @else
                            <strong class="px-3">€{{$product->price}}</strong>
                        @endif
                    </div>

                </div>
            </div>

        </div>
    </div>
    </a>

@endforeach


@push('scripts')
    <script>
        // resizes div in the card to make sure the img doesnt stick out
        $(window).on( 'resize', function () {
            $('.card-img-div').each(function(){
                $(this).height( $(this).width() / 1.5);
            }); 
        }).resize();
    </script>
@endpush