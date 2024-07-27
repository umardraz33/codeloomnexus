@extends('digitox.layouts.master')

@section('content')
<section class="breadcum v1 bg-cover-center" data-background="{{ asset('digitox/assets/img/breadcum/v1/bg.jpg')}}">
    <div class="container">
        <div class="breadcum-content">
            <h2>FAQ</h2>
            <ul>
                <li><a href="index-2.html">Home</a></li>
                <li>FAQ</li>
            </ul>
        </div>
    </div>
</section>

<section class="faq-info v1">
    <div class="container">
        <div class="section-title-center-white v1">
            <h2>Do you have any QUESTION</h2>
            <p>It is a long established fact that a reader will distro bioiiy desig the re dablea content of a page whenlayout this is Thoiie point of using.It is a long this established fact. Aliquam eros justo, posuere loborti viverra laoreet.</p>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="faq-img">
                    <img src="{{ asset('digitox/assets/img/faq/faq-img.jpg')}}" alt="faq">
                    <div class="faq-content-box">
                        <h6>A picture htandard and like</h6>
                        <p>Aliquam eros justo, posuere loborti viverra laoreet matti ullamcorper posuere viverra .Aliquam eros justo, posuere=</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <ul class="faq-accordion" id="accordionFAQ">
                    <li>
                        <button type="button" data-bs-toggle="collapse" data-bs-target="#faq1">Stand and rate the to popular not simply ?</button>
                        <div id="faq1" class="collapse show" data-bs-parent="#accordionFAQ">
                            <div class="box-content">
                                <p>It is a long established fact that a reader will distro bioiiy desig the re dablea content of a page whenlayout this is Thoiie point of using.It is a long this established fact. Aliquam eros justo, posuere loborti viverra laoreet.</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <button class="collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">We stall live Contrary to popular not simply ?</button>
                        <div id="faq2" class="collapse" data-bs-parent="#accordionFAQ">
                            <div class="box-content">
                                <p>It is a long established fact that a reader will distro bioiiy desig the re dablea content of a page whenlayout this is Thoiie point of using.It is a long this established fact. Aliquam eros justo, posuere loborti viverra laoreet.</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <button class="collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">Lorem Ipsum that was print ingantype ?</button>
                        <div id="faq3" class="collapse" data-bs-parent="#accordionFAQ">
                            <div class="box-content">
                                <p>It is a long established fact that a reader will distro bioiiy desig the re dablea content of a page whenlayout this is Thoiie point of using.It is a long this established fact. Aliquam eros justo, posuere loborti viverra laoreet.</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <button class="collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">Lorem Ipsum simply print  was print ingantype ?</button>
                        <div id="faq4" class="collapse" data-bs-parent="#accordionFAQ">
                            <div class="box-content">
                                <p>It is a long established fact that a reader will distro bioiiy desig the re dablea content of a page whenlayout this is Thoiie point of using.It is a long this established fact. Aliquam eros justo, posuere loborti viverra laoreet.</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection
