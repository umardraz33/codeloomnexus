@extends('digitox.layouts.master')

@section('content')
    <section class="breadcum v1 bg-cover-center" data-background="{{ asset('digitox/assets/img/breadcum/v1/bg.jpg') }}">
        <div class="container">
            <div class="breadcum-content">
                <h2>Service details</h2>
                <ul>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    @if ($servicedetail)
                    <li>{{ $servicedetail->title }}</li>
                    @endif
                </ul>
            </div>
        </div>
    </section>

    <section class="our-service-details v1">
        <div class="container">
            <div class="row align-items-center">
                @if ($servicedetail)
                <div class="col-12">
                    <div class="section-title-white v1">
                        <h6>{{ $servicedetail->service->title }}</h6>
                        <h2>{{ $servicedetail->title }}</h2>
                        <p>{{ $servicedetail->description }}</p>
                    </div>
                    {{-- <ul class="check-mark-list v1">
                    <li>
                        <span class="my-icon icon-check"></span>
                        <p>Aliquam eros justo, posuere loborti vive rra laoreet</p>
                     </li>
                     <li>
                        <span class="my-icon icon-check"></span>
                        <p>laoreet matti ullamc orper posu ere viverra</p>
                     </li>
                     <li>
                        <span class="my-icon icon-check"></span>
                        <p>posuere loborti vive rra laoreet matti ullamc orper</p>
                    </li>
                </ul> --}}
                    <ul class="all-btns">
                        <li>
                            <a href="{{ route('contactus') }}" class="link-anime v1">Contact here</a>
                        </li>
                    </ul>
                </div>
                @else
                <p>No Service Detail found</p>
                @endif

                <div class="col-12">
                    <div class="section-title-white mt-4 v1">
                    <h2>Other Services</h2>
                    </div>
                    <ul class="our-service-cards">
                        @if ($alternateservices->count() > 0)
                            @foreach ($alternateservices as $alternateservice)
                                <li class="our-service-card">
                                    <a href="{{ route('service-details', $alternateservice->slug) }}">
                                    <div class="our-service-card-header">
                                        <div class="card-icon">
                                            <img style="width: 70px; height:70px"
                                                src="{{ asset('admin/assets/img/svg/' . $alternateservice->svg) }}"
                                                alt="">
                                        </div>
                                    </div>
                                    <h4>{{ $alternateservice->title }}</h4>
                                    <p>{{ Str::limit($alternateservice->description, 150) }}</p>
                                    </a>
                                </li>
                            @endforeach
                        @else
                            <p>No alternateservices found.</p>
                        @endif

                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="about-us v1 pt-0">
        <div class="container">
            <div class="row mb-4">
                <h1>Projects Overview</h1>
            </div>
            @if ($project)
            <div class="row align-items-center">
                <div class="col-xl-6">
                    <div class="about-img">
                        <img src="{{ asset('admin/assets/img/uploads/' . $project->image) }}" alt="about-img">
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about-text">
                        <div class="section-title-white v1">
                            {{-- <h2>{{ $project->title }}</h2> --}}
                            <p>{!! $project->description !!}</p>
                        </div>

                    </div>
                </div>
            </div>
            @else
            <p>No project found</p>
            @endif

        </div>
    </section>

@endsection
