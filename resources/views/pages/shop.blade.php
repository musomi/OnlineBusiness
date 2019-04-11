<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Essaji | Shop</title>

    <!-- Favicon  -->
    <link rel="icon" href="{{asset('assets/img/core-img/favicon.ico')}}">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/core-style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/images/favicon.ico')}}">

    <style type="text/css" rel="stylesheet">

    header {
        background-image: url("{{asset('images/Abstract Smooth Wave Background Vector Grapihic Art.jpg')}}");
        background-repeat: repeat;
    }

    </style>

    <script type="text/javascript">
   function blinktext() {
  var f = document.getElementById('blinking');
  setInterval(function(){
    f.style.visibility = (f.style.visibility == 'hidden' ? '' : 'hidden');
  },1000);
}
    </script>


</head>

<body onload="blinktext()">
    <!-- Search Wrapper Area Start -->
    <div class="search-wrapper section-padding-100">
        <div class="search-close">
            <i class="fa fa-close" aria-hidden="true"></i>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="search-content">
                        <form action="#" method="get">
                            <input type="search" name="search" id="search" placeholder="Type your keyword...">
                            <button type="submit"><img src="{{asset('assets/img/core-img/search.png')}}" alt=""></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Wrapper Area End -->

    <!-- ##### Main Content Wrapper Start ##### -->
    <div class="main-content-wrapper d-flex clearfix ground">

        <!-- Mobile Nav (max width 767px)-->
        <div class="mobile-nav">
            <!-- Navbar Brand -->
            <div class="amado-navbar-brand">
                <a href="{{asset('assets/images/favicon.ico')}}"><img src="{{asset('assets/img/core-img/logo.png')}}" alt=""></a>
            </div>
            <!-- Navbar Toggler -->
            <div class="amado-navbar-toggler">
                <span></span><span></span><span></span>
            </div>
        </div>

        <!-- Header Area Start -->
        <header style="" class="header-area clearfix">
            <!-- Close Icon -->
            <div class="nav-close">
                <i class="fa fa-close" aria-hidden="true"></i>
            </div>
            <!-- Logo -->
            <div class="logo">
                <a href="index.html"><img src="{{asset('assets/img/core-img/logo.png')}}" alt=""></a>
            </div>
            <!-- Amado Nav -->
            <nav style="" class="amado-nav">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li class="<?php echo $active=='shop'?'active':'';?>"><a href="/shop">Shop</a></li>
                    <li class="<?php echo $active=='about'?'active':'';?>"><a href="/about">About</a></li>
                    <li class="<?php echo $active=='contact'?'active':'';?>"><a href="/contact">Contact Us</a></li>

                </ul>
            </nav>

            <!-- Social Button -->
            <div class="social-info d-flex justify-content-between">
                <a href="#"><i style="color:blue" class="fa fa-pinterest" aria-hidden="true"></i></a>
                <a href="#"><i style="color:blue" class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="https://www.facebook.com/EssajiHotelSuppliesLtd/photos/rpp.455277751269870/1285934641537506/?type=3&eid=ARDTC0xbAB5ULRD9y6AROl6fVMzcdCSKrnnnDJGLlS3T8n1M9EncUMc5IHd9nl4_ktfEYck82SA-Y_hY" target="blank"><i style="color:blue" class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href=""><i style="color:blue" class="fa fa-twitter" aria-hidden="true"></i></a>
            </div>
        </header>
        <!-- Header Area End -->

        @yield('content')

    </div>
    <!-- ##### Main Content Wrapper End ##### -->


    <!-- ##### Footer Area Start ##### -->
    <footer class="footer_area clearfix">
        <div class="container">
            <div class="row align-items-center">
                <!-- Single Widget Area -->
                <div class="col-12 col-lg-4">
                    <div class="single_widget_area">
                        <!-- Logo -->
                        <div class="footer-logo mr-50">
                            <a href="index.html"><img src="{{asset('images/log.jpg')}}" alt=""></a>
                        </div>
                        <!-- Copywrite Text -->
                        <p class="copywrite"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">robert</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </div>
                </div>
                <!-- Single Widget Area -->
                <div class="col-12 col-lg-8">
                    <div class="single_widget_area">
                        <!-- Footer Menu -->
                        <div class="footer_menu">
                            <nav class="navbar navbar-expand-lg justify-content-end">
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#footerNavContent" aria-controls="footerNavContent" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
                                <div class="collapse navbar-collapse" id="footerNavContent">
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item active">
                                            <a class="nav-link" href="/">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="/shop">Shop</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="product-details.html">Product</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="cart.html">Cart</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="checkout.html">Checkout</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- ##### jQuery (Necessary for All JavaScript Plugins) ##### -->
    <script src="{{asset('assets/js/jquery/jquery-2.2.4.min.js')}}"></script>
    <!-- Popper js -->
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <!-- Bootstrap js -->
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <!-- Plugins js -->
    <script src="{{asset('assets/js/plugins.js')}}"></script>
    <!-- Active js -->
    <script src="{{asset('assets/js/active.js')}}"></script>

</body>

</html>
