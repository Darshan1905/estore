@extends('layouts.app')

@section('content')

<div id="carouselExampleCaptions" class="carousel carousel-dark slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
            aria-label="Slide 2"></button>

    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="/images/laptop-banner.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption  d-md-block">
                <h1>Making Brands <br> Visible</h1>
                <p>Runs faster. Costs less and never breaks. we like to make things look pretty</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="/images/phone-banner.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-md-block">
                <h1>Your New<br> Superpower</h1>
                <p>The phones that claps back. Fits all your fits</p>
            </div>
        </div>

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>


<div class="container-fluid text-start">
    <div class="row g-0">
        <div class="col-lg-3 col-md-6"><img src="/images/earbud.avif" alt="" style="width:100%"></div>
        <div class="col-lg-3 col-md-6">
            <div class="ps-3">
                <h3 class="mt-4">EARBUDS</h3>
                <h6>Best in class driver & chipset for deep bass and PRO audio.</h6>
                <div class="btn btn-dark text-white">Shop Now</div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6"><img src="/images/samsung.avif" alt="" style="width:100%"></div>
        <div class="col-lg-3 col-md-6">
            <div class="ps-3">
                <h3 class="mt-4">GALAXY S22 ULTRA</h3>
                <h6>Our smoothest scrolling screen with Super Smooth 120 Hz</h6>
                <div class="btn btn-dark text-white">Shop Now</div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="ps-3">
                <h3 class="mt-4">BEATS SOLO</h3>
                <h6>Elevate Your Music. Buy the Beats By Dre urBeats Wired In-Ear Headphone</h6>
                <div class="btn btn-dark text-white">Shop Now</div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6"><img src="/images/beats-headphone.avif" alt="" style="width:100%"></div>
        <div class="col-lg-3 col-md-6">
            <div class="ps-3">
                <h3 class="mt-4">SMART WATCH</h3>
                <h6>The World's First Smart Band With Body Temperature</h6>
                <div class="btn btn-dark text-white">Shop Now</div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6"><img src="/images/smartwatch.avif" alt="" style="width:100%"></div>
    </div>
</div>

<hr class="mt-5">
<hr>
<hr class="mb-5">

<div class="container product-menu">
    <ul class="nav nav-pills justify-content-center mb-3" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
                type="button" role="tab" aria-controls="pills-home" aria-selected="true">Phones</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile"
                type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Laptops</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact"
                type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Accessories</button>
        </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <div class="container">
                <div class="row">
                    @foreach($data as $kirit)

                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <a href="detail/{{$kirit['id']}}">
                            <div class="card mt-5">
                                <img src="{{Storage::url($kirit->image)}}" alt="" style="width:100%">
                                <li><b>Name:-</b> {{$kirit['name']}}</li>
                                <li><b>Company:-</b> {{$kirit['artist']}}</li>
                                <li><b>Price:-</b> {{$kirit['price']}}</li>
                                <li>
                                    <form action="/add_to_cart" method="POST">
                                        <input type="hidden" name="product_id" value="{{$kirit['id']}}">
                                        @csrf
                                        <button class="add-btn">Add to cart</button>
                                    </form>

                                </li>

                            </div>
                        </a>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
            <div class="container">
                <div class="row">
                    @foreach($data as $kirit)

                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="card mt-5">
                            <img src="{{Storage::url($kirit->image)}}" alt="" style="width:100%">
                            <li><b>Name:-</b> {{$kirit['name']}}</li>
                            <li><b>Company:-</b> {{$kirit['artist']}}</li>
                            <li><b>Price:-</b> {{$kirit['price']}}</li>
                            <li>
                                <div class="add-btn">Add to cart</div>
                            </li>

                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
            <div class="container">
                <div class="row">
                    @foreach($data as $kirit)

                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="card mt-5">
                            <img src="{{Storage::url($kirit->image)}}" alt="" style="width:100%">
                            <li><b>Name:-</b> {{$kirit['name']}}</li>
                            <li><b>Company:-</b> {{$kirit['artist']}}</li>
                            <li><b>Price:-</b> {{$kirit['price']}}</li>
                            <li>
                                <div class="">Add to cart</div>
                            </li>

                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>


<hr class="mt-5">
<hr>
<hr class="mb-5">


<div class="container text-center">
    <h2>Browse with Ease <br> Shop with Confidence</h2>
    <div class="row mt-5">
        <div class="col-lg-4">
            <div class="mb-3">
                <img src="/images/delivery.gif" alt="" style="width:15%">
            </div>
            <h4>Free Shipping</h4>
            <h6>Avail Free & Safe shipping in serviceable pin codes. Check before you place on order</h6>
        </div>
        <div class="col-lg-4">
            <div class="mb-3">
                <img src="/images/payment.gif" alt="" style="width:15%">
            </div>
            <h4>Secure Payment</h4>
            <h6>Avail Free & Safe shipping in serviceable pin codes. Check before you place on order</h6>
        </div>
        <div class="col-lg-4">
            <div class="mb-3">
                <img src="/images/hot-price.gif" alt="" style="width:15%">
            </div>
            <h4>Exclusive Offers</h4>
            <h6>Now enjoy the benefits of JL exclusive offers. Subscribe JL .com to remain updated on latest offers
            </h6>
        </div>
    </div>
</div>

@endsection