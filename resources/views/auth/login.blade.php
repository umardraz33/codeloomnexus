<!DOCTYPE html>
<html>

<!-- Mirrored from webarch.revox.io/3.0/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Dec 2023 19:18:30 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>Webarch - Responsive Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- BEGIN PLUGIN CSS -->
    <link href="{{ asset('admin/assets/plugins/pace/pace-theme-flash.css')}}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{ asset('admin/assets/plugins/bootstrapv3/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/assets/plugins/bootstrapv3/css/bootstrap-theme.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{ asset('admin/assets/plugins/animate.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/assets/plugins/jquery-scrollbar/jquery.scrollbar.css')}}" rel="stylesheet" type="text/css" />
    <!-- END PLUGIN CSS -->
    <!-- BEGIN CORE CSS FRAMEWORK -->
    <link href="{{ asset('admin/webarch/css/webarch.css')}}" rel="stylesheet" type="text/css" />
    <!-- END CORE CSS FRAMEWORK -->
  </head>
  <!-- END HEAD -->
  <!-- BEGIN BODY -->
  <body class="error-body no-top">
    <div class="container">
      <div class="row login-container column-seperation">
        <div class="col-md-5 col-md-offset-1">
          <h2>
        Sign in to webarch
      </h2>
          <p>
            Use Facebook, Twitter or your email to sign in.
            <br>
            <a href="#">Sign up Now!</a> for a webarch account,It's free and always will be..
          </p>
          <br>
          <button class="btn btn-block btn-info col-md-8" type="button"><span class="pull-left icon-facebook" style="font-style: italic"></span> <span class="bold">Login with Facebook</span></button>
          <button class="btn btn-block btn-success col-md-8" type="button"><span class="pull-left icon-twitter" style="font-style: italic"></span>
            <span class="bold">Login with Twitter</span></button>
        </div>
        <div class="col-md-5">
          <br>
          <form action="{{ route('login') }}" class="login-form validate" id="login-form" method="post" name="login-form">
            @csrf
            <div class="row">
              <div class="form-group col-md-10">
                <label class="form-label">Email Address</label>
                <input class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" type="email" required autocomplete="email" autofocus>
              </div>

                {{-- <div class="row mb-3">
                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div> --}}

            </div>
            <div class="row">
              <div class="form-group col-md-10">
                <label class="form-label">Password</label> <span class="help"></span>
                <input class="form-control @error('password') is-invalid @enderror" id="txtpassword" name="password" type="password" required autocomplete="current-password">

                @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                @enderror
              </div>
                {{-- <div class="row mb-3">
                    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div> --}}
            </div>
            <div class="row">
              <div class="control-group col-md-10">
                <div class="checkbox checkbox check-success">
                  <a href="#">Trouble login in?</a>&nbsp;&nbsp;
                  <input id="checkbox1" type="checkbox" value="1">
                  <label for="checkbox1">Keep me reminded</label>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-10">
                  <button class="btn btn-primary btn-cons pull-right" type="submit">Login</button>
                  {{-- <a class="btn btn-primary btn-cons pull-right" type="button" href="{{ route('register') }}">Create an account</a> --}}
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- END CONTAINER -->
    <script src="{{ asset('admin/assets/plugins/pace/pace.min.js')}}" type="text/javascript"></script>
    <!-- BEGIN JS DEPENDECENCIES-->
    <script src="{{ asset('admin/assets/plugins/jquery/jquery-1.11.3.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/plugins/bootstrapv3/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/plugins/jquery-block-ui/jqueryblockui.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/plugins/jquery-unveil/jquery.unveil.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/plugins/jquery-numberAnimate/jquery.animateNumbers.js')}}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/plugins/jquery-validation/js/jquery.validate.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/plugins/bootstrap-select2/select2.min.js')}}" type="text/javascript"></script>
    <!-- END CORE JS DEPENDECENCIES-->
    <!-- BEGIN CORE TEMPLATE JS -->
    <script src="{{ asset('admin/webarch/js/webarch.js')}}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/js/chat.js')}}" type="text/javascript"></script>
    <!-- END CORE TEMPLATE JS -->
    <!-- The core Firebase JS SDK is always required and must be listed first -->
    <script src="../../www.gstatic.com/firebasejs/7.24.0/firebase-app.js"></script>

    <!-- TODO: Add SDKs for Firebase products that you want to use
        https://firebase.google.com/docs/web/setup#available-libraries -->
    <script src="../../www.gstatic.com/firebasejs/7.24.0/firebase-analytics.js"></script>

    <script>
    // Your web app's Firebase configuration
    // For Firebase JS SDK v7.20.0 and later, measurementId is optional
    var firebaseConfig = {
        apiKey: "AIzaSyDaflsWYusjtsDkIyXPWuxpgYg9vYVelAM",
        authDomain: "webarch-38d59.firebaseapp.com",
        databaseURL: "https://webarch-38d59.firebaseio.com",
        projectId: "webarch-38d59",
        storageBucket: "webarch-38d59.appspot.com",
        messagingSenderId: "604319374989",
        appId: "1:604319374989:web:bb8e838658a5405d03ccc4",
        measurementId: "G-1P9DBV3T3N"
    };
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
    firebase.analytics();
    </script>
  </body>

<!-- Mirrored from webarch.revox.io/3.0/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Dec 2023 19:18:30 GMT -->
</html>


{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
