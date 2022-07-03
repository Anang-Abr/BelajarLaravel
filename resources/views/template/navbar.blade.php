<nav class="navbar navbar-expand-lg navbar-dark"  style="background-color: #21839a;">
  <div class="container">
    <a class="navbar-brand" href="/">Agate</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('/') ? 'active' : "" }}" aria-current="page" href="/home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('about*') ? 'active' : "" }}" href="/about">About</a>
        </li>
      </ul>
      
    </div>
    @auth
    <div class="d-flex">
      <li class="navbar-nav nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{ Auth::user()->name }}
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="{{ url('cart') }}">Cart</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="{{ url('logout') }}">Log Out</a></li>
          </ul>
        </li>
      {{-- <ul class="navbar-nav d-flex">
        <li><a href="{{ url('cart') }}" class="btn btn-outline-light me-2">Cart</a></li>
        <li><a href="{{ url('logout') }}" class="btn btn-outline-light me-2">Log Out</a></li>
      </ul> --}}
    </div>
    @else
    <div class="d-flex">
      <ul class="navbar-nav d-flex">
        <li><a href="{{ url('login') }}" class="btn btn-outline-light me-2">Login</a></li>
        <li><a href="{{ url('register') }}" class="btn btn-outline-warning">Register</a></li>
      </ul>
    </div>
    @endauth
  </div>
</nav>