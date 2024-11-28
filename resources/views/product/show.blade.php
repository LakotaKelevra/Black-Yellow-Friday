<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center my-4">{{$product->name}}</h1>
                <img src="{{Storage::url($product->image)}}" alt="{{$product->name}}" class="img-fluid">
                <div class="border border-2 border-dark rounded-2 p-3 my-3">
                    <h3 class="lead mb-3">{{$product->name}}</h3>
                    <p class="mb-5">{{$product->description}}</p>
                    <h5 class="text-decoration-line-through text-end">€{{$product->price}}</h5>
                    <h2 class="fw-bold text-end">€{{$product->final_price}}</h2>
                </div>
                <button class="btn btn-yellow ms-auto d-flex">Acquista</button>
            </div>
        </div>
        <div class="row  my-5">
            <div class="col-12 text-end">
                <h3 class="text-center mb-4">Recensioni</h3>
                <a class="btn btn-yellow mb-3 me-0" href="{{route('review.create', ['product' => $product])}}">
                    Aggiungi una recensione
                </a>
            </div>
                @foreach ($reviews as $review)
                <div class="col-12 mb-3">

                    <x-review-card :review="$review"/>
                </div>
                @endforeach
        </div>
    </div>
</x-layout>