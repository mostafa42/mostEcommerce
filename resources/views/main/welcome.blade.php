<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>Laravel</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- style css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <!-- fevicon -->
    <link rel="icon" href="{{ asset('images/fevicon.png') }}" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/jquery.mCustomScrollbar.min.css') }}">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
</head>

<body>
    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo">
                                    <a href="index.html"><img src="images/logo.png" alt="#" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <nav class="navigation navbar navbar-expand-md navbar-dark ">
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarsExample04">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="{{route('welcome')}}">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="about.html">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="glasses.html">Our Products</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="contact.html">Contact Us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('admin-dashboard')}}">Dashboard</a>
                                    </li>
                                    <li class="nav-item d_none login_btn">
                                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                                    </li>
                                    <li class="nav-item d_none">
                                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                                    </li>
                                    <li class="nav-item d_none sea_icon">
                                        <a class="nav-link" href="#"><i class="fa fa-shopping-bag"
                                                aria-hidden="true"></i><i class="fa fa-search"
                                                aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- end header inner -->
    <!-- end header -->
    <!-- banner -->
    <section class="banner_main">
        <div id="banner1" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#banner1" data-slide-to="0" class="active"></li>
                <li data-target="#banner1" data-slide-to="1"></li>
                <li data-target="#banner1" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="carousel-caption">
                            <div class="text-bg">
                                <h1>Product1</h1>
                                <figure><img src="images/banner_img.png" alt="#" /></figure>
                                <p class="blu">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores
                                    deserunt, unde assumenda porro quia neque minus corporis at, pariatur, nihil modi
                                    rem illo voluptas. Odit, in commodi! Sequi, perspiciatis doloribus?</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="carousel-caption">
                            <div class="text-bg">
                                <h1>Product2</h1>
                                <figure><img src="images/banner_img.png" alt="#" /></figure>
                                <p class="blu">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores
                                    deserunt, unde assumenda porro quia neque minus corporis at, pariatur, nihil modi
                                    rem illo voluptas. Odit, in commodi! Sequi, perspiciatis doloribus?</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="carousel-caption">
                            <div class="text-bg">
                                <h1>Product3</h1>
                                <figure><img src="images/banner_img.png" alt="#" /></figure>
                                <p class="blu">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores
                                    deserunt, unde assumenda porro quia neque minus corporis at, pariatur, nihil modi
                                    rem illo voluptas. Odit, in commodi! Sequi, perspiciatis doloribus?</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#banner1" role="button" data-slide="prev">
                <i class="fa fa-arrow-left" aria-hidden="true"></i>
            </a>
            <a class="carousel-control-next" href="#banner1" role="button" data-slide="next">
                <i class="fa fa-arrow-right" aria-hidden="true"></i>
            </a>
        </div>
    </section>
    <!-- end banner -->
    <!-- about section -->
    <div class="about">
        <div class="container">
            <div class="row d_flex">
                <div class="col-md-5">
                    <div class="about_img">
                        <figure><img src="images/about.jpg" alt="#" /></figure>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="titlepage">
                        <h2>About Our Mall</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, aspernatur. Doloremque
                            tenetur, atque, suscipit nisi numquam exercitationem optio, fuga dicta aliquam temporibus
                            voluptate? Temporibus, vitae pariatur nam vero sed debitis?</p>
                    </div>
                    <a class="read_more" href="#">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- about section -->
    <!-- Our  Glasses section -->
    <div class="glasses">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="titlepage">
                        <h2>Our Products</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labor
                            e et dolore magna aliqua. Ut enim ad minim veniam, qui
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="glasses_box">
                        <figure><img src="images/glass1.png" alt="#" /></figure>
                        <h3><span class="blu">$</span>50</h3>
                        <p>Sunglasses</p>
                    </div>
                </div>
                <div class="col-md-12">
                    <a class="read_more" href="#">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- end Our  Glasses section -->
    <!-- clients section -->
    <div class="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>What say our clients</h2>
                        <p>orem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            la</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div id="myCarousel" class="carousel slide clients_Carousel " data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                            <li data-target="#myCarousel" data-slide-to="3"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="container">
                                    <div class="carousel-caption ">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="clients_box">
                                                    <figure><img src="images/our.png" alt="#" /></figure>
                                                    <h3>Sandy Mark</h3>
                                                    <p>It is a long established fact that a reader will be distracted by
                                                        the readable content of a page when looking at its layout. The
                                                        point of using Lorem Ipsum is that it has a more-or-less normal
                                                        distribution of letters,It is a long established fact a
                                                        more-or-less normal distribution of letters,</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="container">
                                    <div class="carousel-caption">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="clients_box">
                                                    <figure><img src="images/our.png" alt="#" /></figure>
                                                    <h3>Sandy Mark</h3>
                                                    <p>It is a long established fact that a reader will be distracted by
                                                        the readable content of a page when looking at its layout. The
                                                        point of using Lorem Ipsum is that it has a more-or-less normal
                                                        distribution of letters,It is a long established fact a
                                                        more-or-less normal distribution of letters,</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="container">
                                    <div class="carousel-caption">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="clients_box">
                                                    <figure><img src="images/our.png" alt="#" /></figure>
                                                    <h3>Sandy Mark</h3>
                                                    <p>It is a long established fact that a reader will be distracted by
                                                        the readable content of a page when looking at its layout. The
                                                        point of using Lorem Ipsum is that it has a more-or-less normal
                                                        distribution of letters,It is a long established fact a
                                                        more-or-less normal distribution of letters,</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="container">
                                    <div class="carousel-caption">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="clients_box">
                                                    <figure><img src="images/our.png" alt="#" /></figure>
                                                    <h3>Sandy Mark</h3>
                                                    <p>It is a long established fact that a reader will be distracted by
                                                        the readable content of a page when looking at its layout. The
                                                        point of using Lorem Ipsum is that it has a more-or-less normal
                                                        distribution of letters,It is a long established fact a
                                                        more-or-less normal distribution of letters,</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                            <i class='fa fa-angle-left'></i>
                        </a>
                        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                            <i class='fa fa-angle-right'></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end clients section -->
    <!-- contact section -->
    <!--  footer -->
    <footer>
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <ul class="location_icon">
                            <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i></a><br>
                                Cairo, Egypt</li>
                            <li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i></a><br> +01
                                01121238817</li>
                            <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a><br>
                                mostafagamalsaid475</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <p>© 2022 All Rights Reserved. Design And Developed by<a href="https://www.facebook.com/galal.temoo.7"> MostafaGamal</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->

    <!-- Javascript files-->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/jquery-3.0.0.min.js') }}"></script>
    <!-- sidebar -->
    <script src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script>
        // This example adds a marker to indicate the position of Bondi Beach in Sydney,
        // Australia.
        function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 11,
                center: {
                    lat: 40.645037,
                    lng: -73.880224
                },
            });

            var image = 'images/maps-and-flags.png';
            var beachMarker = new google.maps.Marker({
                position: {
                    lat: 40.645037,
                    lng: -73.880224
                },
                map: map,
                icon: image
            });
        }
    </script>
    <!-- google map js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap">
    </script>
    <!-- end google map js -->
</body>

</html>
