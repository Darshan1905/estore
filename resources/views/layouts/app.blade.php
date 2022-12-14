<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <!-- <meta name="csrf-token" content="{{ csrf_token() }}"> -->

    <title>Estore</title>
    <link rel="stylesheet" href="style.css">


    <!-- google font -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kanit:ital@1&display=swap" rel="stylesheet">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-black">
  <div class="container-fluid">
    <a class="navbar-brand" href="/"><img src="/images/header-logo.png" alt="" width=80></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav m-auto mb-lg-0">
      <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="shop">Shop</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="product">Product</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="contact">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="about">About Us</a>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
      <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/cart"><img src="/images/cart-icon.png" alt="" style="width:75%"></a>
        </li>
      @guest
                            @if (Route::has('login'))
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('login') }}">Login</a>
        </li>
        @endif
        @if (Route::has('register'))
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('register') }}">Register</a>
        </li>
        @endif
        
        @else
       
        <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
      </ul>
      
    </div>
  </div>
</nav>

<main class="py-4">
            @yield('content')
        </main>
    
        <x-footer />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>
</html>
