<nav class="navbar navbar-expand-lg navbar-light bg-white shadow fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">B&Y</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{Route('homepage')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Le Offerte</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Dicono di noi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contatti</a>
          </li>
          <li class="nav-item">
            @guest
            <a class="nav-link" href="{{route('login')}}">Login</a>   
            @endguest
            @auth
            <a class="nav-link" href="{{route('logout')}}">Logout</a>
            @endauth
          </li>
        </ul>
      </div>
    </div>
  </nav>