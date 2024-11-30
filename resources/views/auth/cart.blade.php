<x-dashboard>
    <div class="container mb-5 margin-nav">
        <div class="row text-center align-items-center justify-content-center">
            <div class="col-12" class="d-flex ">
                <h2>
                    <span id="saluto"></span>
                    <span>{{Auth::user()->name}}</span>
                </h2>
                <div class="row align-items-start">
                    <div class="col-12 m-3">
                        <x-flash/>
                    </div>
                    <h5 class="text-start text-white mt-5">Il tuo carrello</h5>
                    <div class="col-8 card ms-4">
                        <ul class="px-0 py-2">
                            <li class="list-group-item d-flex justify-content-between py-2 border-bottom fw-bold">
                                <div class="col-2">Qt</div>
                                <div class="col-5">Prodotto</div>
                                <div class="col-3">Prezzo</div>
                                <div class="col-2"></div>
                            </li>
                        @foreach ($products_in_cart as $product)
                            <li class="list-group-item d-flex justify-content-between py-2 border-bottom">
                                <div class="col-2">1 pz</div>
                                <div class="col-5 text-cart"><a href="{{route('product.show', ['product' => $product])}}">{{$product->name}}</a></div>
                                <div class="col-3">{{$product->price - ($product->price * $product->discount / 100)}}</div>
                                <div class="col-2">
                                    <form action="{{route('removeFromCart', compact('product'))}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Sei sicuro?')"><i class="bi bi-x-lg"></i></button>
                                    </form>
                                        
                                </div>
                            </li>
                                @endforeach
                                <li class="list-group-item d-flex justify-content-between pt-3 border-top fw-bold">
                                    <div class="col-2 ">{{$quantity}} pz</div>
                                    <div class="col-5"></div>
                                    <div class="col-3">{{$total}}</div>
                                </li>
                            </ul>
                            <button class="btn btn-yellow mb-3 w-50 align-self-center" onclick="return confirm('Non esageriamo adesso')">Paga</button>
                    </div>
                </div>                
            </div>
        </div>
    </x-dashboard>