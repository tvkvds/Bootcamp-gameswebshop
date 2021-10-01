<div class="row">

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
                <h6>reviewed by: {{$rating->username}}</h6>
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