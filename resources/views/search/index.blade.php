<form class="mt-2" method="get" action="/search">
    @csrf
    <div  class="form-group">
        <div class="input-group mb-3">
            <input type="text" value="{{request('search')}}" class="form-control form-control-lg" name="search" placeholder="search...">
            <button type="submit" class="input-group-text btn-success"><i class="bi bi-search me-2"></i> Search</button>
        </div>
    </div>
</form>

@foreach ($products as $product)
<div class="m-4">
<h6>{{$product->name}} - {{$product->id}}</h6>

</div>
@endforeach