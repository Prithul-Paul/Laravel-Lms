<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Title Page-->
    <title>Login - {{ config('app.name') }}</title>

    <!-- Fontfaces CSS-->
    <link href="{{asset("assets/css/font-face.css")}}" rel="stylesheet" media="all">
    <link href="{{asset("assets/vendor/font-awesome-4.7/css/font-awesome.min.css")}}" rel="stylesheet" media="all">
    <link href="{{asset("assets/vendor/font-awesome-5/css/fontawesome-all.min.css")}}" rel="stylesheet" media="all">
    <link href="{{asset("assets/vendor/mdi-font/css/material-design-iconic-font.min.css")}}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{asset("assets/vendor/bootstrap-4.1/bootstrap.min.css")}}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{asset("assets/vendor/animsition/animsition.min.css")}}" rel="stylesheet" media="all">
    <link href="{{asset("assets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css")}}" rel="stylesheet" media="all">
    <link href="{{asset("assets/vendor/wow/animate.css")}}" rel="stylesheet" media="all">
    <link href="{{asset("assets/vendor/css-hamburgers/hamburgers.min.css")}}" rel="stylesheet" media="all">
    <link href="{{asset("assets/vendor/slick/slick.css")}}" rel="stylesheet" media="all">
    <link href="{{asset("assets/vendor/select2/select2.min.css")}}" rel="stylesheet" media="all">
    <link href="{{asset("assets/vendor/perfect-scrollbar/perfect-scrollbar.css")}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset("assets/css/theme.css")}}" rel="stylesheet" media="all">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            {{ config('app.name') }}
                        </div>
                        <div class="login-form">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input class="au-input au-input--full form-control @error('email') is-invalid @enderror" id="email" value="{{ old('email') }}" required autocomplete="email" autofocus type="email" name="email" placeholder="Email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input id="password" class="au-input au-input--full form-control @error('password') is-invalid @enderror" type="password" name="password" placeholder="Password"  required autocomplete="current-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>Remember Me
                                    </label>
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">sign in</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="{{asset("assets/vendor/jquery-3.2.1.min.js")}}"></script>
    <!-- Bootstrap JS-->
    <script src="{{asset("assets/vendor/bootstrap-4.1/popper.min.js")}}"></script>
    <script src="{{asset("assets/vendor/bootstrap-4.1/bootstrap.min.js")}}"></script>
    <!-- Vendor JS       -->
    <script src="{{asset("assets/vendor/slick/slick.min.js")}}">
    </script>
    <script src="{{asset("assets/vendor/wow/wow.min.js")}}"></script>
    <script src="{{asset("assets/vendor/animsition/animsition.min.js")}}"></script>
    <script src="{{asset("assets/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js")}}">
    </script>
    <script src="{{asset("assets/vendor/counter-up/jquery.waypoints.min.js")}}"></script>
    <script src="{{asset("assets/vendor/counter-up/jquery.counterup.min.js")}}">
    </script>
    <script src="{{asset("assets/vendor/circle-progress/circle-progress.min.js")}}"></script>
    <script src="{{asset("assets/vendor/perfect-scrollbar/perfect-scrollbar.js")}}"></script>
    <script src="{{asset("assets/vendor/chartjs/Chart.bundle.min.js")}}"></script>
    <script src="{{asset("assets/vendor/select2/select2.min.js")}}">
    </script>

    <!-- Main JS-->
    <script src="{{asset("assets/js/main.js")}}"></script>

</body>

</html>
<!-- end document-->