@extends('digitox.layouts.master')

@section('content')
    <section class="breadcum v1 bg-cover-center" data-background="{{ asset('digitox/assets/img/breadcum/v1/bg.jpg') }}">
        <div class="container">
            <div class="breadcum-content">
                <h2>Service</h2>
                <ul>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>{{ $service->title }}</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="our-service v1">
        <div class="container">
            <div class="row">
                @if ($servicedetails->count() > 0)
                    @foreach ($servicedetails as $servicedetail)
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="our-service-card">
                                <a href="{{ route('service-details', $servicedetail->slug) }}">
                                    <div class="our-service-card-header">
                                        <div class="card-icon">
                                            <img style="width: 70px; height:70px"
                                                src="{{ asset('admin/assets/img/svg/' . $servicedetail->svg) }}"
                                                alt="">
                                        </div>
                                        <a href="{{ route('service-details', $servicedetail->slug) }}" class="link-arrow">
                                            <span class="my-icon icon-dobble-angles-right"></span>
                                        </a>
                                    </div>
                                    <h4><a
                                            href="{{ route('service-details', $servicedetail->slug) }}">{{ $servicedetail->title }}</a>
                                    </h4>
                                    <p style="text-align: left">{{ Str::limit($servicedetail->description, 150 )}} </p>
                                </a>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p>No Services found.</p>
                @endif

            </div>
        </div>
    </section>
@endsection
