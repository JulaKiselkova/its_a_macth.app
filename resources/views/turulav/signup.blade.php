@extends('turulav.layouts.index')
@section('content')
    <!-- ==========Page Header Section Start Here========== -->

    <!-- ==========Page Header Section Ends Here========== -->

    <!-- ==========Sign up Section start Here========== -->
    <div class="login-section padding-tb">
        <div class="container">
            <div class="account-wrapper">
                <h3 class="title">Register Now</h3>
                <form action="{{route('store')}}" class="account-form" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input type="text" placeholder="User Name" name="name">
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Email" name="email">
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Password" name="password">
                    </div>
{{--                    <div class="form-group">--}}
{{--                        <select>--}}
{{--                            <option>Boy</option>--}}
{{--                            <option>Girls</option>--}}
{{--                        </select>--}}
{{--                    </div>--}}
{{--                    <div class="form-group">--}}
{{--                        <input type="text" placeholder="Gender" name="gender">--}}
{{--                    </div>--}}
                    <div class="form-group">
                        <input type="number" placeholder="Age" name="age">
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Zodiac" name="zodiac">
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="About you" name="description">
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Looking for" name="looking_for">
                    </div>
{{--                    <div class="form-group">--}}
{{--                        <input type="password" placeholder="Confirm Password" name="password">--}}
{{--                    </div>--}}
                    <div class="form-group">
                        <button type="submit" class="d-block lab-btn"><span>Get Started Now</span></button>
                    </div>
                </form>
                <div class="account-bottom">
                    <span class="d-block cate pt-10">Are you a member? <a href="login.html">Login</a></span>
                    <span class="or"><span>or</span></span>
                    <h5 class="subtitle">Register With Social Media</h5>
                    <ul class="social-media social-color justify-content-center d-flex lab-ul">
                        <li>
                            <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#" class="linkedin"><i class="icofont-linkedin"></i></a>
                        </li>
                        <li>
                            <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
                        </li>
                        <li>
                            <a href="#" class="pinterest"><i class="icofont-pinterest"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Sign up Section ends Here========== -->

    <!-- scrollToTop start here -->
    <a href="#" class="scrollToTop"><i class="icofont-rounded-up"></i></a>
    <!-- scrollToTop ending here -->
@endsection