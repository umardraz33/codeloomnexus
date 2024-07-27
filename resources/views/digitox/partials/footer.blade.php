<style>
    .info-footer.v1 .main-footer, .info-footer.v2 .main-footer, .info-footer.v3 .main-footer{
        margin-top: 50px !important;
    }
</style>
<div class="info-footer v1">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="footer__widget">
                    <div class="footer__widget-content">
                        <div class="footer-logo">
                            <a href="{{ route('home') }}"><img src="{{ asset('digitox/assets/img/logo/codeloomnexus_logo.jpeg')}}" alt="Logo" style="    border-radius: 15px;"></a>
                        </div>
                        <p>Empower businesses through innovative technological solutions.</p>
                        <ul class="icon-links">
                            <li>
                                <a href="tel:+923036682519" class="icon-link"><span class="my-icon icon-phone-volume"></span>+923036682519</a>
                            </li>
                            <li>
                                <a href="tel:+923035955519" class="icon-link"><span class="my-icon icon-phone-volume"></span>+923035955519</a>
                            </li>
                            <li>
                                <a href="mailto:info@codeloomnexus.com" class="icon-link"><span class="my-icon icon-envelope"></span>info@codeloomnexus.com</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="footer__widget">
                    <h5 class="footer__widget-title">Services</h5>
                    @php($services = \App\Models\Service::where('is_active' , 1)->get())
                    <div class="footer__widget-content">
                        @foreach ($services as $service)

                        <ul class="link-list">
                            <li><a href="{{ route('service' , $service->id) }}">{{ $service->title }}</a></li>
                        </ul>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="footer__widget">
                    <h5 class="footer__widget-title">Pages</h5>
                    <div class="footer__widget-content">
                        <div>
                            <ul class="link-list">
                                {{-- <li><a href="{{ route('home') }}">Home</a></li> --}}
                                <li><a href="{{ route('project') }}">Projects</a></li>
                                <li><a href="{{ route('about-us') }}">About Us</a></li>
                                {{-- <li><a href="{{ route('pricing') }}">Pricing</a></li> --}}
                                <li><a href="{{ route('blog') }}">Blogs</a></li>
                                <li><a href="{{ route('contactus') }}">Contact Us</a></li>
                                <li><a href="{{ route('faq') }}">Faq's</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="footer__widget">
                    <h5 class="footer__widget-title">Newsletter</h5>
                    <div class="footer__widget-content">
                        <p>You will be notified when somthing new will be appeared</p>
                        <form action="#" class="newsletter">
                            <input type="email" placeholder="Your email here" required>
                            <button type="submit">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-footer">
        <div class="container">
            <div class="footer-content">
                <div class="left-text">
                    <p>© <a href="#">CodeLoom Nexus</a>  <?php echo date("Y"); ?> | All Rights Reserved</p>
                </div>
                <ul class="social">
                    <li><a href="https://www.facebook.com/profile.php?id=61559866791478&notif_id=1717490684324119&notif_t=page_user_activity&ref=notif" target="_blank"><span class="my-icon icon-facebook"></span></a></li>
                    <li><a href="https://www.instagram.com/codeloom_nexus/" target="_blank"><span class="my-icon icon-instagram"></span></a></li>
                    
                    <li><a href="https://www.linkedin.com/company/codeloom-nexus/about/" target="_blank"><span class="my-icon icon-linkedin-in"></span></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
