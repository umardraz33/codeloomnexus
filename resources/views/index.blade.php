@extends('digitox.layouts.master')

@section('content')
    <section class="banner v1 bg-cover-center" data-background="assets/img/banner/v1/banner-bg-1.png">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-lg-1">
                    <div class="banner-profile">
                        <img src="{{ asset('digitox/assets/img/banner/v1/codeloom.jpg') }}" alt="banner-profile">
                        <div class="shap-1" data-background="assets/img/banner/v1/shap-2.png"></div>
                        <div class="shap-2" data-background="assets/img/banner/v1/shap-1.png"></div>
                        <div class="shap-3" data-background="assets/img/banner/v1/shap-3.png"></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="banner-content">
                        <div class="section-title-white v1">
                            <h6>Boost your business</h6>
                            <h4>"Empowering Business Expansion with Flexible Solutions"
                            </h4>
                            <p>Codeloom Nexus is a dynamic IT powerhouse dedicated to weaving innovative solutions at the intersection of technology and business. With a deep-rooted commitment to excellence, we specialize in crafting bespoke software solutions tailored to propel businesses forward in the digital landscape. Our team of adept engineers and visionaries collaborates seamlessly to design, develop, and deploy cutting-edge applications that not only meet but exceed the evolving needs of our clients. At Codeloom Nexus, we don't just provide solutions; we architect opportunities for growth, enabling businesses to thrive in an ever-changing market.</p>
                        </div>
                        <ul class="all-btns">
                            <li>
                                <a href="{{ route('contactus') }}" class="link-anime v1">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="logo-slider v1">
        <div class="container" style="    border-radius: 8px;
        background: white;
        padding: 10px;">
            <div class="slider">
                <div class="swiper-wrapper">
                    @if ($projects->count() > 0)
                        @foreach ($projects as $project)
                            <div class="swiper-slide">
                                <a href="{{ route('project.details', $project->slug) }}"><img style="width: 100px;"
                                        src="{{ asset('admin/assets/img/logo/' . $project->project_logo) }}" alt="logo"></a>
                            </div>
                        @endforeach
                    @else
                        <p>No projects found.</p>
                    @endif
                    {{-- <div class="swiper-slide">
                    <a href="#"><img src="{{ asset('digitox/assets/img/logo-slider/logo-2.png')}}" alt="logo"></a>
                </div>
                <div class="swiper-slide">
                    <a href="#"><img src="{{ asset('digitox/assets/img/logo-slider/logo-3.png')}}" alt="logo"></a>
                </div>
                <div class="swiper-slide">
                    <a href="#"><img src="{{ asset('digitox/assets/img/logo-slider/logo-4.png')}}" alt="logo"></a>
                </div>
                <div class="swiper-slide">
                    <a href="#"><img src="{{ asset('digitox/assets/img/logo-slider/logo-5.png')}}" alt="logo"></a>
                </div>
                <div class="swiper-slide">
                    <a href="#"><img src="{{ asset('digitox/assets/img/logo-slider/logo-6.png')}}" alt="logo"></a>
                </div>
                <div class="swiper-slide">
                    <a href="#"><img src="{{ asset('digitox/assets/img/logo-slider/logo-3.png')}}" alt="logo"></a>
                </div> --}}
                </div>
            </div>
        </div>
    </section>

    <section class="about-us v1 py-0">
        <div class="container">
            <div class="row align-items-xl-center">
                <div class="col-xl-6">
                    <div class="about-imgs">
                        <div class="about-big-img">
                            <img src="{{ asset('digitox/assets/img/about-us/v1/about-img.jpg') }}" alt="about-img">
                        </div>
                        <div class="about-small-img">
                            <img src="{{ asset('digitox/assets/img/about-us/v1/about-small-img.jpg') }}"
                                alt="about-small-img">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about-text">
                        <div class="section-title-white v1">
                            <h6>About Us</h6>
                            <h2>We Propel Brands and Businesses into the Digital Future!</h2>
                            <p>CodeLoom Nexus, a Forward-Thinking Digital Agency For IT Solutions. Our In-House Team of IT Experts
                                Specializes in Website Development, eCommerce, Mobile Apps, Social Media, and SEO Services,
                                Delivering Results that Speak for Themselves.</p>
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
                                            <p>Provide exceptional customer service and support throughout the project lifecycle.</p>
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
                                            <p>Commit to ethical business practices and social responsibility in all endeavors.</p>
                                        </li>
                                        
                                    </ul>
                                </div>
                               
                            </div>
                        </div>
            </div>
</div>
       
        </div>
    </section>

    <section class="our-service v1">
        <div class="container">
            <div class="section-title-center-white v1">
                <h6>Our Services</h6>
                <h2>We Provide Best solutions for your business.</h2>
            </div>
            <div class="row" id="services-container">
                @if ($latestServices->count() > 0)
                    @foreach ($latestServices as $index => $latestService)
                        <div class="col-md-6 col-xl-4 mb-4 service-card" style="{{ $index >= 6 ? 'display: none;' : '' }}">
                            <div class="our-service-card">
                                <div class="our-service-card-header">
                                    <div class="card-icon">
                                        <img style="width: 70px; height: 70px"
                                            src="{{ asset('admin/assets/img/svg/' . $latestService->svg) }}" alt="">
                                    </div>
                                    <a href="{{ route('service-details', $latestService->slug) }}" class="link-arrow">
                                        <span>Read More</span>
                                    </a>
                                </div>
                                <h4><a href="{{ route('service-details', $latestService->slug) }}">{{ $latestService->title }}</a></h4>
                                <p style="text-align: left">{{ Str::limit($latestService->description, 200) }}</p>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p>No Latest Services found.</p>
                @endif
            </div>
            @if ($latestServices->count() > 6)
                <div class="text-center">
                    <button id="load-more" class="link-anime v1">See More</button>
                </div>
            @endif
        </div>
    </section>
    <section class="our-company v1 bg-dotts-shap-left">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 order-xl-1">
                    <div class="our-company-img">
                        <div class="main-img">
                            <img src="{{ asset('digitox/assets/img/our-company/v1/our-company-img.jpg') }}"
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
                            <h6>Our Company</h6>
                            <h2>We Are Here To Help You</h2>
                            <p>At CodeLoom Nexus Digital, we are dedicated to relentless advancement. We continuously seek innovative ideas and strategies to propel personal and business growth, surpassing client aspirations. Our team members are the cornerstone of our success, and we prioritize their development through comprehensive training, unwavering support, and ample resources. Together, we strive for excellence, driving CodeLoom Nexus Digital to new heights of achievement and distinction in the digital landscape. Contact us today to get a free quote and discover how we can elevate your digital presence!. </p>
                        </div>
                        <ul class="all-btns">
                            <li>
                                <a href="{{ route('project') }}" class="link-anime v2">Discover more</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="our-team v1">
        <div class="container">
            <div class="section-title-center-white v1">
                <h6>Our Professional Team</h6>
                <h2>Meet our Professional Team</h2>
            </div>
            <div class="row justify-content-center">
                @if ($teams->count() > 0)
                    @foreach ($teams as $team)
                        <div class="col-md-6 col-lg-4">
                            <div class="team-card">
                                <div class="team-card-img">
                                    {{-- <ul class="social-link">
                            
                            <li><a href="#"><span class="my-icon icon-facebook"></span></a></li>
                            <li><a href="#"><span class="my-icon icon-instagram"></span></a></li>
                        </ul> --}}
                                    <img src="{{ asset('admin/assets/img/uploads/' . $team->image) }}" alt="profile">
                                </div>
                                <div class="team-card-text">
                                    <div class="text">
                                        <h5>{{ $team->name }}</h5>
                                        <p>{{ $team->designation }}</p>
                                    </div>
                                    {{-- <a class="link-btn" href="team-details.html"><span class="my-icon icon-arrow-right"></span></a> --}}
                                </div>

                            </div>
                        </div>
                    @endforeach
                @else
                    <p>No Team members available.</p>
                @endif
                {{-- <div class="col-md-6 col-lg-4">
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
            </div> --}}
            </div>
        </div>
    </section>

    <section class="about-the-company v1 bg-dotts-shap-right">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-company-img">
                        <button class="play-btn v2 venobox" data-vbtype="video" data-maxwidth="800px" data-autoplay="true"
                            data-href="https://youtu.be/itIpz_Vn3hU?si=ZAJVdN7irElA62Bu&amp;t=5"><span
                                class="my-icon icon-twitter-t"></span></button>
                        <img src="{{ asset('digitox/assets/img/about-the-company/v1/box-img.jpg') }}" alt="box-img">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-company-text">
                        <div class="section-title-white v1">
                            <h2>Our Journey to a
                                Leading Agency
                                </h2>
                            <p> We specialize in designing and developing custom web and mobile applications tailored to meet the unique needs of businesses worldwide. Our expert team combines innovative technologies with user-centric design to create powerful digital solutions that drive growth, enhance efficiency, and deliver exceptional user experiences. Whether it's crafting intuitive mobile apps or robust web platforms, we are committed to delivering high-quality solutions that empower our clients to succeed in today's digital landscape.
                            </p>
                        </div>
                        <ul class="check-mark-list v3">
                            <li>
                                <span class="my-icon icon-check"></span>
                                <p>Customized Solutions</p>
                            </li>
                            <li>
                                <span class="my-icon icon-check"></span>
                                <p>Innovative Technologies</p>
                            </li>
                            <li>
                                <span class="my-icon icon-check"></span>
                                <p>User-Centric Design</p>
                            </li>
                            <li>
                                <span class="my-icon icon-check"></span>
                                <p>Global Reach</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="client-testomonial v1 pb-0">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-9">
                    <div class="testomonial-header">
                        <div class="section-title-white v1">
                            <h6>Client Feedback</h6>
                            <h2>What Our Client says?</h2>
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
                    <div class="testomonial-content">
                        <div class="slider">
                            <div class="swiper-wrapper">
                                @if ($testimonials->count() > 0)
                                    @foreach ($testimonials as $testimonial)
                                        <div class="swiper-slide">
                                            <div class="profile">
                                                <div class="profile-img">
                                                    <img src="{{ asset('admin/assets/img/uploads/' . $testimonial->image) }}"
                                                        alt="profile" style="border-radius: 50%">
                                                </div>
                                                <div class="profile-text">
                                                    <h5>{{ $testimonial->name }}</h5>
                                                    <p>{{ $testimonial->title }}</p>
                                                </div>
                                            </div>
                                            <div class="description">
                                                <p>{{ $testimonial->comment }}</p>
                                            </div>
                                        </div>
                                     
                                    @endforeach
                                @else
                                    <p>No Testimonials found.</p>
                                @endif
                            </div>
                        </div>

                    </div>
                </div>
              
            </div>
        </div>
    </section> --}}

    <section class="our-case-study v1">
        <div class="container">
            <div class="section-title-center-white v1">
                <h6>Our Case study</h6>
                <h2>Check out our Top Case Studies</h2>
            </div>
            <div class="slider">
                <div class="swiper-wrapper">
                    @if ($projects->count() > 0)
                        @foreach ($projects as $project)
                            <div class="swiper-slide">
                                <div class="our-card">
                                    <div class="tag">{{ $project->service->title }}</div>
                                    <div class="our-card-img">
                                        <a href="{{ route('project.details', $project->slug) }}">
                                            <img src="{{ asset('admin/assets/img/uploads/' . $project->image) }}"
                                                alt="card-img">
                                        </a>
                                    </div>
                                  
                                </div>
                            </div>
                        @endforeach
                    @else
                        <p>No Projects found.</p>
                    @endif

                </div>
                <button class="prev-btn"><span class="my-icon icon-arrow-left"></span></button>
                <button class="next-btn"><span class="my-icon icon-arrow-right"></span></button>
            </div>
        </div>
    </section>

    <section class="recent-posts v1 pt-0">
        <div class="container">
            <div class="section-title-white">
                <div class="title-left-right">
                    <div class="left-content">
                        <h6>Our Recent posts</h6>
                        <h2>Check our latest news & happenings</h2>
                    </div>
                    <a class="link-anime v1" href="{{ route('blog') }}">View all Articales</a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    @if ($recentPosts->isNotEmpty())
                        <div class="post-card">

                            <div class="post-card-img">
                                <div class="date-info">
                                    <h5>{{ $recentPosts[0]->created_at->format('d') }}</h5>
                                    <p>{{ $recentPosts[0]->created_at->format('F') }}</p>
                                </div>
                                <a href="{{ route('blog.detail', $recentPosts[0]->slug) }}"><img
                                        src="{{ asset('admin/assets/img/uploads/' . $recentPosts[0]->images[0]) }}"
                                        alt="card"></a>
                            </div>
                            <div class="post-card-info">
                                <h4><a
                                        href="{{ route('blog.detail', $recentPosts[0]->slug) }}">{{ $recentPosts[0]->title }}</a>
                                </h4>
                                <p>{{ $recentPosts[0]->description }}</p>
                                <a href="{{ route('blog.detail', $recentPosts[0]->slug) }}" class="link-arrow">Read
                                    More</a>
                            </div>
                        </div>
                    @else
                        <p>No Recent Posts found.</p>
                    @endif
                </div>
                <div class="col-lg-6">
                    <ul class="post-list">
                        @if ($recentPosts->count() > 0)
                            @foreach ($recentPosts->slice(1) as $post)
                                <li>
                                    <ul class="blog-info">
                                        <li>
                                            <span class="my-icon icon-clock"></span>
                                            <p><a href="#">{{ $post->created_at->format('F d , Y') }}</a></p>
                                        </li>
                                        {{-- <li>
                                <span class="my-icon icon-comments"></span>
                                <p><a href="#">Comments (05)</a></p>
                            </li> --}}
                                    </ul>
                                    
                                    <h5><a href="{{ route('blog.detail', $post->slug) }}">{{ $post->title }}</a></h5>
                                    <p>{{ Str::limit($post->description, 200) }}</p>
                                    <a href="{{ route('blog.detail', $post->slug) }}" class="link-arrow">Read More</a>
                                </li>
                            @endforeach
                        @else
                            <p>No Recent Posts found.</p>
                        @endif
                        {{-- <li>
                        <ul class="blog-info">
                            <li>
                                <span class="my-icon icon-clock"></span>
                                <p><a href="#">january 18, 2023</a></p>
                            </li>
                            <li>
                                <span class="my-icon icon-comments"></span>
                                <p><a href="#">Comments (05)</a></p>
                            </li>
                        </ul>
                        <h5><a href="#">Children can change the worlds history</a></h5>
                        <p>Our mission is there are  variations  passages  Lorem Ipsum available, but the majority have suffered alteration Our mission is there are  variations </p>
                        <a href="#" class="link-arrow">Read More</a>
                    </li>
                    <li>
                        <ul class="blog-info">
                            <li>
                                <span class="my-icon icon-clock"></span>
                                <p><a href="#">january 18, 2023</a></p>
                            </li>
                            <li>
                                <span class="my-icon icon-comments"></span>
                                <p><a href="#">Comments (05)</a></p>
                            </li>
                        </ul>
                        <h5><a href="#">Save food for poor people dont west food & water</a></h5>
                        <p>Our mission is there are  variations  passages  Lorem Ipsum available, but the majority have suffered alteration Our mission is there are  variations </p>
                        <a href="#" class="link-arrow">Read More</a>
                    </li> --}}
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            let currentCount = 6;
            const increment = 6;
            const serviceCards = document.querySelectorAll('.service-card');
            const loadMoreButton = document.getElementById('load-more');
    
            loadMoreButton.addEventListener('click', function () {
                for (let i = currentCount; i < currentCount + increment; i++) {
                    if (serviceCards[i]) {
                        serviceCards[i].style.display = 'block';
                    }
                }
                currentCount += increment;
                if (currentCount >= serviceCards.length) {
                    loadMoreButton.style.display = 'none';
                }
            });
        });
    </script>
@endsection
