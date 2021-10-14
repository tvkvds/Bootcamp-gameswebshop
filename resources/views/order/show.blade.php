{{$order->id}}
{{$order->status}}
{{$order->created_at}}
@foreach ($order->products as $product)
    {{$product->name}}
@endforeach

{{$order->user_id}}