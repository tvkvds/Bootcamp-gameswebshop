@include('.layouts.partials.shoppingcart-modal')

<!-- NAVABAR -->
<nav class="navbar navbar-expand-lg">
    <div class="container">

        <!-- CENTER ICON AND HAMBURGER ICON FOR COLLAPSE -->
        <a class="navbar-brand d-lg-none" href="">City Games</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navCollapse" aria-controls="navbarClassicCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#fff" class="icon bi bi-list" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
            </svg>
        </button>

        <!-- EXPANDED NAVBAR -->
        <div class="collapse navbar-collapse" id="navCollapse">
            <!-- LEFT SIDE LINKS -->
            <ul class="navbar-nav">
                <li class="nav-item me-4"><a href="/">HOME</a></li>
                <li class="nav-item me-4"><a href="/search">SHOP</a></li>
                <li class="nav-item me-4"><a href="/about">ABOUT</a></li>
            </ul>
            <!-- CENTER CONTENT -->
            <div class="navbar-brand mx-auto d-none d-lg-block">
                <span>C</span>
                <span>I</span>
                <span>T</span>
                <span>Y</span>
                <span>&nbsp;</span>
                <span>G</span>
                <span>A</span>
                <span>M</span>
                <span>E</span>
                <span>S</span>
            </div>
            
            <!-- SEARCH, ACOUNT AND SHOPPING CART ICONS -->
            <ul class="navbar-nav flex-row">
                <li class="search-wrapper col-12 col-lg-3 ">
                    <form class="search" action="/search" method="post">
                     @csrf
                        <input type="search" value="{{request('search')}}" name="search" class="form-control form-control-dark search-input" placeholder="Search..." autocomplete="off">
                        <span class="search-icon text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#fff" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                            </svg>
                        </span>
                    </form>
                </li>
                <li>
                    <a class="nav-link ms-1" href="/account">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#fff" class="icon bi bi-person" viewBox="0 0 16 16">
                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                        </svg>
                    </a>
                </li>
                <li>
                    <a class="nav-link ms-2 sc-btn" data-bs-toggle="modal" href="#modalCart">
                        <span objects-in-cart-data="{{ $cart_amount ?? '0' }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#fff" class="icon bi bi-cart3" viewBox="0 0 16 16">
                            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                            </svg>
                        </span>
                    </a>    
                </li>
            </ul>
        </div>
    </div>
</nav>

@push('scripts')
    <script>
        /* gives animated class on hover */
        $(".navbar-brand").hover(function(){
            $(this).addClass("animated");        
        })
        /* removes animated class after the last letter has turned */
        $(".navbar-brand span:nth-child(10)").on("animationend webkitAnimationEnd oAnimationEnd", function(){
            $(".navbar-brand").removeClass("animated")  
        }) 
        /* shitty hack to make focus within work on a styled svg and some moving divs*/
        $(".search").on("click", function(){
            $(".search-input").focus();
            $(".search-wrapper").animate({width: 200}, 500 );
        })
        $(".search").on("focusout", function(){
            $(".search-wrapper").animate({width: 41}, 500 );
        })
    </script>
@endpush