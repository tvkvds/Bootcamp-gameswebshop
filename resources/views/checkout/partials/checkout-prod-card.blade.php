<li class="list-group-item">
    <div class="row align-items-center">
        <div class="col-4 checkout-img-div text-center align-text-center">
            <a href="">
                <img class="img-fluid checkout-img" src="https://www.liveabout.com/thmb/Nvi2qTRdhM6gNNTOptxr6HMqB10=/1250x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/halo-combat-evolved-game-57900ff03df78c09e9a2071e.jpg" alt="prod img">
            </a>
        </div>
        <div class="col">
            <p class="mb-4">
                <a class="text-body" href="">Halo combat evolved</a> <br>
                <span class="text-muted">€60.00</span>
            </p>
        <div class="text-muted">
            Amount: 1 <br>
            Discount: None
        </div>
    </div>
</li>
<li class="list-group-item">
    <div class="row align-items-center">
        <div class="col-4 checkout-img-div text-center align-text-center">
            <a href="">
                <img class="img-fluid checkout-img" src="https://i.redd.it/wiu3sxnjxwy51.jpg" alt="prod img">
            </a>
        </div>
        <div class="col">
            <p class="mb-4">
                <a class="text-body" href="">Halo Wombat evolved</a> <br>
                <span class="text-muted">€60.00</span>
            </p>
        <div class="text-muted">
            Amount: 1 <br>
            Discount: None
        </div>
    </div>
</li>

@push('scripts')
    <script>
        $(window).on( 'resize', function () {
            $('.checkout-img-div').height( $('.checkout-img-div').width());
        }).resize();
    </script>
@endpush