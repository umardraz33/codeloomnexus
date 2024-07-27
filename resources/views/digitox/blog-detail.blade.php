@extends('digitox.layouts.master')

@section('content')
    <section class="breadcum v1 bg-cover-center" data-background="{{ asset('digitox/assets/img/breadcum/v1/bg.jpg') }}">
        <div class="container">
            <div class="breadcum-content">
                <h2>{{ $blog->title }}</h2>
                <ul>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Blog Details</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="blog-details v1">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-xl-8">
                    @if ($blog)

                    <div class="blog-details-left">
                        <div class="blog-img">
                            @if (isset($blog->images) && count($blog->images) > 0)
                                @isset($blog->images[0])
                                    <img src="{{ asset('admin/assets/img/uploads/' . $blog->images[0]) }}" alt="card">
                                @endisset
                            @endif
                        </div>
                        <ul class="info-list">
                            {{-- <li>
                            <div class="my-icon icon-user"></div>
                            <p><a href="#">By admin</a></p>
                        </li> --}}
                            <li>
                                <div class="my-icon icon-calendar-days"></div>
                                <p><a href="#">{{ $blog->created_at->format('F d , Y') }}</a></p>
                            </li>
                            {{-- <li>
                            <div class="my-icon icon-comments"></div>
                            <p><a href="#">Comments (05)</a></p>
                        </li> --}}
                        </ul>
                        <div class="main-text">
                            <h2>{{ $blog->title }}</h2>
                            <p>{{ $blog->description }}</p>
                            <p>{{ $blog->detail_description }}</p>
                        </div>
                        <div class="check-out-box" style="padding-bottom: 35px;">
                            @if (isset($blog->images) && count($blog->images) > 0)
                                @foreach ($blog->images as $index => $image)
                                    @if ($index != 0)
                                        <div class="box">
                                            <img src="{{ asset('admin/assets/img/uploads/' . $image) }}" alt="box-img">

                                        </div>
                                    @endif
                                @endforeach
                            @else
                                <div class="box-left">
                                    "No Images available"
                                </div>
                            @endif
                            {{-- <div class="box-right">
                            <h4>Check out these</h4>
                            <ul class="check-mark-list v2">
                                <li>
                                    <span class="my-icon icon-check"></span>
                                    <p>Code quality</p>
                                </li>
                                <li>
                                    <span class="my-icon icon-check"></span>
                                    <p>visual of quality</p>
                                </li>
                                <li>
                                    <span class="my-icon icon-check"></span>
                                    <p>Regular update of business</p>
                                </li>
                                <li>
                                    <span class="my-icon icon-check"></span>
                                    <p>Stand up work on the stress</p>
                                </li>
                                <li>
                                    <span class="my-icon icon-check"></span>
                                    <p>Harm less sefty user</p>
                                </li>
                            </ul>
                        </div> --}}
                        </div>
                        {{-- <article class="article-text">
                        <p>Aliquam eros justo, posuere loborti viverra laoreet matti ullamcper posuere viverra .Aliquam s justo, posuere so lobortis non, viverra laoreet posuere loborti Aliquam eros justo, posuere loborti viverra laoreet matti ullamcorper posuere viverra .Aliquam s justo, posuere so lobortis non, viverra laoreet posuere loborti/p>
                        <h4>Jhone doe</h4>
                        </article>
                        <p>Aliquam eros justo, posuere loborti viverra laoreet matti ullamcorper posuere viverra .Aliquerosjusto, posuere lobortis, viverra laoreet augue mattis fermentum ullamcorper viverroreet Aliquam erosjusto, posuere loborti viverra laoreet matti ullamcorper posuere viverra.</p> --}}
                        {{-- <div class="post-tag-social">
                        <div class="tags-links">
                            <h4>Tags: </h4>
                            <ul>
                                <li><a href="#">Graphics</a></li>
                                <li><a href="#">Interiour</a></li>
                                <li><a href="#">Design</a></li>
                            </ul>
                        </div>
                        <ul class="social">
                            <li><a href="#"><span class="my-icon icon-facebook"></span></a></li>
                            <li><a href="#"><span class="my-icon icon-instagram"></span></a></li>
                            
                            <li><a href="https://www.linkedin.com/company/codeloom-nexus/about/" target="_blank"><span class="my-icon icon-linkedin-in"></span></a></li>
                        </ul>
                        </div> --}}
                        {{-- <div class="next-preve-post">
                        <a href="#" class="prev-post">
                            <div class="my-icon icon-arrow-left"></div>
                            <div class="text">Innovative Techniques For Digital Marketing Success</div>
                        </a>
                        <a href="#" class="next-post">
                            <div class="text">Innovative Techniques For Digital Marketing Success</div>
                            <div class="my-icon icon-arrow-right"></div>
                        </a>
                        </div> --}}
                            {{-- <div class="all-comments">
                            <h4>3 Comments</h4>
                            <ul>
                                <li>
                                    <div class="comment-wrapper">
                                        <div class="profile-img">
                                            <img src="{{ asset('digitox/assets/img/blog-details/comment-profile-1.png')}}" alt="profile">
                                        </div>
                                        <div class="profile-text">
                                            <ul class="comment-info">
                                                <li>
                                                    <span class="my-icon icon-user"></span>
                                                    <h6>Richard Mulkeni</h6>
                                                </li>
                                                <li>
                                                    <span class="my-icon icon-clock"></span>
                                                    <h6>Nov 28, 2022</h6>
                                                </li>
                                            </ul>
                                            <div class="content">
                                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. RichardClintock.Contrary to popular belief, Lorem Ipsum is not simpl</p>
                                            </div>
                                            <button class="reply-btn"><span class="my-icon icon-arrow-right"></span> Reply</button>
                                        </div>
                                    </div>
                                    <ul>
                                        <li>
                                            <div class="comment-wrapper">
                                                <div class="profile-img">
                                                    <img src="{{ asset('digitox/assets/img/blog-details/comment-profile-2.png')}}" alt="profile">
                                                </div>
                                                <div class="profile-text">
                                                    <ul class="comment-info">
                                                        <li>
                                                            <span class="my-icon icon-user"></span>
                                                            <h6>Mike Dooley</h6>
                                                        </li>
                                                        <li>
                                                            <span class="my-icon icon-clock"></span>
                                                            <h6>Nov 28, 2022</h6>
                                                        </li>
                                                    </ul>
                                                    <div class="content">
                                                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. RichardClintock.Contrary to popular belief, Lorem Ipsum is not simpl</p>
                                                    </div>
                                                    <button class="reply-btn"><span class="my-icon icon-arrow-right"></span> Reply</button>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <div class="comment-wrapper">
                                        <div class="profile-img">
                                            <img src="{{ asset('digitox/assets/img/blog-details/comment-profile-3.png')}}" alt="profile">
                                        </div>
                                        <div class="profile-text">
                                            <ul class="comment-info">
                                                <li>
                                                    <span class="my-icon icon-user"></span>
                                                    <h6>Benjamin</h6>
                                                </li>
                                                <li>
                                                    <span class="my-icon icon-clock"></span>
                                                    <h6>Nov 28, 2022</h6>
                                                </li>
                                            </ul>
                                            <div class="content">
                                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. RichardClintock.Contrary to popular belief, Lorem Ipsum is not simpl</p>
                                            </div>
                                            <button class="reply-btn"><span class="my-icon icon-arrow-right"></span> Reply</button>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="comments-form">
                            <h4>Leave a comment</h4>
                            <form action="#" class="main-form">
                                <div class="group-input">
                                    <input type="text" placeholder="Your Name *" required="">
                                    <input type="email" placeholder="Your Email *" required="">
                                </div>
                                <textarea placeholder="Write your Message here"></textarea>
                                <div class="check-box">
                                    <input class="form-check-input" type="checkbox" id="condition1" required="">
                                    <label for="condition1">Save my name,email and website in this browser for the next time</label>
                                </div>
                                <button class="btn-anime v2" type="submit">Submit Now</button>
                            </form>
                        </div> --}}
                    </div>
                    @else
                        <p>No blog details found</p>
                    @endif
                </div>
                <div class="col-lg-5 col-xl-4">
                    <div class="blog-sidebar__wrapper">
                        {{-- <div class="blog-sidebar__widget">
                        <div class="blog-sidebar__widget-head">
                            <h4 class="blog-sidebar__widget-title">Search</h4>
                        </div>
                        <div class="blog-sidebar__widget-content">
                            <div class="search-widget">
                                <form action="">
                                    <input type="search" placeholder="Search by title">
                                    <button type="submit"><span class="my-icon icon-magnifying-glass"></span></button>
                                </form>
                            </div>
                        </div>
                    </div> --}}
                        <div class="blog-sidebar__widget">
                            <div class="blog-sidebar__widget-head">
                                <h4 class="blog-sidebar__widget-title">Services</h4>
                            </div>
                            <div class="blog-sidebar__widget-content">
                                <div class="category-list">
                                    <ul>
                                        @if ($services->count() > 0)
                                            @foreach ($services as $service)
                                                <li>
                                                    <a href="{{ route('service', $service->slug) }}">{{ $service->title }}</a>
                                                </li>
                                            @endforeach
                                            @else
                                            <li>
                                                <a href="#">No services available.</a>
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
                                            <li>
                                                <p>No recent posts available.</p>
                                            </li>
                                        @endif

                                        {{-- <li>0
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
