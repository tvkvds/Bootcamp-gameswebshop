
@foreach ($products as $product)
    
<a href="/products/{{$product->slug}}">
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
    
    
    
    <br>
</div>
</a>

@endforeach