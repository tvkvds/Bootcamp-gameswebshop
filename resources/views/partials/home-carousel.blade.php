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
        <div class="carousel-item active">
            <a href="">
                <div class="row">
                    <div class="carousel-main-div col-12 col-md-8 d-flex align-items-center justify-content-center">
                        <img class="img-fluid carousel-main-img" src="https://www.liveabout.com/thmb/Nvi2qTRdhM6gNNTOptxr6HMqB10=/1250x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/halo-combat-evolved-game-57900ff03df78c09e9a2071e.jpg" alt="carousel img">
                    </div>
                    <div class="d-none d-md-block col-md-4 carousel-sec-div">
                        <div class="row carousel-sec-row carousel-sec-row-1">
                            <div class="carousel-sec-img-div carousel-sec-img-div-1 d-flex align-items-center justify-content-center">
                                <img class="img-fluid carousel-sec-img img1" src="https://cdn.cloudflare.steamstatic.com/steam/apps/1064221/ss_237c21c0824571f17ea6e286bfed88e83b0d1ac0.1920x1080.jpg?t=1589213788" alt="">
                            </div>
                        </div>
                        <div class="row carousel-sec-row carousel-sec-row-2">
                            <div class="carousel-sec-img-div carousel-sec-img-div-2 d-flex align-items-center justify-content-center">
                                <img class="img-fluid carousel-sec-img img2" src="https://cdn.cloudflare.steamstatic.com/steam/apps/1064221/ss_1df66dab41f25a49786f7e4c4555ee5f42dce35e.1920x1080.jpg?t=1589213788" alt="">
                            </div>
                        </div>
                        <div class="row carousel-sec-row carousel-sec-row-3">
                            <div class="carousel-sec-img-div carousel-sec-img-div-3 d-flex align-items-center justify-content-center">
                                <img class="img-fluid carousel-sec-img img3" src="https://cdn.cloudflare.steamstatic.com/steam/apps/1064221/ss_1e9953b94826bb4ad96bec1bfa581dab6a0a9832.1920x1080.jpg?t=1589213788" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="carousel-item">
            <a href="">
                <div class="row">
                    <div class="carousel-main-div col-12 col-md-8 d-flex align-items-center justify-content-center">
                        <img class="img-fluid carousel-main-img" src="https://i.redd.it/wiu3sxnjxwy51.jpg" alt="carousel img">
                    </div>
                    <div class="d-none d-md-block col-md-4 carousel-sec-div">
                        <div class="row carousel-sec-row carousel-sec-row-1">
                            <div class="carousel-sec-img-div carousel-sec-img-div-1 d-flex align-items-center justify-content-center">
                                <img class="img-fluid carousel-sec-img img1" src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/bd/Vombatus_ursinus_-Maria_Island_National_Park_Edit_2.jpg/1280px-Vombatus_ursinus_-Maria_Island_National_Park_Edit_2.jpg" alt="">
                            </div>
                        </div>
                        <div class="row carousel-sec-row carousel-sec-row-2">
                            <div class="carousel-sec-img-div carousel-sec-img-div-2 d-flex align-items-center justify-content-center">
                                <img class="img-fluid carousel-sec-img img2" src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/ee/Vombatus_ursinus_-Tasmania%2C_Australia_-front-8.jpg/1024px-Vombatus_ursinus_-Tasmania%2C_Australia_-front-8.jpg" alt="">
                            </div>
                        </div>
                        <div class="row carousel-sec-row carousel-sec-row-3">
                            <div class="carousel-sec-img-div carousel-sec-img-div-3 d-flex align-items-center justify-content-center">
                                <img class="img-fluid carousel-sec-img img3" src="https://scitechdaily.com/images/Cubic-Wombat-Poop.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
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
        //REEEEEEEEEEE
        $(window).on( 'resize', function () {
            $('.carousel-main-div').height( $('.carousel-main-div').width() / 1.5);
            $('.carousel-sec-div').height($('.carousel-main-div').height());

    
            var ratioOne     = $('.active .img1').height() / $('.active .img1').width();
            var ratioTwo        = $('.active .img2').height() / $('.active .img2').width();
            var ratioThree      = $('.active .img3').height() / $('.active .img3').width();
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
        
            /* $('.carousel-sec-row').height($('.carousel-sec-div').height() / 3);
            $('.carousel-sec-img-div').height($('.carousel-sec-row').height()); */
        }).resize();

        $('.carousel-control-prev, .carousel-control-next').on('click',  function () {
            $('.carousel-main-div').height( $('.carousel-main-div').width() / 1.5);
            $('.carousel-sec-div').height($('.carousel-main-div').height());

            
            var ratioOne     = $('.active .img1').height() / $('.active .img1').width();
            var ratioTwo        = $('.active .img2').height() / $('.active .img2').width();
            var ratioThree      = $('.active .img3').height() / $('.active .img3').width();
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
        }).resize();
    </script>
@endpush