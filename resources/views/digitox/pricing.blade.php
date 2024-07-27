@extends('digitox.layouts.master')

@section('content')
<section class="breadcum v1 bg-cover-center" data-background="{{ asset('digitox/assets/img/breadcum/v1/bg.jpg')}}">
    <div class="container">
        <div class="breadcum-content">
            <h2>Pricing</h2>
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Pricing</li>
            </ul>
        </div>
    </div>
</section>

<section class="price-pack v1">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="price-card">
                    <h4>Regular package</h4>
                    <div class="price-valu">
                        <h2>
                            <span class="curren">$</span>
                            <span class="price">500</span>
                            <span class="date">Per month</span>
                        </h2>
                    </div>
                    <ul class="check-mark-list v1">
                        <li>
                            <span class="my-icon icon-check-circle"></span>
                            <p>Landing page design</p>
                        </li>
                        <li>
                            <span class="my-icon icon-check-circle"></span>
                            <p>Website design</p>
                        </li>
                        <li>
                            <span class="my-icon icon-check-circle"></span>
                            <p>Ware framing for all page</p>
                        </li>
                        <li>
                            <span class="my-icon icon-check-circle"></span>
                            <p>Regular update email</p>
                        </li>
                        <li>
                            <span class="my-icon icon-check-circle"></span>
                            <p>Work process</p>
                        </li>
                        <li>
                            <span class="my-icon icon-check-circle"></span>
                            <p>web developing</p>
                        </li>
                    </ul>
                    <a href="#" class="link-anime v2">Perches now</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="price-card">
                    <div class="price-tag">Popular package</div>
                    <h4>Primary package</h4>
                    <div class="price-valu">
                        <h2>
                            <span class="curren">$</span>
                            <span class="price">1500</span>
                            <span class="date">Per month</span>
                        </h2>
                    </div>
                    <ul class="check-mark-list v1">
                        <li>
                            <span class="my-icon icon-check-circle"></span>
                            <p>Landing page design</p>
                        </li>
                        <li>
                            <span class="my-icon icon-check-circle"></span>
                            <p>Website design</p>
                        </li>
                        <li>
                            <span class="my-icon icon-check-circle"></span>
                            <p>Ware framing for all page</p>
                        </li>
                        <li>
                            <span class="my-icon icon-check-circle"></span>
                            <p>Regular update email</p>
                        </li>
                        <li>
                            <span class="my-icon icon-check-circle"></span>
                            <p>Work process</p>
                        </li>
                        <li>
                            <span class="my-icon icon-check-circle"></span>
                            <p>web developing</p>
                        </li>
                    </ul>
                    <a href="#" class="link-anime v2">Perches now</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="price-card">
                    <h4>Advance package</h4>
                    <div class="price-valu">
                        <h2>
                            <span class="curren">$</span>
                            <span class="price">5000</span>
                            <span class="date">Per month</span>
                        </h2>
                    </div>
                    <ul class="check-mark-list v1">
                        <li>
                            <span class="my-icon icon-check-circle"></span>
                            <p>Landing page design</p>
                        </li>
                        <li>
                            <span class="my-icon icon-check-circle"></span>
                            <p>Website design</p>
                        </li>
                        <li>
                            <span class="my-icon icon-check-circle"></span>
                            <p>Ware framing for all page</p>
                        </li>
                        <li>
                            <span class="my-icon icon-check-circle"></span>
                            <p>Regular update email</p>
                        </li>
                        <li>
                            <span class="my-icon icon-check-circle"></span>
                            <p>Work process</p>
                        </li>
                        <li>
                            <span class="my-icon icon-check-circle"></span>
                            <p>web developing</p>
                        </li>
                    </ul>
                    <a href="#" class="link-anime v2">Perches now</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
