<div class="row">

    Rating: {{$product->ratings_avg[0]}}  
    @for ($i = 0; $i < $product->ratings_avg[0]; $i++) 
        ★
    @endfor
    by {{$product->ratings_count}} customers

    <!-- REVIEW -->
    @foreach ($product->ratings as $rating)

        <div class="col-12">

            <div class="mx-3">
                <span class="stars stars-{{$rating->rating}}">
                    @for ($i = 0; $i < $rating->rating; $i++) 
                        ★
                    @endfor
                </span>
            </div>

            <div class="mx-3">
                <h6>reviewed by: {{$rating->user_id}}</h6>
            </div>

            <div class="mx-3">
                <p>
                    {{$rating->review}}
                </p>
            </div>

            <hr>

        </div>

    @endforeach
</div>