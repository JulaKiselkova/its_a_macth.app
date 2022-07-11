@extends('turulav.layouts.index')
@section('content')
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
                    <a href="index2.html">
                        <img src="assets/images/logo/logo.png" alt="logo">
                    </a>
                </div>
                <div class="menu-area">
                    <ul class="menu">
                        <li>
                            <a href="index2.html">Home</a>
                        </li>

                        <li>
                            <a href="#0">Features</a>
                            <ul class="submenu">
                                <li><a href="members.html" class="active">All Members</a></li>
                                <li><a href="profile.html">Member Profile</a></li>
                                <li><a href="login.html">Login</a></li>
                                <li><a href="{{route('signupPage')}}">Sign Up</a></li>
                                <li><a href="pricing-plan.html">Pricing Plan</a></li>
                                <li><a href="404.html">404 Page</a></li>

                            </ul>
                        </li>
                        <li>
                            <a href="active-group.html">Community</a>
                        </li>
                        <li>
                            <a href="#0">Blog</a>
                            <ul class="submenu">
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="blog-single.html">Blog Single</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                    <a href="login.html" class="login"><i class="icofont-user"></i> <span>LOG IN</span> </a>
                    <a href="{{route('signupPage')}}" class="signup"><i class="icofont-users"></i> <span>SIGN UP</span> </a>

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

<!-- ==========Page Header Section Start Here========== -->
<section class="page-header-section style-1" style="background:url(assets/images/page-header.jpg)">
    <div class="container">
        <div class="page-header-content">
            <div class="page-header-inner">
                <div class="page-title">
                    <h2>TuruLav Dating Members</h2>
                </div>
                <ol class="breadcrumb">
                    <li><a href="index2.html">Home</a></li>
                    <li class="active">Members</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<!-- ==========Page Header Section Ends Here========== -->

<!-- ==========Member page Section Start Here========== -->
<section class="member-page-section">
    <div class="container">
        <div class="member-filter">
            <div class="member-filter-inner">
                <form action="{{route('signupPage')}}" class="filter-form">
                    <div class="gender">
                        <div class="custom-select right w-100">
                            <select name="gender" id="gender" class="">
                                <option value="0">I am a </option>
                                <option value="1">Male</option>
                                <option value="2">Female</option>
                                <option value="3">Others</option>
                            </select>
                        </div>
                    </div>
                    <div class="person">
                        <div class="custom-select right w-100">
                            <select name="gender" id="gender-two" class="">
                                <option value="0">Looking for</option>
                                <option value="1">Male</option>
                                <option value="2">Female</option>
                                <option value="3">Others</option>
                            </select>
                        </div>
                    </div>
                    <div class="age">
                        <div class="right d-flex justify-content-between w-100">
                            <div class="custom-select">
                                <select name="age-start" id="age">
                                    <option value="1">18</option>
                                    <option value="2">19</option>
                                    <option value="3">20</option>
                                    <option value="4">21</option>
                                    <option value="5">22</option>
                                    <option value="6">23</option>
                                    <option value="7">24</option>
                                    <option value="8">25</option>
                                    <option value="9">26</option>
                                    <option value="10">27</option>
                                    <option value="11">28</option>
                                    <option value="13">29</option>
                                    <option value="14">30</option>
                                </select>
                            </div>

                            <div class="custom-select">
                                <select name="age-end" id="age-two">
                                    <option value="1">36</option>
                                    <option value="2">19</option>
                                    <option value="3">20</option>
                                    <option value="4">21</option>
                                    <option value="5">22</option>
                                    <option value="6">23</option>
                                    <option value="7">24</option>
                                    <option value="8">25</option>
                                    <option value="9">26</option>
                                    <option value="10">27</option>
                                    <option value="11">28</option>
                                    <option value="13">29</option>
                                    <option value="14">30</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="city">
                        <div class="custom-select right w-100">
                            <select name="country" id="country" class="">
                                <option value="0">Choose Your Country
                                </option>
                                <option value="1">USA</option>
                                <option value="2">UK</option>
                                <option value="3">Spain</option>
                                <option value="4">Brazil</option>
                                <option value="5">France</option>
                                <option value="6">Newzeland</option>
                                <option value="7">Australia</option>
                                <option value="8">Bangladesh</option>
                                <option value="9">Turki</option>
                                <option value="10">Chine</option>
                                <option value="11">India</option>
                                <option value="12">Canada</option>
                            </select>
                        </div>
                    </div>
                    <input type="text" placeholder="findByLogin" name="findByLogin">
{{--                    <button class="lab-btn" type="submit">Search now <i class="icofont-search-2"></i></button>--}}
                </form>
            </div>
        </div>
        <div class="member-wrapper">
            <ul class="member-info mb-4">
                <li class="all-member">
                    <p>All Members </p>
                    <p>{{$numberOfUsers}}</p>
                </li>
            </ul>
            <div class="row g-3 row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 justify-content-center">
            @foreach($users as $user)
                <div class="col">
                    <div class="lab-item member-item style-1 style-2">
                        <div class="lab-inner">
                            <div class="lab-thumb">
{{--                                <img src="storage/usersPictures/150/1.jpeg" alt="member-img">--}}
{{--                                <img src="{{user}}" alt="member-img">--}}
                                <img src="storage/usersPictures/150/1.jpeg" alt="member-img">
{{--                                <img src="assets/images/member/01.jpg" alt="member-img">--}}
                            </div>
                            <div class="lab-content">
{{--                                {{route('admin.product.show', ['product' => $product->id]) }}--}}
                                <h6><a href="{{route('profile', ['user' => $user->id])}}">{{$user->name}}</a> </h6>
{{--                                <h6><a href="{{route("profilePage")}}">{{$user->name}}</a> </h6>--}}
                                <p>Active 1 Day</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
                {!! $users->render() !!}
            </div>
            <div class="paginations">
                <ul class="lab-ul d-flex flex-wrap justify-content-center mb-1">
                    <li>
                        <a href="#"><i class="icofont-rounded-double-left"></i></a>
                    </li>
                    <li>
                        <a href="#">1</a>
                    </li>
                    <li class="d-none d-sm-block">
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="#">...</a>
                    </li>
                    <li class="d-none d-sm-block">
                        <a href="#">4</a>
                    </li>
                    <li>
                        <a href="#">5</a>
                    </li>
                    <li>
                        <a href="#"><i class="icofont-rounded-double-right"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- ==========Member page Section Ends Here========== -->
@endsection
