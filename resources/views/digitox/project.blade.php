@extends('digitox.layouts.master')

@section('content')
<section class="breadcum v1 bg-cover-center" data-background="{{asset('digitox/assets/img/breadcum/v1/bg.jpg')}}">
    <div class="container">
        <div class="breadcum-content">
            <h2>Project</h2>
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Project</li>
            </ul>
        </div>
    </div>
</section>

<section class="our-case-study v1">
    <div class="container">
        <div class="row">
            @if ($projects->count() > 0)
            @foreach ($projects as $project)
            <div class="col-md-6 col-xl-4">
                <div class="our-card">
                    <a href="{{ route('project.details' , $project->slug) }}">
                    <div class="tag">{{ $project->service->title }}</div>
                    <div class="our-card-img">
                        <a href="{{ route('project.details' , $project->slug) }}">
                            <img src="{{ asset('admin/assets/img/uploads/' . $project->image) }}" alt="card-img">
                        </a>
                    </div>
                    
                    </a>
                </div>
            </div>

            @endforeach

            @else
            <p>No projects found.</p>
        @endif

        </div>
    </div>
</section>
@endsection
