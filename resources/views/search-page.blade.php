@extends('layouts.app')

@section('content')

    <section class="container my-4">
        <div class="row">
            @include('.partials.search-accordion')
            <!-- PRODUCT CARDS -->
            <div class="col-12 col-md-8">
                 @include('.partials.search-prod-card')
            </div>
        </div>
    </section>
@endsection