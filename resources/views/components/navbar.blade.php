<nav class="navbar navbar-expand-lg navbar-light bg-white shadow fixed-top">
    <div class="container">
      <a class="navbar-brand {{ Route::currentRouteName() == 'homepage' ? 'active' : '' }}" href="{{route('homepage')}}">B&Y</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item {{ Route::currentRouteName() == 'homepage' ? 'active' : '' }}" aria-current="active">
            <a class="nav-link" href="{{Route('homepage')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Route::currentRouteName() == 'product.index' ? 'active' : '' }}" href="{{route('product.index')}}">Le Offerte</a>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link" href="#">Dicono di noi</a>
          </li> --}}
          <li class="nav-item">
            @guest
            <a class="nav-link {{ Route::currentRouteName() == 'login' ? 'active' : '' }}" href="{{route('login')}}">Login</a>   
            @endguest
            @auth
            <li class="nav-item">
              <a class="nav-link {{ Route::currentRouteName() == 'product.create' ? 'active' : '' }}" href="{{route('product.create')}}">Crea Offerta</a>
            </li>
            <form action="{{route('logout')}}" method="POST"> @csrf <button type="submit" class="nav-link">Logout</button></form>
            @endauth
          </li>
        </ul>
      </div>
    </div>
  </nav>