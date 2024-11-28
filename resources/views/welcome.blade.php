<x-layout>
    <x-hero/>
    
    <div class="container">
        {{-- OFFERTE --}}
        <div class="row mt-4 justify-content-around">
            <h2 class="my-2 text-center">Offerte da non perdere!</h2>
            @foreach ($products as $item)
            <div class="col-6 col-md-3">
                <x-product-card :item="$item"/>
            </div>
            @endforeach
        </div>
            
            {{-- RECENSIONI --}}
            <div class="row mt-4 justify-content-around">
                <h2 class="my-2 text-center">Clienti soddisfatti</h2>
                @foreach ($products as $item)
                <div class="col-6 col-md-4">
                    <x-product-card :item="$item"/>
                </div>
                @endforeach
            </div>
    </div>
</x-layout>