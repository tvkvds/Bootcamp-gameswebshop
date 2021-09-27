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

<?php var_dump(request(['platforms'])) ?>


<!-- show products -->
@foreach ($products as $product)
    
    <div class="m-4">
    <a href="/products/{{$product->slug}}">
        <h1>{{$product->name}}</h1>
       
            @foreach ($product->images as $image)
                @if ($image->box === 0)
                    <img width="150" src="{{asset($image->location)}}">
                @endif
            @endforeach
            </a>
            <br>
             <span>Price: {{$product->price}}</span>   <span>Available: {{$product->stock}}</span>
       
            <br>
            Categories: 
            @foreach ($product->categories as $category)
                {{$category->name}}
            @endforeach
            <br>
            Platforms: 
            @foreach ($product->platforms as $platform)
                {{$platform->platform}}
            @endforeach

           

    </div>
    
@endforeach

<!-- additional filters form -->
<form class="mt-2" method="get" action="/search">
    @csrf
    <div  class="form-group">

        <div class="input-group mb-3">
            <input type="hidden" value="{{request('search')}}" class="form-control form-control-lg" name="search" placeholder="search...">    
        </div>


<h3> Categories </h3>
        @foreach ($categories as $category)
        <input type="checkbox" id="filter_{{$category->id}}" name="categories[{{$category->slug}}]" value="{{$category->id}}">
        <label for="{{$category->slug}}">{{$category->slug}}</label><br>
        @endforeach

<h3> Platforms </h3>

        @foreach ($platforms as $platform)
        <input type="checkbox" id="filter_{{$platform->id}}" name="platforms[{{$platform->platform}}]" value="{{$platform->id}}">
        <label for="{{$platform->platform}}">{{$platform->platform}}</label><br>
        @endforeach

        <div class="input-group mb-3">
            <button type="submit" class="input-group-text btn-success"><i class="bi bi-search me-2"></i> Search</button>
        </div>

    </div>

</form>