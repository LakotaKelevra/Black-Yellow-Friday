<x-layout>
    <x-hero/>
    
    <div class="container">
        {{-- OFFERTE --}}
        <div class="row mt-4 justify-content-around">
            <h2 class="my-2 text-center">Offerte da non perdere!</h2>
            @foreach ($products as $item)
            <div class="col-12 col-md-4">
                <x-product-card :item="$item"/>
            </div>
            @endforeach
            
            {{-- RECENSIONI --}}
            
        </div>
    </div>
</x-layout>