<x-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6  auth-form">
                <form action="{{route('login')}}" method="POST">
                    @csrf                                    
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email" value="{{old('email')}}">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="Password" placeholder="Password" name="password">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <button type="submit" class="btn btn-yellow mb-3">Accedi</button>
                </form>
                <p class="text-center text-white">Non hai un account? <a href="{{route('register')}}">Registrati</a></p>
            </div>
        </div>
    </div>
    
    
</x-layout>