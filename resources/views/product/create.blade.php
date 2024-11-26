<x-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 auth-form">
                {{-- <x-flash/> --}}
                
                <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf                   
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="name" placeholder="Il tuo nome" name="name" value="{{old('name')}}">
                        <label for="name">Nome</label>
                    </div>                   
                    <div class="form-floating mb-3">
                        <textarea class="form-control" name="description" id="description" cols="30" rows="10">{{old('description')}}</textarea>
                        <label for="description">Aggiungi descrizione</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control w-50" id="price" placeholder="Inserisci un prezzo" name="price" value="{{old('price')}}">
                        <label for="price">Prezzo</label>
                    </div> 
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control w-50" id="stock" placeholder="Inserisci il numero di pezzi disponibili" name="stock" value="{{old('stock')}}">
                        <label for="stock">Pezzi</label>
                    </div> 
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control w-50" id="discount" placeholder="Inserisci lo sconto" name="discount" value="{{old('discount')}}">
                        <label for="discount">Sconto (%)</label>
                    </div> 
                    <input type="file" class="form-control mb-3" id="image" name="image">


                    <button type="submit" class="btn btn-yellow mb-3">Invia</button>
                </form>
               
            </div>
        </div>
    </div>
    
    
</x-layout>