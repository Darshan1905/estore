<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

    <title>Estore</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link href="{{ asset('/style.css') }}" rel="stylesheet"> 

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- google font -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital@1&display=swap" rel="stylesheet">
</head>

<body>

    <!-- Header -->

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


    <!--/ Header -->

    <!-- Banner -->

   

    <div class="container">
    
    <h2 class="text-center mt-5 mb-5">Cart</h2>
<div class="table-responsive">
    <table class="table border-dark"  >
 
        <tbody>
@foreach($cartdata as $kirit)

            <tr style="border-top-width: 1px;">
                <td><img src="{{Storage::url($kirit->image)}}" alt="" style="width:150px">
                </td>
                <td>{{$kirit->name}}<br>
                {{$kirit->artist}}
                </td>
                <td>Quantity: 1</td>

                <td>Rs. {{$kirit->price}}</td>
                <td><a href="/removeitem/{{$kirit->cart_id}}" class="btn btn-danger">Delete</a></td>
               
            </tr>
@endforeach

        </tbody>
    </table>
</div>

<a class="btn btn-success" href="/ordernow">Order Now</a>
<br><br>
<a class="btn btn-primary" href="/">Continue Shopping</a>

</div>

    

  


    <!-- Footer -->

    <x-footer />
    <!-- Footer -->



    <!-- All Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>

</html>