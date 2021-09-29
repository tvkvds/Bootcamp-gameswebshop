<div>
    <br>
    <h3>Title:  {{$product->name}}</h3>
    
    <ul>
        <h6>About:</h6>
        <li>{{$product->description}}</li>
        <li>Price: {{$product->price}}</li>
        <li>Publisher: {{$product->publisher}}</li>
        <li>Released: {{$product->release_date}}</li>
    </ul>

    @foreach ($product->images as $image)
        <img width="150" src="{{asset($image->location)}}">
    @endforeach

    @foreach ($product->ratings as $rating)
        <div>
        <h4>{{$rating->rating}}</h4>
        <p>{{$rating->review}}</p>
        </div>
    @endforeach

    <ul>
    @foreach ($product->categories as $category)
    <a href="/categories/{{$category->slug}}">
    <li>{{$category->name}}</li>
    </a>
    @endforeach
    </ul>
    
    
    
    <br>
</div>