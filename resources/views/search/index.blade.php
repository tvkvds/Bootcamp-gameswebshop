@extends('layouts.app')

@section('content')

    <section class="container my-4">
        <div class="row">
            @include('.search.partials.search-accordion')
            <!-- PRODUCT CARDS -->
            <div class="col-12 col-md-8">
                <div id="card-loop">
                    @include('.search.partials.search-prod-card')
                </div>    

                <!-- Pagination -->
                @include('.search.partials.search-pagination')
            </div>
        </div>
    </section>
@endsection