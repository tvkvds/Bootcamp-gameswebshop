 
<div>

    <h1>{{$category->name}}</h1>

    <div>
        <ul>
            @foreach ($category->products as $product )
                @if ($loop->iteration <= 5)
                    <li>{{$product->name}}</li>
                @endif
            @endforeach

        </ul>
    </div>

</div>

        
   