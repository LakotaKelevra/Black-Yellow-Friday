<x-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 auth-form">
                <form action="{{route('register')}}" method="POST">
                    @csrf                   
                    <div class="form-floating mb-3">
                        <input type="name" class="form-control" id="name" placeholder="Il tuo nome" name="name" value="{{old('name')}}">
                        <label for="floatingInput">Email address</label>
                    </div>                   
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email" value="{{old('email')}}">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="Password" placeholder="Password" name="password">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="password_confirmation" placeholder="Conferma Password" name="password_confirmation">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <button type="submit" class="btn btn-yellow mb-3">Registrati</button>
                </form>
                <p  class="text-center">Hai già un account? <a href="{{route('login')}}">Accedi</a></p>
            </div>
        </div>
    </div>
    
    
</x-layout>