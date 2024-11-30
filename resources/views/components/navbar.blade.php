<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow fixed-top">
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
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Ciao {{Auth::user()->name}}
              </a>
              <ul class="dropdown-menu mx-2 shadow">
                <li><a class="dropdown-item {{ Route::currentRouteName() == 'product.create' ? 'active' : '' }}" href="{{route('product.create')}}" >Crea offerta</a></li>
                <li><a class="dropdown-item {{ Route::currentRouteName() == 'dashboard' ? 'active' : '' }}" href="{{route('dashboard')}}">Dashboard</a></li>
                <form action="{{route('logout')}}" method="POST"> @csrf <button type="submit" class="dropdown-item">Logout</button></form>
              </ul>
            </li>
            <li class="nav-item pb-0 mb-0">
            <a class="nav-link pb-0 mb-0 {{ Route::currentRouteName() == 'cart' ? 'active' : '' }}" href="{{route('cart')}}"><i class="bi bi-cart2"></i>
            <span class="badge" id="cartBadge" >{{Auth::user()->buyer->products()->count()}}</span>
          </a>
        </li>
        @endauth
      </li>
    </ul>
  </div>
</div>
</nav>
{{-- @dd(Auth::user()->buyer->products()->count()) --}}