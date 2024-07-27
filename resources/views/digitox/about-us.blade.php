    @extends('digitox.layouts.master')

@section('content')
    <section class="breadcum v1 bg-cover-center" data-background="{{ asset('digitox/assets/img/breadcum/v1/bg.jpg') }}">
        <div class="container">
            <div class="breadcum-content">
                <h2>About Us</h2>
                <ul>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>About Us</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="about-us v2 bg-line-shap">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-imgs">
                        <div class="about-img-1">
                            <img src="{{ asset('digitox/assets/img/about-us/v2/about-img-1.jpg') }}" alt="about-img">
                        </div>
                        <div class="about-img-2">
                            <img src="{{ asset('digitox/assets/img/about-us/v2/about-img-2.jpg') }}" alt="about-img">
                        </div>
                        <div class="about-img-3">
                            <img src="{{ asset('digitox/assets/img/about-us/v2/about-img-3.jpg') }}" alt="about-img">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-text">
                        <div class="section-title-white v1">
                            <h6>About Company</h6>
                            <h2>Our Journey to a Leading Agency

                            </h2>
                            <p>
                                Our journey to becoming a leading agency in designing and developing web and mobile
                                applications for clients worldwide has been marked by dedication, innovation, and a
                                commitment to excellence. Our agency's evolution is a story of growth, learning, and
                                continuous improvement, fueled by a passion for technology and a deep understanding of our
                                clients' needs.</p>
                        </div>
                        <div class="about-text-content">
                            <h4>Expansion of Services</h4>
                            <p>We diversified our service offerings beyond website development to include mobile app
                                development, e-commerce solutions, custom software development, UX/UI design, and digital
                                marketing services.</p>
                            <a href="{{ route('contactus') }}" class="link-anime v2">Contact Us</a>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-lg-6 mt-3">
                        <div class="about-text">
                            <div class="section-title-white v1">
                                <h6>Our Vission</h6>
                                <h2>Why you chose CodeLoom Nexus.
                                </h2>
                                <p>
                                    Our vision at CodeLoom Nexus is centered around becoming a premier global provider of
                                    digital solutions, with a focus on unparalleled expertise in SEO and holistic digital
                                    marketing approaches. We aim to become the preferred ally for enterprises aiming to
                                    solidify their online footprint, expand their market share, and surpass rivals. Through
                                    a commitment to innovation and adaptability, we strive to establish new standards of
                                    excellence and achieve outcomes that surpass the anticipations of our clients.</p>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6 mt-3">
                        <div class="about-imgs">
                            <div class="about-img-1">
                                <img src="{{ asset('digitox/assets/img/about-us/v2/about-img-1.jpg') }}" alt="about-img">
                            </div>
                            <div class="about-img-2">
                                <img src="{{ asset('digitox/assets/img/about-us/v2/about-img-2.jpg') }}" alt="about-img">
                            </div>
                            <div class="about-img-3">
                                <img src="{{ asset('digitox/assets/img/about-us/v2/about-img-3.jpg') }}" alt="about-img">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row mt-5">
                <h4>Our <span class="color-green mt-5">mission</span></h4>
                <div class="col-md-6 mt-4">
                    <div class="about-text-content">
                        <div class="about-text-wrap">
                            <div class="about-text-left">
                                <ul class="check-mark-list v1">
                                    <li>
                                        <span class="my-icon icon-check"></span>
                                        <p>Empower businesses through innovative technological solutions.</p>
                                    </li>
                                    <li>
                                        <span class="my-icon icon-check"></span>
                                        <p>Customize software to meet and exceed the unique needs of our clients.</p>
                                    </li>
                                    <li>
                                        <span class="my-icon icon-check"></span>
                                        <p>Drive sustainable growth by delivering adaptable and scalable applications.</p>
                                    </li>
                                    <li>
                                        <span class="my-icon icon-check"></span>
                                        <p>Foster long-term partnerships based on trust and reliability.</p>
                                    </li>
                                    <li>
                                        <span class="my-icon icon-check"></span>
                                        <p>Execute projects with precision and excellence to achieve client objectives.</p>
                                    </li>
                                    <li>
                                        <span class="my-icon icon-check"></span>
                                        <p>Embrace creativity and continuous improvement in all aspects of our work.</p>
                                    </li>
                                    <li>
                                        <span class="my-icon icon-check"></span>
                                        <p>Provide exceptional customer service and support throughout the project
                                            lifecycle.</p>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-4">
                    <div class="about-text-content">
                        <div class="about-text-wrap">
                            <div class="about-text-left">
                                <ul class="check-mark-list v1">
                                    <li>
                                        <span class="my-icon icon-check"></span>
                                        <p>Stay ahead of industry trends to offer cutting-edge solutions.</p>
                                    </li>
                                    <li>
                                        <span class="my-icon icon-check"></span>
                                        <p>Make a positive impact on businesses and communities through our work.</p>
                                    </li>
                                    <li>
                                        <span class="my-icon icon-check"></span>
                                        <p>Strive for excellence in every project, ensuring quality and reliability.</p>
                                    </li>
                                    <li>
                                        <span class="my-icon icon-check"></span>
                                        <p>Foster a collaborative and inclusive work environment that values diversity.</p>
                                    </li>
                                    <li>
                                        <span class="my-icon icon-check"></span>
                                        <p>Commit to ethical business practices and social responsibility in all endeavors.
                                        </p>
                                    </li>

                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="counting-items v3 pt-0">
        <div class="container">
            <ul class="counter-item">
                <li>
                    <span class="list-num">01</span>
                    <div class="main-item">
                        <h2>
                            <span class="counter" data-count-min="1" data-count-max="10" data-count-duration="1000"
                                data-count-delay="200">10</span><span>+</span>
                        </h2>
                        <p>Experience</p>
                    </div>
                </li>
                <li>
                    <span class="list-num">02</span>
                    <div class="main-item">
                        <h2><span class="counter" data-count-min="1" data-count-max="150" data-count-duration="1000"
                                data-count-delay="200">150</span></h2>
                        <p>Projects Completed</p>
                    </div>
                </li>
                <li>
                    <span class="list-num">03</span>
                    <div class="main-item">
                        <h2><span class="counter" data-count-min="1" data-count-max="100" data-count-duration="1000"
                                data-count-delay="200">100</span>%</h2>
                        <p>Satisfied Client</p>
                    </div>
                </li>
                <li>
                    <span class="list-num">04</span>
                    <div class="main-item">
                        <h2><span class="counter" data-count-min="1" data-count-max="50" data-count-duration="1000"
                                data-count-delay="200">50</span><span>+</span></h2>
                        <p>Our clients</p>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <section class="client-testomonial v3 pt-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="testomonial-header">
                        <div class="section-title-white v1">
                            <h2>Here is Clients word</h2>
                        </div>
                    </div>
                    <div class="testomonial-content">
                        <div class="slider">
                            <div class="swiper-wrapper">
                                @if ($testimonials->count() > 0)
                                    @foreach ($testimonials as $testimonial)
                                        <div class="swiper-slide">
                                            <div class="description">
                                                <p>{{ $testimonial->comment }}</p>
                                            </div>
                                            <div class="profile">
                                                <div class="profile-img">
                                                    <img src="{{ asset('admin/assets/img/uploads/' . $testimonial->image) }}"
                                                        alt="profile">
                                                </div>
                                                <div class="profile-text">
                                                    <h5>{{ $testimonial->name }}</h5>
                                                    {{-- <p>Director</p> --}}
                                                </div>
                                            </div>

                                        </div>
                                    @endforeach
                                @else
                                    <p>No testimonials found.</p>
                                @endif

                            </div>
                        </div>
                        <ul class="slider-btns">
                            <li>
                                <button class="prev-btn"><span class="my-icon icon-arrow-left"></span></button>
                            </li>
                            <li>
                                <button class="next-btn"><span class="my-icon icon-arrow-right"></span></button>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="client-testomonial-img">
                        <button class="play-btn v1 bouns-anime venobox" data-vbtype="video" data-maxwidth="800px"
                            data-autoplay="true"
                            data-href="https://youtu.be/itIpz_Vn3hU?si=ZAJVdN7irElA62Bu&amp;t=5"><span
                                class="my-icon icon-twitter-t"></span></button>
                        <img src="{{ asset('digitox/assets/img/client-testomonial/v3/testomonial-img.jpg') }}"
                            alt="box-img">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

