<?phpdd($categories)?>

@foreach ($categories as $category )
    <div>
    <h1>{{$category->name}}</h1>
    <div>
    {{$category->products}}
    </div>
    </div>
@endforeach