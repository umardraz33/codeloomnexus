@extends('digitox.layouts.master')

@section('content')
    <section class="breadcum v1 bg-cover-center" data-background="{{ asset('digitox/assets/img/breadcum/v1/bg.jpg') }}">
        <div class="container">
            <div class="breadcum-content">
                <h2>Contact Us</h2>
                <ul>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </section>


    <section class="our-company v1 bg-dotts-shap-left">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 order-xl-1">
                    <div class="our-company-img">
                        <div class="main-img">
                            <img src="{{ asset('digitox/assets/img/our-company/v1/umar draz.png') }}"
                                alt="our-company-img">
                        </div>
                        <div class="pot-text">
                            <h3>10+</h3>
                            <h5>years experience</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5">
                    <div class="our-company-text">
                        <div class="section-title-white v1">
                            <h6>Umar Draz</h6>
                            <h2>CHIEF EXECUTIVE OFFICER (CEO)</h2>
                            <p>At CodeLoom Nexus, we are dedicated to providing innovative solutions and exceptional service. Whether you have a question, need support, or want to discuss how we can help your business thrive, we are here to assist you. </p>
                        </div>
                        <ul class="all-btns">
                            <li>
                                <a href="https://wa.me/+923036682519?text=Hello%20there!" class="link-anime v2">Chat with us on WhatsApp</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="contact-us v1">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-xl-8">
                    <div class="section-title-white v1">
                        {{-- <x-alert /> --}}

                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible" role="alert">
                                {{ session('success') }}
                                {{-- <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button> --}}
                            </div>
                        @endif

                        @if (session('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ session('error') }}
                                {{-- <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button> --}}
                            </div>
                        @endif

                        {{-- @if (session('success'))
                            <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">x
                                </button>
                                {{ session('success') }}

                            </div>
                        @endif --}}
                        <h6>Contact us now</h6>
                        <h2>Message for your next project work</h2>
                        <p>Excited to embark on our next project together! Let's collaborate and create something extraordinary that exceeds expectations. Looking forward to bringing your vision to life with innovation and creativity. Together, we'll achieve success and make a meaningful impact. Let's get started!</p>
                    </div>
                    <form action="{{ route('contactus.mail.send') }}" method="POST" class="contact-form">
                        @csrf
                        <div class="group-box">
                            <input type="text" name="name" placeholder="Your Name" required>
                            <input type="email" name="email" placeholder="Your Email" required>
                        </div>
                        <textarea name="message" placeholder="Write your Message"></textarea>
                        <button type="submit" class="btn-anime v1">submit now</button>
                        <p class="response"></p>
                    </form>
                </div>
                <div class="col-lg-5 col-xl-4">
                    <div class="contact-left">
                        <h3>Contact Info</h3>
                        <ul class="contact-info">
                            <li>
                                <div class="my-icon icon-phone"></div>
                                <div class="text">
                                    <h4>Call us</h4>
                                    <p style="margin-top: 0px;">Mobile: <a href="tel:+923036682519">+923036682519</a></p>
                                </div>
                            </li>
                            <li>
                                <div class="my-icon icon-envelope"></div>
                                <div class="text">
                                    <h4>Email</h4>
                                    <p style="margin-top: 0px;"><a href="mailto:info@codeloomnexus.com">info@codeloomnexus.com</a></p>
                                </div>
                            </li>
                            <li>
                                <div class="my-icon icon-location-dot"></div>
                                <div class="text">
                                    <h4>Location</h4>
                                    <p style="margin-top: 0px; border-bottom: 1px solid gray;">
                                        Lomira, Wisconsin, United States</p>
                                    <p style="margin-top: 0px;">
                                        Muslim Town, Lahore, Pakistan</p>
                                </div>
                            </li>
                        </ul>
                        <h3>Follow us</h3>
                        <ul class="social">
                            <li><a href="https://www.facebook.com/profile.php?id=61559866791478&notif_id=1717490684324119&notif_t=page_user_activity&ref=notif" target="_blank"><span class="my-icon icon-facebook"></span></a></li>
                            <li><a href="https://www.instagram.com/codeloom_nexus/" target="_blank"><span class="my-icon icon-instagram"></span></a></li>
                            
                            <li><a href="https://www.linkedin.com/company/codeloom-nexus/about/" target="_blank"><span class="my-icon icon-linkedin-in"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-map v1">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d46227.82752753911!2d-88.44329095!3d43.6015605!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88046cd153c2eced%3A0xe13c7e9c0d55892c!2sLomira%2C%20WI%2C%20USA!5e0!3m2!1sen!2s!4v1709027162227!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
@endsection
