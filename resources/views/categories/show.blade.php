 
<div>

    <h1>{{$category->name}}</h1>

    <div>
        <ul>
            @foreach ($category->products as $product )
                <li>{{$product->name}}</li>
            @endforeach
        </ul>
    </div>

</div>

        
   