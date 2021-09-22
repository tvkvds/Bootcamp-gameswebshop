 
<div>

  <h1>{{$category->name}}</h1>
  @foreach ($category->products as $product)
    <ul>
        <li>{{$product->name}}</li>
        <li>{{$product->description}}</li>
        @foreach ($product->images as $image)
        <li><img width="150" src="{{$image->location}}"></li>
        @endforeach
        <li>{{$product->price}}</li>
        <li>{{$product->stock}}</li>
        <li>{{$product->publisher}}</li>
        <li>{{$product->release_date}}</li>
    </ul>
  @endforeach

</div>

        
   