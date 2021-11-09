@extends('layouts.app')

@section('content')

<form action="/test" method="get">
<br>
<input type='text' value="" placeholder="hoi" name="product">
<br>
<br>
<input type='text' value="" placeholder="hoi" name="amount">
<br>
<br>
<button type="submit"> submit </button>

</form>

<br>
<br>
<br>
Product: {{ request('product') ?? ''}}
<br>
Amount: {{ request('amount') ?? ''}}

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif



@endsection