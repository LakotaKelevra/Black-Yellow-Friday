<a href="{{route('product.show', $item->id)}}">
  <div class="card text-center m-3" >
    {{-- @dd($item->image) --}}
    <img src="{{Storage::url($item->image)}}" class="card-img-top" alt="{{$item->name}}">
    <div class="card-body product-card">
      <h2>{{$item->name}}</h2>
      {{-- <p class="card-text">{{$item->description}}</p> --}}
      <h5 class="text-decoration-line-through  d-flex justify-content-end">€{{$item->price}}</h5>
      <h2 class="d-flex justify-content-end">€{{$item->final_price}}</h2>
    </div>
  </div>
</a>