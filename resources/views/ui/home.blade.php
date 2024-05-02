<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HoldU - Mental Health Matters</title>
    {{-- Import Bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    {{-- Import HoldU CSS --}}
    <link rel="stylesheet" href="{{ asset("css/style.css") }}">

    {{-- Import HoldU Mobile CSS --}}
    <link rel="stylesheet" href="{{ asset("css/mobile.css") }}">

    {{-- Preconnect Poppins from Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    {{-- Preconnect Google Icons --}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    {{-- Preloader --}}
    <link rel="stylesheet" href="{{ asset("css/preloader.css") }}">

  </head>

  <body>
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="/"><img class="logo" src="{{ asset("img/white.png") }}" alt=""></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/features">Features</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/pricing">Pricing</a>
              </li>
              @if(auth()->user())
              <li class="nav-item">
                <a class="nav-link" href="/dashboard">Dashboard</a>
              </li>
              @endif
              @if (auth()->user())
              <li class="nav-item">
                <a class="nav-link" href="/logout"><span class="material-symbols-outlined">
                  logout
                  </span></a>
              </li>
              @endif
              <li class="nav-item">
                @if (!auth()->user())
                 <a class="nav-link btn btn-light" href="/login">Login</a>
                @else
                 <a class="nav-link btn btn-light d-flex justify-content-center align-items-center" href="/profile"><span class="material-symbols-outlined pe-2">
                  account_circle
                  </span>{{ auth()->user()->name }}</a>
                @endif
              </li>
            </ul>
          </div>
        </div>
      </nav>
      @yield('content')
      {{-- End Navbar --}}
      @include('ui.preloader')
    <script src="{{ asset("js/preloader.js") }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>