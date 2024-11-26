<x-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center mb-5">
                <h1>Tutte le offerte!</h1>
            </div>
            @foreach ($products as $item)
                <div class="col-12 col-md-4">
                    <x-product-card :item="$item"/>
                </div>
            @endforeach

    </div>
</x-layout>