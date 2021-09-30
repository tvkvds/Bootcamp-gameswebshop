<!-- PRODUCT CARD -->
@foreach ($products as $product)

    <a class="card-link" href="/products/{{$product->slug}}">
    <div class="card">
        <div class="row g-0">

            <div class="col-md-4 d-flex align-items-center justify-content-center card-img-div">
                @foreach ($product->images as $image)
                    @if ($image->box === 1)
                        <img src="https://i.redd.it/wiu3sxnjxwy51.jpg" class="img-fluid card-img rounded-start">
                    @endif
                @endforeach
            </div>

            <div class="col-md-8">
                <div class="card-body">

                    <h5 class="card-title">{{$product->name}}</h5>
                    <p class="card-text">{{$product->description}}</p>
                    <p class="card-text text-muted">
                        @foreach ($product->categories as $category)
                        {{$category->name}}
                        @endforeach
                    </p>
                    <strong>Price</strong> 
                    <strong>€{{$product->price}}</strong>

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
            $('.card-img-div').height( $('.card-img-div').width() / 1.5);
        }).resize();
    </script>
@endpush