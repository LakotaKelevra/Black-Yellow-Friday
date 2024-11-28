<x-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center mb-5">
                <h1>Tutte le offerte!</h1>
            </div>
            @foreach ($products as $item)
                <div class="col-6 col-md-3">
                    <x-product-card :item="$item"/>
                </div>
            @endforeach

    </div>
</x-layout>