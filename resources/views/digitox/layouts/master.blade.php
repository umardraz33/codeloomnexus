<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from techsometimes.com/products/html/digitox-html/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 Nov 2023 10:35:13 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="CodeLoom Nexus, mobile app development, custom web design, web development solutions, iOS, Android, Swift, Kotlin, React Native, Flutter, React.js, MEAN stack, MERN stack, AWS, MySQL, Firebase, PHP, Laravel, codeloomnexus, codeloom, nexus,">
    <meta name="description" content="CodeLoom Nexus offers innovative mobile app development, custom web design, and web development solutions. Our experienced team specializes in iOS, Android, Swift, Kotlin, React Native, Flutter, React.js, MEAN stack, MERN stack, AWS, MySQL, Firebase, PHP, and Laravel. We deliver high-quality, scalable solutions to propel your business forward.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>codeLoom Nexus : Fueling Business Growth Through Adaptable Solutions</title>

    <!-- Apple Favicon -->
    <link rel="apple-touch-icon" href="{{ asset('digitox/assets/img/logo/codeloomnexus_logo.jpeg')}}">

    <!-- All Device Favicon -->
    <link rel="icon" href="{{ asset('digitox/assets/img/logo/codeloomnexus_logo.jpeg')}}">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('digitox/assets/css/bootstrap.min.css')}}">

    <!-- All Icons -->
    <link rel="stylesheet" href="{{ asset('digitox/assets/all-icons/myicon.css')}}">

    <!-- Plugin -->
    <link rel="stylesheet" href="{{ asset('digitox/assets/css/plugins.min.css')}}">

    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('digitox/assets/css/style.min.css')}}">

    <!-- Responsive -->
    <link rel="stylesheet" href="{{ asset('digitox/assets/css/responsive.min.css')}}">

    @stack('style')

</head>

<body>

    <div id="main-wrapper">
        <div class="preloder"></div>
        <header>
            <!-- Top Bar Start -->
            @include('digitox.partials.header')

            <!-- Menu Bar End -->
        </header>
        <main>

            @yield('content')

        </main>
        <footer>
            <!-- Info Footer Start -->
           @include('digitox.partials.footer')
            <!-- Info Footer End -->
        </footer>
    </div>

    <!-- jQuery -->
    <script src="{{ asset('digitox/assets/js/jquery-3.6.3.min.js')}}"></script>

    <!-- Bootstrap -->
    <script src="{{ asset('digitox/assets/js/bootstrap.min.js')}}"></script>

    <!-- Plugins -->
    <script src="{{ asset('digitox/assets/js/plugins.min.js')}}"></script>

    <!-- Index -->
    <script src="{{ asset('digitox/assets/js/index.min.js')}}"></script>

    @stack('script')
</body>


<!-- Mirrored from techsometimes.com/products/html/digitox-html/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 Nov 2023 10:35:34 GMT -->
</html>
