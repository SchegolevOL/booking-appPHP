<!doctype html>
<html lang="ZXX">

<head>
    <title>COAGEX - Creative Agency Template</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name=description content="">
    <meta name=author content="Enventer">
    <link rel="icon" href="/public/assets/img/favicon.png" type="image/png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/public/assets/css/bootstrap.min.css">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,700,900&display=swap" rel="stylesheet">
    <!-- Meanmenu css -->
    <link rel="stylesheet" href="/public/assets/css/meanmenu.css">
    <!-- Magnific css -->
    <link rel="stylesheet" href="/public/assets/css/magnific-popup.min.css">
    <!-- Animation CSS -->
    <link href="/public/assets/css/aos.min.css" rel="stylesheet">
    <!-- Slick Carousel CSS -->
    <link href="/public/assets/css/slick.css" rel="stylesheet">
    <!-- Main CSS -->
    <link rel="stylesheet" href="/public/assets/style.css">
    <link rel="stylesheet" href="/public/assets/css/responsive.css">
</head>

<body>

<!--=========== Main Header area ===============-->
<header id="home">
    <div class="main-navigation">
        <div class="container">
            <div class="row">
                <!-- logo-area-->
                <div class="col-xl-2 col-lg-3 col-md-3">
                    <div class="logo-area">
                        <a href="index.html"><img src="/public/assets/img/logo.png" alt="enventer"></a>
                    </div>
                </div>
                <!-- mainmenu-area-->
                <div class="col-xl-10 col-lg-9 col-md-9">
                    <div class="main-menu f-right">
                        <nav id="mobile-menu">
                            <ul>
                                <li>
                                    <a class="current" href="{{route('home')}}">home</a>
                                </li>
                                <li>
                                    <a href="{{route('about')}}">about</a>
                                </li>
                                <li>
                                    <a href="">team</a>
                                </li>
                                <!-- dropdown menu-area-->
                                <li>
                                    <a href="#" onclick="return false">pages <i class="fas fa-angle-down"></i>
                                    </a>
                                    <ul class="dropdown">
                                        <li><a href="{{route('about')}}">about us</a></li>
                                        {{--<li><a href="portfolio.html">portfolio</a></li>
                                        <li><a href="portfolio2.html">portfolio two</a></li>
                                        <li><a href="single-portfolio.html">single portfolio</a></li>
                                        <li><a href="blog.html">blog page</a></li>
                                        <li><a href="single-blog.html">single blog</a></li>
                                        <li><a href="single-blog2.html">single blog two</a></li>
                                        <li><a href="team.html">our team</a></li>--}}
                                        <li><a href="{{route('contact')}}">contact us</a></li>
                                        <li><a href="404.html">404 Page</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="contact.html">contact</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <!-- mobile menu-->
                    <div class="mobile-menu"></div>
                    <!--Search-->
                    <div class="search-box-area">
                        <div id="search" class="fade">
                            <a href="#" class="close-btn" id="close-search">
                                <em class="fa fa-times"></em>
                            </a>
                            <input placeholder="what are you looking for?" id="searchbox" type="search" />
                        </div>
                        <div class="search-icon-area">
                            <a href='#search'>
                                <i class="fa fa-search"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>


@yield('content')


<section id="footer-fixed">
    <div class="big-footer">
        <div class="container">
            <div class="row">
                <!--footer logo-->
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                    <div class="footer-logo">
                        <a href="#">
                            <img src="/public/assets/img/footer-logo.png" alt="">
                        </a>
                        <p> We have bothh premium and free website templates. Build your professional website with us.</p>
                    </div>
                    <!--footer social-->
                    <div class="social">
                        <ul>
                            <li><a class="footer-socials" href="#"><i class="fab fa-facebook"></i></a></li>
                            <li><a class="footer-socials" href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a class="footer-socials" href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a class="footer-socials" href="#"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!--footer quick links-->
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                    <div class="footer-heading">
                        <h3>quick links</h3>
                    </div>
                    <div class="footer-content">
                        <ul>
                            <li><a href="">about</a></li>
                            <li><a href="">contact</a></li>
                            <li><a href="">privacy</a></li>
                            <li><a href="">our blog</a></li>
                            <li><a href="">forum</a></li>
                        </ul>
                    </div>
                </div>
                <!--footer latest work-->
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                    <div class="footer-heading">
                        <h3>Latest works</h3>
                    </div>
                    <div class="footer-content">
                        <ul>
                            <li><a href="">sparkel</a></li>
                            <li><a href="">getparts</a></li>
                            <li><a href="">youtuber</a></li>
                            <li><a href="">smartco</a></li>
                            <li><a href="">petcare</a></li>
                        </ul>
                    </div>
                </div>
                <!--footer subscribe-->
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                    <div class="footer-heading">
                        <h3>Get Updates</h3>
                    </div>
                    <div class="footer-content footer-cont-mar-40">
                        <form action="#">
                            <input id="leadgenaration" type="email" placeholder="Enter your email">
                            <input id="subscribe" type="submit" value="Subscribe">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--copyright-->
    <footer>
        <p>All rights reserved @ enventer 2019</p>
    </footer>
</section>
<!-- Jquery JS -->
<script src="/public/assets/js/vendor/jquery-2.2.4.min.js"></script>
<!-- Proper JS -->
<script src="/public/assets/js/popper.min.js"></script>
<!-- Bootstrap Js -->
<script src="/public/assets/js/bootstrap.min.js"></script>
<!-- Video popup Js -->
<script src="/public/assets/js/magnific-popup.min.js"></script>
<!-- Waypoint Up Js -->
<script src="/public/assets/js/waypoints.min.js"></script>
<!-- Counter Up Js -->
<script src="/public/assets/js/counterup.min.js"></script>
<!-- Meanmenu Js -->
<script src="/public/assets/js/meanmenu.min.js"></script>
<!-- Animation Js -->
<script src="/public/assets/js/aos.min.js"></script>
<!-- Filtering Js -->
<script src="/public/assets/js/isotope.min.js"></script>
<!-- Background Move Js -->
<script src="/public/assets/js/jquery.backgroundMove.js"></script>
<!-- Slick Carousel Js -->
<script src="/public/assets/js/slick.min.js"></script>
<!-- ScrollUp Js -->
<script src="/public/assets/js/scrollUp.js"></script>
<!-- Main Js -->
<script src="/public/assets/js/main.js"></script>
</body>

</html>
