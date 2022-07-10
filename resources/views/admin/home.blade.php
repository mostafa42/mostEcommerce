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
    <section id="sidebar">
        <div class="white-label">
        </div>
        <div id="sidebar-nav">
            <ul>
                <li class="active"><a href="#"><i class="fa fa-dashboard"></i> Statistics</a></li>
                <li><a href="#"><i class="fa fa-shopping-cart"></i> Products</a></li>
                <li><a href="#"><i class="fa fa-users"></i> Users</a></li>
                <li><a href="#"><i class="fa fa-user"></i> Admins</a></li>
                <li><a href="#"><i class="fa fa-building-o"></i> Vendors</a></li>
                <li><a href="#"><i class="fa fa-sign-out"></i> Logout</a></li>
            </ul>
        </div>
    </section>
    <section id="content">
        <div id="header">
            <div class="header-nav">
                <div class="menu-button">
                    <!--<i class="fa fa-navicon"></i>-->
                </div>
                <div class="nav">
                    <ul>
                        <li class="nav-chat">
                            <div class="font-icon"><i class="fa fa-comments-o"></i></div>
                        </li>
                        <li class="nav-profile">
                            <div class="nav-profile-image">
                                <img src="{{ asset('images/mostafa.jpg') }}" alt="profile-img" alt="profile image">
                                <div class="nav-profile-name">Jane Smith</div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="content-header">
                <h1>Statistics</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="widget-box sample-widget">
                <div class="widget-header">
                    <h2>Users</h2>
                    <i class="fa fa-cog"></i>
                </div>
                <div class="widget-content">
                    <h1 style="padding: 20px; text-align: center;">200</h1>
                </div>
            </div>
            <div class="widget-box sample-widget">
                <div class="widget-header">
                    <h2>Products</h2>
                    <i class="fa fa-cog"></i>
                </div>
                <div class="widget-content">
                    <h1 style="padding: 20px; text-align: center;">200</h1>
                </div>
            </div>
            <div class="widget-box sample-widget">
                <div class="widget-header">
                    <h2>Admins</h2>
                    <i class="fa fa-cog"></i>
                </div>
                <div class="widget-content">
                    <h1 style="padding: 20px; text-align: center;">200</h1>
                </div>
            </div>
            <div class="widget-box sample-widget">
                <div class="widget-header">
                    <h2>Vendors</h2>
                    <i class="fa fa-cog"></i>
                </div>
                <div class="widget-content">
                    <h1 style="padding: 20px; text-align: center;">200</h1>
                </div>
            </div>
            <div class="widget-box sample-widget">
                <div class="widget-header">
                    <h2>Today's total sales</h2>
                    <i class="fa fa-cog"></i>
                </div>
                <div class="widget-content">
                    <h1 style="padding: 20px; text-align: center;">200 $</h1>
                </div>
            </div>
        </div>
    </section>


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

    <style>
        html,
        body {
            font-family: 'Open Sans', sans-serif;
            height: 100%;
        }

        body {
            background: #FFFFFF;
            height: 100%;
        }

        img {
            max-width: 100%;
        }

        ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        a {
            text-decoration: none;
        }

        #header {
            float: left;
            width: 100%;
            background: #ffffff;
            position: relative;
        }

        .white-label {
            float: left;
            background: #33373B;
            max-width: 210px;
            padding: 10px;
            min-height: 44px;
            background: #279BE4;
            width: 100%;
            max-height: 44px;
        }

        .white-label img {
            max-height: 43px;
        }

        .header-nav {
            min-height: 64px;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            background: #279BE4;
        }

        .menu-button {
            float: left;
            font-size: 29px;
            color: #fff;
            padding: 12px 19px;
        }

        .nav ul {
            height: 64px;
            float: right;
        }

        .nav ul li {
            float: left;
            position: relative;
            padding: 11px;
        }

        .nav>ul>li:first-child {
            border-left: none;
        }

        .nav ul li a {
            color: #fff;
            padding: 1px;
            float: left;
        }

        .nav ul li i {
            color: #fff;
        }

        .nav ul li:hover {
            background: #01A9F0;
            color: #fff;
        }

        .user-profile {
            float: right;
        }

        .user-profile>div {
            float: left;
            padding: 20px 8px;
            position: relative;
        }

        .user-profile i {
            font-size: 1.2em;
            color: #5F6F86;
        }

        .user-profile i:hover {
            color: #397AC5;
        }

        .font-icon i:after {
            position: absolute;
            content: '3';
            background: #E74C3C;
            color: #fff;
            font-size: 12px;
            border-radius: 50%;
            width: 10px;
            height: 10px;
            padding: 3px 4px 4px 3px;
            text-align: center;
            top: 12px;
            right: 11px;
        }

        .font-icon {
            padding: 8px 10px;
        }

        .font-icon i {
            font-size: 24px;
        }

        .nav-mail .font-icon i:after {
            background: #2ECC71;
        }

        div.user-image {
            padding: 9px 5px;
            margin: 0 5px;
            border-left: 1px solid #ccc;
            border-right: 1px solid #ccc;
        }

        .nav-profile {
            background: #0274BD;
        }

        .nav-profile-image img {
            width: 39px;
            height: 41px;
            border-radius: 50%;
            float: left;
        }

        .nav-profile-name {
            float: right;
            margin: 11px 7px 8px 14px;
            color: #fff;
        }

        .nav-profile-name i {
            padding: 0 0 0 11px;
        }

        .nav-chat i:after {
            display: none;
        }

        #sidebar {
            overflow: hidden;
            width: 210px;
            height: 100%;
            float: left;
            background: #2A2D33;
        }

        #sidebar-nav {
            width: 106%;
            height: calc(100% - 95px);
            padding: 0;
            background: #2A2D33;
            border-right: 1px solid #E0E0E0;
            overflow-y: scroll;
        }

        #sidebar-nav h2 {
            color: #60636B;
            float: left;
            width: 100%;
            font-size: .8em;
            font-family: 'Open Sans', sans-serif;
            font-weight: 600;
            text-transform: uppercase;
            padding: 3px 0 2px 20px;
            border-top: 1px solid #4D4C4C;
            box-sizing: border-box;
            margin: 10px 0;
        }

        #sidebar-nav ul {}

        #sidebar-nav ul li {}

        #sidebar-nav ul li a {
            color: #C2C2C2;
            font-size: .95em;
            padding: 15px 20px;
            float: left;
            width: 100%;
            font-weight: 600;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        #sidebar-nav ul li:hover a,
        #sidebar-nav ul li:hover a i,
        #sidebar-nav li.active a,
        #sidebar-nav li.active a i {
            color: #333;
        }

        #sidebar-nav ul li:hover a {
            background: #fff;
            color: #333;
        }

        #sidebar-nav ul li.active a {
            background: #fff;
            color: #333;
        }

        #sidebar-nav ul li.active a i {
            background: #fff;
        }

        #sidebar-nav i {
            padding-right: 8px;
            font-size: 1.3em;
            color: #60636B;
            width: 25px;
            text-align: center;
        }

        #content {
            float: left;
            width: calc(100% - 210px);
            height: 100%;
            word-wrap: break-word;
            background: #FFFFFF;
            font-family: Raleway, sans-serif;
        }

        ::-webkit-scrollbar {
            width: 12px;
        }

        ::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb {
            border-radius: 10px;
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.5);
        }

        .content {
            float: left;
            background: #E9EEF4;
            width: 100%;
            height: calc(100% - 64px);
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        .content-header {
            background: #fff;
            float: left;
            width: 100%;
            margin-bottom: 15px;
            padding: 15px;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            border-bottom: 1px solid #ccc;
        }

        .content-header h1 {
            margin: 0;
            font-weight: normal;
            padding-bottom: 5px;
        }

        .content-header p {
            margin: 0;
            padding-left: 2px;
        }

        .widget-box {
            background: #fff;
            border: 1px solid #E0E0E0;
            float: left;
            width: 100%;
            margin: 0 0 15px 15px;
        }

        .widget-header {
            background: #279BE4;
        }

        .widget-header h2 {
            font-size: 15px;
            font-weight: normal;
            margin: 0;
            padding: 11px 15px;
            color: #F9F9F9;
            display: inline-block;
        }

        .sample-widget {
            max-width: 47%;
        }

        .widget-box .fa-cog {
            float: right;
            color: #fff;
            margin: 11px 11px 0 0;
            font-size: 20px;
        }
    </style>
</body>



</html>
