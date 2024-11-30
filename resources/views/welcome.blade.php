<x-layout>
    <x-hero/>
    
    <div class="container">
        {{-- OFFERTE --}}
        <div class="row mt-4 justify-content-around">
            <h2 class="my-2 text-center">Offerte da non perdere!</h2>
            @foreach ($products as $item)
            <div class="col-6 col-lg-4">
                <x-product-card :item="$item"/>
            </div>
            @endforeach
        </div>
            
            {{-- RECENSIONI --}}
            <div class="row my-4 justify-content-around">
                <h2 class="my-5 text-center">Clienti soddisfatti</h2>
                @foreach ($reviews as $review)
                <div class="col-6 col-lg-3 gap-1 mb-3 text-center">
                    <x-review-card :review="$review"/>
                </div>
                @endforeach
            </div>
    </div>
</x-layout>