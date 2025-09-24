<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Simple Laravel 12 CRUD Application Tutorial - AllPHPTricks.com</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" crossorigin="anonymous">
</head>
<body>   

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="{{ route('home') }}">MeuSite</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar"
      aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="mainNavbar">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('products.*') ? 'active' : '' }}" href="{{ route('products.index') }}">Products</a>
        </li>

        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('motos.*') ? 'active' : '' }}" href="{{ route('motos.index') }}">Motos</a>
        </li>
      </ul>

      <!-- opcional: area de auth (se você implementou login) -->
      <ul class="navbar-nav ms-auto">
        @auth
          <li class="nav-item">
            <form method="POST" action="{{ route('logout') }}">
              @csrf
              <button class="btn btn-outline-secondary btn-sm" type="submit">Logout</button>
            </form>
          </li>
        @else
          <li class="nav-item">
            <a href="{{ route('login') }}" class="btn btn-outline-primary btn-sm me-2">Login</a>
          </li>
          <li class="nav-item">
            <a href="{{ route('register') }}" class="btn btn-primary btn-sm">Register</a>
          </li>
        @endauth
      </ul>
    </div>
  </div>
</nav>


    <div class="container">
            @yield('content')
            <div class="row justify-content-center text-center mt-3">
                <div class="col-md-12">
                </div>
            </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>