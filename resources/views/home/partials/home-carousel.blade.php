<!-- CAROUSEL -->
<!-- left button -->
<div class="col-1 d-flex align-items-center justify-content-center">
    <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
</div>

<!-- CAROUSEL ITEMS -->
<div id="carousel" class="carousel slide col-10" data-bs-ride="carousel" data-bs-interval="false">
    <div class="carousel-inner">

        @foreach ($productsCarousel as $key => $product)
            {{-- TODO:   figure out a way to make active for the product that's supposed to be shown --}}
            <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">

                <a href="/products/{{$product->slug}}">
                <div class="row">

                        {{-- box image --}}
                        @foreach ($product->images as $image)

                            @if ($image->box === 1)
                                <div class="carousel-main-div col-12 col-md-8 d-flex align-items-center justify-content-center">
                                    <img class="img-fluid carousel-main-img" src="{{asset($image->location)}}" alt="{{asset($image->alt)}}">
                                </div>
                            @endif
                            
                        @endforeach
                        
                        {{-- gameplay images --}}
                        <div class="d-none d-md-block col-md-4 carousel-sec-div">

                            @foreach ($product->images as $image)
                                @if ($image->box === 0)

                                    <div class="row carousel-sec-row carousel-sec-row-{{$loop->index}}">
                                        <div class="carousel-sec-img-div carousel-sec-img-div-{{$loop->index}} d-flex align-items-center justify-content-center">
                                            <img class="img-fluid carousel-sec-img img{{$loop->index}}" src="{{asset($image->location)}}" alt="{{$image->alt}}">
                                        </div>
                                    </div>
                                    
                                @endif
                            @endforeach

                        </div>
                </div> 
                </a>

            </div>
        @endforeach
     
    </div>        
</div>

<!-- right button -->
<div class="col-1 d-flex align-items-center justify-content-center">
    <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>

@push('scripts')
    <script>
        $(document).ready( function(){
            $('.carousel-main-div').height( $('.active .carousel-main-div').width() / 1.5);
            $('.carousel-sec-div').height($('.carousel-main-div').height());
            var ratioOne        = $('.active .img1').prop('naturalHeight') / $('.active .img1').prop('naturalWidth');
            var ratioTwo        = $('.active .img2').prop('naturalHeight') / $('.active .img2').prop('naturalWidth');
            var ratioThree      = $('.active .img3').prop('naturalHeight') / $('.active .img3').prop('naturalWidth');
            var ratioSum        = ratioOne + ratioTwo + ratioThree;
            var percentageOne   = (1 / ratioSum) * ratioOne;
            var percentageTwo   = (1 / ratioSum) * ratioTwo;
            var percentageThree = (1 / ratioSum) * ratioThree;
            $('.carousel-sec-row-1').height($('.carousel-sec-div').height() * percentageOne);
            $('.carousel-sec-row-2').height($('.carousel-sec-div').height() * percentageTwo);
            $('.carousel-sec-row-3').height($('.carousel-sec-div').height() * percentageThree);
            $('.carousel-sec-img-div-1').height($('.carousel-sec-row-1').height());
            $('.carousel-sec-img-div-2').height($('.carousel-sec-row-2').height());
            $('.carousel-sec-img-div-3').height($('.carousel-sec-row-3').height()); 
        });

        $(window).on( 'resize', function () {
            $('.carousel-main-div').height( $('.active .carousel-main-div').width() / 1.5);
            $('.carousel-sec-div').height($('.carousel-main-div').height());
            var ratioOne        = $('.active .img1').prop('naturalHeight') / $('.active .img1').prop('naturalWidth');
            var ratioTwo        = $('.active .img2').prop('naturalHeight') / $('.active .img2').prop('naturalWidth');
            var ratioThree      = $('.active .img3').prop('naturalHeight') / $('.active .img3').prop('naturalWidth');
            var ratioSum        = ratioOne + ratioTwo + ratioThree;
            var percentageOne   = (1 / ratioSum) * ratioOne;
            var percentageTwo   = (1 / ratioSum) * ratioTwo;
            var percentageThree = (1 / ratioSum) * ratioThree;
            $('.carousel-sec-row-1').height($('.carousel-sec-div').height() * percentageOne);
            $('.carousel-sec-row-2').height($('.carousel-sec-div').height() * percentageTwo);
            $('.carousel-sec-row-3').height($('.carousel-sec-div').height() * percentageThree);
            $('.carousel-sec-img-div-1').height($('.carousel-sec-row-1').height());
            $('.carousel-sec-img-div-2').height($('.carousel-sec-row-2').height());
            $('.carousel-sec-img-div-3').height($('.carousel-sec-row-3').height()); 
        });

        $('#carousel').on('slid.bs.carousel', function() {
            $('.active .carousel-main-div').height( $('.active .carousel-main-div').width() / 1.5);
            $('.active .carousel-sec-div').height($('.active .carousel-main-div').height());
            var ratioOne        = $('.active .img1').prop('naturalHeight') / $('.active .img1').prop('naturalWidth');
            var ratioTwo        = $('.active .img2').prop('naturalHeight') / $('.active .img2').prop('naturalWidth');
            var ratioThree      = $('.active .img3').prop('naturalHeight') / $('.active .img3').prop('naturalWidth');
            var ratioSum        = ratioOne + ratioTwo + ratioThree;
            console.log("$('.img1').height()");
            var percentageOne   = (1 / ratioSum) * ratioOne;
            var percentageTwo   = (1 / ratioSum) * ratioTwo;
            var percentageThree = (1 / ratioSum) * ratioThree;
            $('.active .carousel-sec-row-1').height($('.active .carousel-sec-div').height() * percentageOne);
            $('.active .carousel-sec-row-2').height($('.active .carousel-sec-div').height() * percentageTwo);
            $('.active .carousel-sec-row-3').height($('.active .carousel-sec-div').height() * percentageThree);
            $('.active .carousel-sec-img-div-1').height($('.active .carousel-sec-row-1').height());
            $('.active .carousel-sec-img-div-2').height($('.active .carousel-sec-row-2').height());
            $('.active .carousel-sec-img-div-3').height($('.active .carousel-sec-row-3').height()); 
        });

    </script>
@endpush