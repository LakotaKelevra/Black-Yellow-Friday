<x-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 auth-form">
                {{-- <x-flash/> --}}
                <p>Ciao {{Auth::user()->name}}</p>   
                
                <form action="{{route('review.store', ['product_id' => $product])}}" method="POST">
                    @csrf       

                    <div class="mb-3">

                    <input type="hidden" name="user_id" id="user_id" value="{{Auth::user()->id}}">
                    <input type="hidden" name="product_id" id="product_id" value="{{$product}}">
                    
                    <div class="mx-1">
                        <input type="radio" name="rating" value="1" id="star1">
                        <label for="star1"><i class="bi bi-star-fill"></i></label>
                    </div>

                    <div class="mx-1">
                        <input type="radio" name="rating" value="2" id="star2">
                        <label for="star2"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></label>
                    </div>

                    <div class="mx-1">
                        <input type="radio" name="rating" value="3" id="star3">
                        <label for="star3"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></label>

                    </div>
                    <div class="mx-1">
                        <input type="radio" name="rating" value="4" id="star4">
                        <label for="star4"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></label>

                    </div>
                    <div class="mx-1">
                        <input type="radio" name="rating" value="5" id="star5">
                        <label for="star5"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></label>

                    </div>
                </div>

                    <div class="form-floating mb-3">
                        <textarea class="form-control" name="comment" id="comment" cols="30" rows="10" placeholder="Lascia una recensione" >{{old('comment')}}</textarea>
                        <label for="comment">La tua recensione</label>
                    </div>
                    
                    <button type="submit" class="btn btn-yellow mb-3">Invia</button>
                </form>
            </div>
            <div class="col-12 text-end">

                <a class="btn btn-yellow" href="{{route('product.show', ['product' => $product])}}">Torna al prodotto</a>
            </div>
        </div>
    </div>
    
    
</x-layout>