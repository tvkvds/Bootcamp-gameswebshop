

@foreach ($categories as $category )
    
    <div>

    {{$category->slug}}
    <a href="categories/{{$category->slug}}">
    <h1>{{$category->name}}</h1>
    </a>
    <div>
    <ul>
    @foreach ($category->products as $product )
        @if ($loop->iteration <=5)
            <li>{{$product->name}}</li>
        @endif
    @endforeach
    </ul>
   
        
    </div>
    </div>
@endforeach