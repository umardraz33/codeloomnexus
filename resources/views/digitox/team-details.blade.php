@extends('digitox.layouts.master')

@section('content')
<section class="breadcum v1 bg-cover-center" data-background="{{ asset('digitox/assets/img/breadcum/v1/bg.jpg')}}">
    <div class="container">
        <div class="breadcum-content">
            <h2>Team details</h2>
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Team Details</li>
            </ul>
        </div>
    </div>
</section>

<section class="team-details v1">
    <div class="container">
        <div class="team-details-card">
            <div class="team-details-img">
                <img src="{{ asset('digitox/assets/img/team-details/team-1.jpg')}}" alt="team">
            </div>
            <div class="team-details-info">
                <div class="section-title-white v1">
                    <h6>Web developer</h6>
                    <h2>Mhopa kondal</h2>
                    <p>Eros justo, posuere loborti viverra laoreet matti ullamcorper posuere viv.Aliquam eros justo, posuere lobortis, viverra laoreet augue mattis </p>
                </div>
                <h3>Get in touch</h3>
                <ul class="contact-info">
                    <li>
                        <div class="my-icon icon-phone"></div>
                        <div class="text">
                            <h4>Call us</h4>
                            <p>Mobile: <a href="#">012 345 678 9101</a></p>
                        </div>
                    </li>
                    <li>
                        <div class="my-icon icon-envelope"></div>
                        <div class="text">
                            <h4>Email</h4>
                            <p><a href="#">info@exampleyourmail.com</a></p>
                        </div>
                    </li>
                    <li>
                        <div class="my-icon icon-location-dot"></div>
                        <div class="text">
                            <h4>Location</h4>
                            <p>Dhaka 102, utl 1216, road 45 stert linehouse street</p>
                        </div>
                    </li>
                </ul>
                <h3>Follow us</h3>
                <ul class="social">
                    <li><a href="#"><span class="my-icon icon-facebook"></span></a></li>
                    <li><a href="#"><span class="my-icon icon-instagram"></span></a></li>
                    
                    <li><a href="https://www.linkedin.com/company/codeloom-nexus/about/" target="_blank"><span class="my-icon icon-linkedin-in"></span></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection
