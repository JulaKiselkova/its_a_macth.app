@extends('turulav.layouts.index')
@section('content')
    <!-- ==========404 Section start Here========== -->
    <section class="fore-zero padding-tb">
        <div class="container">
            <div class="section-wrapper">
                <div class="zero-item">
                    <div class="zero-thumb">
                    </div>
                    <div class="zero-content">
                        <h2>Sorry! You need to create account to watch the profile!</h2>
                        <a href="{{route('signupPage')}}" class="lab-btn"><span>Sign Up <i
                                    class="icofont-double-right"></i></span> </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
