<!-- PRODUCT CARD -->
<a class="card-link" href="">
    <div class="card">
        <div class="row g-0">
            <div class="col-md-4 d-flex align-items-center justify-content-center card-img-div">
                <img src="https://i.redd.it/wiu3sxnjxwy51.jpg" class="img-fluid card-img rounded-start">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Halo Wombat Evolved</h5>
                    <p class="card-text">pew pew &#62; bla bla </p>
                    <p class="card-text text-muted">Xbox, Action</p>
                    <strong>Price</strong> 
                    <strong>€60.00</strong>
                </div>
            </div>
        </div>
    </div>
</a>
<a class="card-link" href="">
    <div class="card">
        <div class="row g-0">
            <div class="col-md-4 d-flex align-items-center justify-content-center card-img-div">
                <img src="https://www.liveabout.com/thmb/Nvi2qTRdhM6gNNTOptxr6HMqB10=/1250x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/halo-combat-evolved-game-57900ff03df78c09e9a2071e.jpg" class="img-fluid card-img rounded-start">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Halo Combat Evolved</h5>
                    <p class="card-text">pew pew pew &#62; pew pew </p>
                    <p class="card-text text-muted">Xbox, Action</p>
                    <strong>Price:</strong> 
                    <strong>€60.00</strong>
                </div>
            </div>
        </div>
    </div>
</a>

@push('scripts')
    <script>
        // resizes div in the card to make sure the img doesnt stick out
        $(window).on( 'resize', function () {
            $('.card-img-div').height( $('.card-img-div').width() / 1.5);
        }).resize();
    </script>
@endpush