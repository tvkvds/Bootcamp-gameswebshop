

@foreach ($categories as $category )
    
    <div>

    
    <a href="categories/{{$category->slug}}">
    <h1>{{$category->name}}</h1>
    </a>
    <div>
    <ul>
    
    @foreach ($category->products as $product)
       @if ($loop->iteration <= 5)
       
           <h3>{{$product->name}}</h3>
        <li>{{$product->publisher}}</li>
        <li><img width="150" src="{{$product->images[0]->location}}"></li>
        <li>{{$product->price}}</li>
        <li>{{$product->release_date}}</li>
       
       @endif
        
        
    @endforeach
    </ul>

   
   
        
    </div>
    </div>
@endforeach