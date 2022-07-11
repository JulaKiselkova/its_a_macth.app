<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- x-icon -->
    <link rel="shortcut icon" href="{{asset('/assets/images/x-icon.png')}}" type="image/x-icon">

    <!-- Other css -->
    <link rel="stylesheet" href="{{asset('/assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/icofont.min.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/swiper.min.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/style.css')}}">

    <title>TuruLav</title>
</head>

<body>
<!-- preloader start here -->
<div class="preloader">
    <div class="preloader-inner">
        <div class="preloader-icon">
            <span></span>
            <span></span>
        </div>
    </div>
</div>
<!-- preloader ending here -->


<!-- ==========Header Section Starts Here========== -->
<header class="header-section">
    <div class="header-top">
        <div class="container">
            <div class="header-top-area">
                <ul class="left">
                    <li>
                        <i class="icofont-ui-call"></i> <span>+800-123-4567 6587</span>
                    </li>
                    <li>
                        <i class="icofont-location-pin"></i> Beverley, New York 224 USA
                    </li>
                </ul>
                <ul class="social-icons d-flex align-items-center">
                    <li>
                        <p>
                            Find us on :
                        </p>
                    </li>
                    <li>
                        <a href="#" class="fb"><i class="icofont-facebook-messenger"></i></a>
                    </li>
                    <li>
                        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#" class="vimeo"><i class="icofont-vimeo"></i></a>
                    </li>
                    <li>
                        <a href="#" class="skype"><i class="icofont-skype"></i></a>
                    </li>
                    <li>
                        <a href="#" class="rss"><i class="icofont-rss-feed"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="header-bottom">
        <div class="container">
            <div class="header-wrapper">
                <div class="logo">
                    <a href="../index2.html">
                        <img src="../assets/images/logo/logo.png" alt="logo">
                    </a>
                </div>
                <div class="menu-area">
                    <ul class="menu">
                        <li>
                            <a href="../index2.html">Home</a>
                        </li>

                        <li>
                            <a href="#0">Features</a>
                            <ul class="submenu">
                                <li><a href="{{route('membersPage')}}">All Members</a></li>
{{--                                <li><a href="{{route('certainUserPage')}}">Member Profile</a></li>--}}
                                <li><a href="{{route('store')}}">Login</a></li>
                                <li><a href="{{route('signupPage')}}">Sign Up</a></li>
                                <li><a href="../pricing-plan.html">Pricing Plan</a></li>
                                <li><a href="../404.html">404 Page</a></li>

                            </ul>
                        </li>
                        <li>
                            <a href="../active-group.html">Community</a>
                        </li>
                        <li>
                            <a href="#0">Blog</a>
                            <ul class="submenu">
                                <li><a href="../blog.html">Blog</a></li>
                                <li><a href="../blog-single.html">Blog Single</a></li>
                            </ul>
                        </li>
                        <li><a href="../contact.html">Contact</a></li>
                    </ul>

                    <a href="{{route('signupPage')}}" class="signup"><i class="icofont-users"></i> <span>SIGN UP</span> </a>
                    @guest("web")
                        <a href="{{route('loginPage')}}" class="login"><i class="icofont-user"></i> <span>LOG IN</span> </a>
                    @endguest
                    @auth("web")
                        <a href="{{route('logout')}}" class="login"><i class="icofont-user"></i> <span>LOG OUT</span> </a>
                    @endauth
{{--                    <a href="{{route('logout')}}" class="login"><i class="icofont-user"></i> <span>LOG OUT</span> </a>--}}
{{--                    @guest("web")--}}
{{--                        <a href="{{route('loginPage')}}" class="login"><i class="icofont-user"></i> <span>LOG IN</span> </a>--}}
{{--                    @endguest--}}

                    <!-- toggle icons -->
                    <div class="header-bar d-lg-none">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <div class="ellepsis-bar d-lg-none">
                        <i class="icofont-info-square"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- ==========Header Section Ends Here========== -->
@yield('content')
<!-- ================ footer Section start Here =============== -->
<footer class="footer-section">
    <div class="footer-top">
        <div class="container">
            <div class="row g-3 justify-content-center g-lg-0">
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="footer-top-item lab-item">
                        <div class="lab-inner">
                            <div class="lab-thumb">
                                <img src="../assets/images/footer/icons/01.png" alt="Phone-icon">
                            </div>
                            <div class="lab-content">
                                <span>Phone Number : +88019 339 702 520</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="footer-top-item lab-item">
                        <div class="lab-inner">
                            <div class="lab-thumb">
                                <img src="../assets/images/footer/icons/02.png" alt="email-icon">
                            </div>
                            <div class="lab-content">
                                <span>Email : admin@turulav.com</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="footer-top-item lab-item">
                        <div class="lab-inner">
                            <div class="lab-thumb">
                                <img src="../assets/images/footer/icons/03.png" alt="location-icon">
                            </div>
                            <div class="lab-content">
                                <span>Address : 30 North West New York 240</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ================ footer Section end Here =============== -->



<!-- scrollToTop start here -->
<a href="#" class="scrollToTop"><i class="icofont-rounded-up"></i></a>
<!-- scrollToTop ending here -->




<!-- All Scripts -->
<script src="{{asset('/assets/js/jquery.js')}}"></script>
<script src="{{asset('/assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('/assets/js/waypoints.min.js')}}"></script>
<script src="{{asset('/assets/js/swiper.min.js')}}"></script>
<script src="{{asset('/assets/js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('/assets/js/wow.min.js')}}"></script>
<script src="{{asset('/assets/js/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('/assets/js/functions.js')}}"></script>
</body>
</html>
