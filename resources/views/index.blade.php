<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

    <title>Estore</title>
    <link rel="stylesheet" href="style.css">
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

    <x-header />

    <!--/ Header -->

    <!-- Banner -->

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
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
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
                                    <div class="add-btn">Add to cart</div>
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