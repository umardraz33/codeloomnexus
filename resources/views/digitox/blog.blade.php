@extends('digitox.layouts.master')

@section('content')
    <section class="breadcum v1 bg-cover-center" data-background="{{ asset('digitox/assets/img/breadcum/v1/bg.jpg') }}">
        <div class="container">
            <div class="breadcum-content">
                <h2>Blog</h2>
                <ul>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Blogs</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="blog v1">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-xl-8">
                    @if ($blogs->count() > 0)
                        @foreach ($searches->isEmpty() ? $blogs : $searches as $blog)
                            <div class="blog-post-card">
                                <div class="post-img">
                                    <a href="{{ route('blog.detail', $blog->slug) }}">
                                        @if (isset($blog->images[0]))
                                            <img src="{{ asset('admin/assets/img/uploads/' . $blog->images[0]) }}"
                                                alt="card">
                                        @endif
                                    </a>
                                </div>
                                <div class="post-body">
                                    <ul class="info-list">
                                        <li>
                                            <div class="my-icon icon-calendar-days"></div>
                                            <p><a href="#">{{ $blog->created_at->format('F d , Y') }}</a></p>
                                        </li>
                                        {{-- <li>
                                <div class="my-icon icon-comments"></div>
                                <p><a href="#">Comments (05)</a></p>
                            </li> --}}
                                    </ul>
                                    <h4><a href="{{ route('blog.detail', $blog->slug) }}">{{ $blog->title }}</a></h4>
                                    <p>{{ Str::limit($blog->description, 250) }}</p>
                                </div>
                                <div class="post-footer">
                                    <div class="profile">
                                        {{-- <div class="profile-img">
                                <img src="{{ asset('digitox/assets/img/blog-post/profile-1.png')}}" alt="profile">
                            </div>
                            <div class="profile-text">
                                <h5>Shame leo suha</h5>
                                <p>Director</p>
                            </div> --}}
                                    </div>
                                    <a href="{{ route('blog.detail', $blog->slug) }}" class="link-anime v2">Read more <span
                                            class="my-icon icon-arrow-right"></span></a>
                                </div>

                            </div>
                        @endforeach
                    @else
                        <p>No blogs found.</p>
                    @endif
                    {{-- <div class="blog-post-card video-box">
                    <div class="post-img">
                        <button class="play-btn v1 venobox vbox-item" data-vbtype="video" data-maxwidth="800px" data-autoplay="true" data-href="https://youtu.be/OzGudoy7keA?start=79"> <span class="my-icon icon-twitter-t"></span></button>
                        <img src="{{ asset('digitox/assets/img/blog-post/blog-card-2.jpg')}}" alt="card">
                    </div>
                    <div class="post-body">
                        <ul class="info-list">
                            <li>
                                <div class="my-icon icon-calendar-days"></div>
                                <p><a href="#">October 19, 2022</a></p>
                            </li>
                            <li>
                                <div class="my-icon icon-comments"></div>
                                <p><a href="#">Comments (05)</a></p>
                            </li>
                        </ul>
                        <h4><a href="blog-details.html">Innovative Techniques For Digital Marketing Success</a></h4>
                        <p>Aliquam eros justo, posuere loborti viverra laoreet matti ullamcorper posuere viverra .Aliquam eros justo, posuere lobortis, viverra laoreet augue mattis fermentum laoreet matti ullamcorper posuere viverra .Aliquam eros justo, </p>
                    </div>
                    <div class="post-footer">
                        <div class="profile">
                            <div class="profile-img">
                                <img src="{{ asset('digitox/assets/img/blog-post/profile-2.png')}}" alt="profile">
                            </div>
                            <div class="profile-text">
                                <h5>Shame leo suha</h5>
                                <p>Director</p>
                            </div>
                        </div>
                        <a href="blog-details.html" class="link-anime v2">Read more <span class="my-icon icon-arrow-right"></span></a>
                    </div>
                </div>
                <div class="blog-post-card">
                    <div class="post-img">
                        <a href="blog-details.html">
                            <img src="{{ asset('digitox/assets/img/blog-post/blog-card-3.jpg')}}" alt="card">
                        </a>
                    </div>
                    <div class="post-body">
                        <ul class="info-list">
                            <li>
                                <div class="my-icon icon-calendar-days"></div>
                                <p><a href="#">October 19, 2022</a></p>
                            </li>
                            <li>
                                <div class="my-icon icon-comments"></div>
                                <p><a href="#">Comments (05)</a></p>
                            </li>
                        </ul>
                        <h4><a href="blog-details.html">Innovative Techniques For Digital Marketing Success</a></h4>
                        <p>Aliquam eros justo, posuere loborti viverra laoreet matti ullamcorper posuere viverra .Aliquam eros justo, posuere lobortis, viverra laoreet augue mattis fermentum laoreet matti ullamcorper posuere viverra .Aliquam eros justo, </p>
                    </div>
                    <div class="post-footer">
                        <div class="profile">
                            <div class="profile-img">
                                <img src="{{ asset('digitox/assets/img/blog-post/profile-1.png')}}" alt="profile">
                            </div>
                            <div class="profile-text">
                                <h5>Shame leo suha</h5>
                                <p>Director</p>
                            </div>
                        </div>
                        <a href="blog-details.html" class="link-anime v2">Read more <span class="my-icon icon-arrow-right"></span></a>
                    </div>
                </div> --}}
                    {{-- <div class="blog-post-card post-slider">
                    <div class="slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="post-img">
                                    <a href="blog-details.html">
                                        <img src="{{ asset('digitox/assets/img/blog-post/blog-card-4.jpg')}}" alt="card">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="post-img">
                                    <a href="blog-details.html">
                                        <img src="{{ asset('digitox/assets/img/blog-post/blog-card-1.jpg')}}" alt="card">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="post-img">
                                    <a href="blog-details.html">
                                        <img src="{{ asset('digitox/assets/img/blog-post/blog-card-2.jpg')}}" alt="card">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="post-img">
                                    <a href="blog-details.html">
                                        <img src="{{ asset('digitox/assets/img/blog-post/blog-card-3.jpg')}}" alt="card">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <button class="prev-btn"><span class="my-icon icon-angle-left"></span></button>
                        <button class="next-btn"><span class="my-icon icon-angle-right"></span></button>
                    </div>
                    <div class="post-body">
                        <ul class="info-list">
                            <li>
                                <div class="my-icon icon-calendar-days"></div>
                                <p><a href="#">October 19, 2022</a></p>
                            </li>
                            <li>
                                <div class="my-icon icon-comments"></div>
                                <p><a href="#">Comments (05)</a></p>
                            </li>
                        </ul>
                        <h4><a href="blog-details.html">Innovative Techniques For Digital Marketing Success</a></h4>
                        <p>Aliquam eros justo, posuere loborti viverra laoreet matti ullamcorper posuere viverra .Aliquam eros justo, posuere lobortis, viverra laoreet augue mattis fermentum laoreet matti ullamcorper posuere viverra .Aliquam eros justo, </p>
                    </div>
                    <div class="post-footer">
                        <div class="profile">
                            <div class="profile-img">
                                <img src="{{ asset('digitox/assets/img/blog-post/profile-2.png')}}" alt="profile">
                            </div>
                            <div class="profile-text">
                                <h5>Shame leo suha</h5>
                                <p>Director</p>
                            </div>
                        </div>
                        <a href="blog-details.html" class="link-anime v2">Read more <span class="my-icon icon-arrow-right"></span></a>
                    </div>
                </div> --}}
                    <div class="pagination" style="justify-content: center !important; margin-top: 20px;">
                        {{ $blogs->links('vendor.pagination.bootstrap-5') }}
                        {{-- <ul>
                        <li class="active"><a href="#">01</a></li>
                        <li><a href="#">02</a></li>
                        <li><a href="#">03</a></li>
                        <li><a href="#">04</a></li>
                    </ul> --}}
                    </div>
                </div>
                <div class="col-lg-5 col-xl-4">
                    <div class="blog-sidebar__wrapper">
                        <div class="blog-sidebar__widget">
                            <div class="blog-sidebar__widget-head">
                                <h4 class="blog-sidebar__widget-title">Search</h4>
                            </div>
                            <div class="blog-sidebar__widget-content">
                                <div class="search-widget">
                                    <form action="{{ route('blog') }}">
                                        <input type="search" name="search" placeholder="Search by title">
                                        <button type="submit"><span class="my-icon icon-magnifying-glass"></span></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="blog-sidebar__widget">
                            <div class="blog-sidebar__widget-head">
                                <h4 class="blog-sidebar__widget-title">Category</h4>
                            </div>
                            <div class="blog-sidebar__widget-content">
                                <div class="category-list">
                                    <ul>
                                        @if ($services->count() > 0)
                                            @foreach ($services as $service)
                                                <li>
                                                    <a
                                                        href="{{ route('service', $service->slug) }}">{{ $service->title }}</a>
                                                </li>
                                            @endforeach
                                        @else
                                            <li>
                                                <a href="#">No services available</a>
                                            </li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="blog-sidebar__widget">
                            <div class="blog-sidebar__widget-head">
                                <h4 class="blog-sidebar__widget-title">Recent Post</h4>
                            </div>
                            <div class="blog-sidebar__widget-content">
                                <div class="post-list">
                                    <ul>
                                        @if ($recentPosts->count() > 0)
                                            @foreach ($recentPosts as $recentPost)
                                                <li>
                                                    <div class="post-img">
                                                        @if (isset($recentPost->images[0]))
                                                            <a href="{{ route('blog.detail', $recentPost->slug) }}"><img
                                                                    src="{{ asset('admin/assets/img/uploads/' . $recentPost->images[0]) }}"
                                                                    alt="recent-post"></a>
                                                        @endif
                                                    </div>
                                                    <div class="post-text">
                                                        <h6><a
                                                                href="{{ route('blog.detail', $recentPost->slug) }}">{{ $recentPost->title }}</a>
                                                        </h6>
                                                        <div class="date">
                                                            <span class="my-icon icon-calendar-days"></span>
                                                            <p>{{ $recentPost->created_at->format('F d , Y') }}</p>
                                                        </div>
                                                    </div>
                                                </li>
                                            @endforeach
                                        @else
                                            <li> No recent Posts available</li>
                                        @endif
                                        {{-- <li>
                                        <div class="post-img">
                                            <a href="blog-details.html"><img src="{{ asset('digitox/assets/img/widgets/popular-post/post-2.jpg')}}" alt="recent-post"></a>
                                        </div>
                                        <div class="post-text">
                                            <h6><a href="blog-details.html">A picture is worth of standard like start of.</a></h6>
                                            <div class="date">
                                                <span class="my-icon icon-calendar-days"></span>
                                                <p>October 19, 2022</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="post-img">
                                            <a href="blog-details.html"><img src="{{ asset('digitox/assets/img/widgets/popular-post/post-3.jpg')}}" alt="recent-post"></a>
                                        </div>
                                        <div class="post-text">
                                            <h6><a href="blog-details.html">A picture is worth of standard like start of.</a></h6>
                                            <div class="date">
                                                <span class="my-icon icon-calendar-days"></span>
                                                <p>October 19, 2022</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="post-img">
                                            <a href="blog-details.html"><img src="{{ asset('digitox/assets/img/widgets/popular-post/post-4.jpg')}}" alt="recent-post"></a>
                                        </div>
                                        <div class="post-text">
                                            <h6><a href="blog-details.html">A picture is worth of standard like start of.</a></h6>
                                            <div class="date">
                                                <span class="my-icon icon-calendar-days"></span>
                                                <p>October 19, 2022</p>
                                            </div>
                                        </div>
                                    </li> --}}
                                    </ul>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="blog-sidebar__widget">
                        <div class="blog-sidebar__widget-head">
                            <h4 class="blog-sidebar__widget-title">Tags</h4>
                        </div>
                        <div class="blog-sidebar__widget-content">
                            <div class="tags-widgets">
                                <ul>
                                    <li><a href="#">All Project</a></li>
                                    <li><a href="#">Wareframing</a></li>
                                    <li><a href="#">Graphics</a></li>
                                    <li><a href="#">Interiour</a></li>
                                    <li><a href="#">Design</a></li>
                                </ul>
                            </div>
                        </div>
                    </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
