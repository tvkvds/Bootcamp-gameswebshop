@extends('layouts.app')

@section('content')
    
    <section class="container my-4">
            <div class="row">       
                @include('.home.partials.home-carousel')
            </div>
            <div class="row mt-5">
                <div class="col-1">
                </div>
                <div class="col-10">
                    <!-- SALES/ SPECIAL OFFERS / TOP NEW RELEASES / ETC. -->
                    <h6>
                        Bestsellers
                    </h6>
                    <hr class="my-3">
                    <div class="row">
                        @include('.home.partials.home-card')
                    </div>
                </div>
                <div class="col-1">
                </div>
            </div>
        </section>

@endsection
