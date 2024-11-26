<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center my-4">{{$product->name}}</h1>
                <img src="{{$product->image}}" alt="{{$product->name}}" class="img-fluid">
                <div class="border border-2 border-dark rounded-2 p-3 my-3">

                    <p>{{$product->description}}</p>
                    <p class="fw-bold">€{{$product->final_price}}</p>
                </div>
                    <button class="btn btn-yellow ">Acquista</button>
        </div>
    </div>
</x-layout>