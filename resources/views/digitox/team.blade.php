@extends('digitox.layouts.master')

@section('content')
<section class="breadcum v1 bg-cover-center" data-background="{{ asset('digitox/assets/img/breadcum/v1/bg.jpg')}}">
    <div class="container">
        <div class="breadcum-content">
            <h2>Team</h2>
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Team</li>
            </ul>
        </div>
    </div>
</section>

<section class="our-team v1">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="team-card">
                    <div class="team-card-img">
                        <ul class="social-link">
                            
                            <li><a href="#"><span class="my-icon icon-facebook"></span></a></li>
                            <li><a href="#"><span class="my-icon icon-instagram"></span></a></li>
                        </ul>
                        <img src="{{ asset('digitox/assets/img/team/v1/profile-1.jpg')}}" alt="profile">
                    </div>
                    <div class="team-card-text">
                        <div class="text">
                            <h5><a href="team-details.html">Shame leo suha</a></h5>
                            <p>Director</p>
                        </div>
                        <a class="link-btn" href="team-details.html"><span class="my-icon icon-arrow-right"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="team-card">
                    <div class="team-card-img">
                        <ul class="social-link">
                            
                            <li><a href="#"><span class="my-icon icon-facebook"></span></a></li>
                            <li><a href="#"><span class="my-icon icon-instagram"></span></a></li>
                        </ul>
                        <img src="{{ asset('digitox/assets/img/team/v1/profile-2.jpg')}}" alt="profile">
                    </div>
                    <div class="team-card-text">
                        <div class="text">
                            <h5><a href="team-details.html">Shame leo suha</a></h5>
                            <p>Director</p>
                        </div>
                        <a class="link-btn" href="team-details.html"><span class="my-icon icon-arrow-right"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="team-card">
                    <div class="team-card-img">
                        <ul class="social-link">
                            
                            <li><a href="#"><span class="my-icon icon-facebook"></span></a></li>
                            <li><a href="#"><span class="my-icon icon-instagram"></span></a></li>
                        </ul>
                        <img src="{{ asset('digitox/assets/img/team/v1/profile-3.jpg')}}" alt="profile">
                    </div>
                    <div class="team-card-text">
                        <div class="text">
                            <h5><a href="team-details.html">Shame leo suha</a></h5>
                            <p>Director</p>
                        </div>
                        <a class="link-btn" href="team-details.html"><span class="my-icon icon-arrow-right"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="team-card">
                    <div class="team-card-img">
                        <ul class="social-link">
                            
                            <li><a href="#"><span class="my-icon icon-facebook"></span></a></li>
                            <li><a href="#"><span class="my-icon icon-instagram"></span></a></li>
                        </ul>
                        <img src="{{ asset('digitox/assets/img/team/v1/profile-2.jpg')}}" alt="profile">
                    </div>
                    <div class="team-card-text">
                        <div class="text">
                            <h5><a href="team-details.html">Shame leo suha</a></h5>
                            <p>Director</p>
                        </div>
                        <a class="link-btn" href="team-details.html"><span class="my-icon icon-arrow-right"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="team-card">
                    <div class="team-card-img">
                        <ul class="social-link">
                            
                            <li><a href="#"><span class="my-icon icon-facebook"></span></a></li>
                            <li><a href="#"><span class="my-icon icon-instagram"></span></a></li>
                        </ul>
                        <img src="{{ asset('digitox/assets/img/team/v3/profile-2.jpg')}}" alt="profile">
                    </div>
                    <div class="team-card-text">
                        <div class="text">
                            <h5><a href="team-details.html">Shame leo suha</a></h5>
                            <p>Director</p>
                        </div>
                        <a class="link-btn" href="team-details.html"><span class="my-icon icon-arrow-right"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="team-card">
                    <div class="team-card-img">
                        <ul class="social-link">
                            
                            <li><a href="#"><span class="my-icon icon-facebook"></span></a></li>
                            <li><a href="#"><span class="my-icon icon-instagram"></span></a></li>
                        </ul>
                        <img src="{{ asset('digitox/assets/img/team/v3/profile-3.jpg')}}" alt="profile">
                    </div>
                    <div class="team-card-text">
                        <div class="text">
                            <h5><a href="team-details.html">Shame leo suha</a></h5>
                            <p>Director</p>
                        </div>
                        <a class="link-btn" href="team-details.html"><span class="my-icon icon-arrow-right"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
