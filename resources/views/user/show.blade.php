<x-layout>
<div class="container">
    <div class="row justify-content-center">
        <h1 class="text-center my-5">Recensioni di {{ $username }}</h1>
        @foreach ($reviews as $review)
        <div class="col-12 mb-3 me-3">
            <h6><a href="{{route('product.show', ['product' => $review->product])}}">Articolo: {{$review->product->name}}</h6></a>
                <x-review-card :review="$review"/>
            </div>
            @endforeach
    </div>
</div>



</x-layout>