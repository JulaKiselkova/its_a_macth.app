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
                        <h2>Oops.Mistake.</h2>
                        <p>Check your age. It must be more than 18.<i class="icofont-worried"></i></p>
                        <a href="{{route('loginPage')}}" class="lab-btn"><span>Log in <i
                                    class="icofont-double-right"></i></span> </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
