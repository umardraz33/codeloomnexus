@extends('digitox.layouts.master')

@section('content')
    <section class="breadcum v1 bg-cover-center"
        data-background="{{ asset('digitox/assets/img/about-the-company/v2/box-img.jpg') }}">
        <div class="container">
            <div class="breadcum-content">
                <h2>Project Details</h2>
                <ul>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Project Details</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="project-details v1">
        <div class="container">
            @if ($project)

            <div class="row">
                <div class="col-xl-8">
                    <div class="project-img">
                        <img src="{{ asset('admin/assets/img/uploads/' . $project->image) }}" alt="project-img">
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="project-info">
                        <ul class="info-list">
                            <li>
                                <p>Project</p>
                                <h4>{{ $project->title }}</h4>
                            </li>
                            <li>
                                <p>Category</p>
                                <h4>{{ $project->service->title }}</h4>
                            </li>
                        </ul>
                        {{-- <ul class="social">
                        <li><a href="#"><span class="my-icon icon-facebook"></span></a></li>
                        <li><a href="#"><span class="my-icon icon-instagram"></span></a></li>
                        
                        <li><a href="https://www.linkedin.com/company/codeloom-nexus/about/" target="_blank"><span class="my-icon icon-linkedin-in"></span></a></li>
                    </ul> --}}
                    </div>
                </div>
            </div>
            <div class="project-description">
                {{-- <h2>{{ $project->title }}</h2> --}}
                <p>{!! $project->description !!}</p>
                {{-- the below 1 is for is for textEditor(CKEditor) --}}
                {{-- @if (isset($project->listItems) && is_array($project->listItems) && count($project->listItems) > 0)
                    <ul class="check-mark-list v1">
                        @foreach ($project->listItems as $listItem)
                            <li>
                                <span class="my-icon icon-check"></span>
                                <p>{!! $listItem !!}</p>
                            </li>
                        @endforeach
                    </ul>
                @endif --}}
                {{-- <ul class="check-mark-list v1">
                    <li>
                        <span class="my-icon icon-check"></span>
                        <p>Aliquam eros justo, posuere loborti vive rra laoreet</p>
                    </li>
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
                        <p>laoreet matti ullamc orper posu ere viverra</p>
                    </li>
                    <li>
                        <span class="my-icon icon-check"></span>
                        <p>laoreet matti ullamc orper posu ere viverra</p>
                    </li>
                    <li>
                        <span class="my-icon icon-check"></span>
                        <p>posuere loborti vive rra laoreet matti ullamc orper</p>
                    </li>
                    <li>
                        <span class="my-icon icon-check"></span>
                        <p>posuere loborti vive rra laoreet matti ullamc orper</p>
                    </li>
                    <li>
                        <span class="my-icon icon-check"></span>
                        <p>posuere loborti vive rra laoreet matti ullamc orper</p>
                    </li>
                </ul> --}}
            </div>
            @else
            <p>No project detail found</p>
            @endif
        </div>
    </section>
@endsection
