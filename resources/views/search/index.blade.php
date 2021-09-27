<!-- search products -->
<form class="mt-2" method="get" action="/search">
    @csrf
    <div  class="form-group">
        <div class="input-group mb-3">
            <input type="text" value="{{request('search')}}" class="form-control form-control-lg" name="search" placeholder="search...">
            <button type="submit" class="input-group-text btn-success"><i class="bi bi-search me-2"></i> Search</button>
        </div>
    </div>
</form>


<!-- show products -->
@foreach ($products as $product)
    <a href="/products/{{$product->slug}}">
    <div class="m-4">
        <h1>{{$product->name}}</h1>
        <span>Price: {{$product->price}}</span>   <span>Available: {{$product->stock}}</span>
        <br>
            @foreach ($product->images as $image)
                @if ($image->box === 0)
                    <img width="150" src="{{asset($image->location)}}">
                @endif
            @endforeach
            <br>
            Categories: 
            @foreach ($product->categories as $category)
                {{$category->name}}
            @endforeach

            <span> Rating: {{$product->ratings_avg[0]}} Rated {{$product->ratings_count}} times</span>

    </div>
    </a>
@endforeach

<!-- additional filters form -->
<form class="mt-2" method="get" action="/search">
    @csrf
    <div  class="form-group">

        <div class="input-group mb-3">
            <input type="hidden" value="{{request('search')}}" class="form-control form-control-lg" name="search" placeholder="search...">    
        </div>

        @foreach ($categories as $category)
        <input type="checkbox" id="filter_{{$category->id}}" name="categories_filter[{{$category->slug}}]" value="{{$category->id}}">
        <label for="{{$category->slug}}">{{$category->slug}}</label><br>
        @endforeach

        <div class="input-group mb-3">
            <button type="submit" class="input-group-text btn-success"><i class="bi bi-search me-2"></i> Search</button>
        </div>

    </div>

</form>