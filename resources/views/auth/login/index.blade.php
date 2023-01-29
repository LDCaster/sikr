<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
  ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('assets/img/favicon.ico') }}">
    <!-- Google Fonts
  ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css') }}">
    {{-- Bootstrap CSS  --}}
    {{-- ============================================ --}}
    {{-- ============================================ --> 
    {{-- <link rel="stylesheet" href="assets/css/fontawesome.css"> --}}
    <link rel="stylesheet" href="{{ url('assets/css/font-awesome-6.2.1/css/all.css') }}">

    <!-- Animate CSS for the css animation support if needed -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet" />

    {{-- <!-- Demo CSS -->
    <link href="assets/../../demo.css" rel="stylesheet" type="text/css" />
    <link href="../../../../assets/css/style.css?v=7" rel="stylesheet" type="text/css" /> --}}

    <!-- Include SmartWizard CSS -->
    {{-- <link href="./css/demo.css" rel="stylesheet" type="text/css" /> --}}

    <!-- Demo files -->
    <link href="https://cdn.jsdelivr.net/npm/smartwizard@6/dist/css/smart_wizard_all.min.css" rel="stylesheet"
        type="text/css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

    <!-- main CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ url('assets/css/main.css') }}">
    <!-- educate icon CSS
  ============================================ -->

    {{-- alerts --}}
    <link rel="stylesheet" href="{{ url('assets/css/alerts.css') }}">

    <!-- buttons CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ url('assets/css/buttons.css') }}">

    <!-- style CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ url('assets/css/stylee.css') }}">
    <!-- responsive CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ url('assets/css/responsive.css') }}">
    <!-- modernizr JS
  ============================================ -->
    <script src="{{ url('assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>
</head>

<style type="text/css">
    body {
        background-image: linear-gradient(rgba(0, 0, 0, 0.60), rgba(0, 0, 0, 0.60)), url('assets/img/login.png');
        background-size: cover;
    }
</style>

<body>
    <!--[if lt IE 8]>
  <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
 <![endif]-->
    <div class="error-pagewrap" style="opacity: 0.9;">
        <div class="error-page-int">
            <div class="container"
                style="width: 460px; height:80px; margin-bottom:20px; /* From https://css.glass */
                background: rgba(208, 204, 37, 0.71);
                border-radius: 16px;
                box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
                backdrop-filter: blur(5px);
                -webkit-backdrop-filter: blur(5px);
                border: 1px solid rgba(208, 204, 37, 0.3);
                ; color:white">
                <div class="text-center m-b-md custom-login"
                    style="margin-top:7px; font-family: 'Noto Serif', serif;
                font-family: 'Roboto Condensed', sans-serif;">
                    <h2>SIMKOR</h2>
                    <h5 style="color: white; font-weight:bold;">Sistem Informasi Monitoring Kontrak Rinci</h5>
                </div>
            </div>
            <div class="content-error">
                @if (session()->has('status'))
                    <div class="alert alert-danger alert-mg-b alert-success-style4 alert-st-bg3">
                        <button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
                            <span class="icon-sc-cl" aria-hidden="true">&times;</span>
                        </button>
                        <i class="fa fa-times edu-danger-error admin-check-pro admin-check-pro-clr3"
                            aria-hidden="true"></i>
                        <p>{{ session('message') }}</p>
                    </div>
                @endif
                @if (session()->has('check'))
                    <div class="alert alert-success alert-success-style1 alert-st-bg">
                        <button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
                            <span class="icon-sc-cl" aria-hidden="true">&times;</span>
                        </button>
                        <i class="fa fa-check edu-checked-pro admin-check-pro admin-check-pro-clr"
                            aria-hidden="true"></i>
                        <p>{{ session('message') }}</p>
                    </div>
                @endif
                <div class="hpanel">
                    <div class="panel-body"
                        style="/* From https://css.glass */
                        background: rgba(208, 204, 37, 0.71);
                        border-radius: 16px;
                        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
                        backdrop-filter: blur(5px);
                        -webkit-backdrop-filter: blur(5px);
                        border: 1px solid rgba(208, 204, 37, 0.3);
                    ">
                        <form method="POST" id="loginForm" action="/login">
                            @csrf
                            <div class="form-group">
                                <label class="control-label" for="email" style="color:white">Email</label>
                                <input type="email" placeholder="email " required="" name="email" id="email"
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password" style="color: white">Password</label>
                                <input type="password" placeholder="******" required="" value=""
                                    name="password" id="password" class="form-control">
                            </div>
                            <span class="help-block small" style="color:white">Hubungi Admin jika lupa Email &
                                Password!</span>
                            {{-- <div class="checkbox login-checkbox">
                                <label>
                                    <input type="checkbox" class="i-checks"> Remember me </label>
                                <p class="help-block small">(if this is a private computer)</p>
                            </div> --}}
                            <button type="submit" style=" font-weight:700"
                                class="btn  btn-block btn-success loginbtn">LOGIN </button>
                            {{-- <a class="btn btn-default btn-block" href="/register">Register</a> --}}
                        </form>
                    </div>
                </div>
            </div>
            <div class="text-center login-footer">
                <p>Copyright © 2023.</p>
            </div>
        </div>
    </div>
    <!-- jquery
  ============================================ -->

    <script src="{{ url('assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <!-- bootstrap JS
============================================ -->
    <script src="{{ url('assets/js/bootstrap.min.js') }}"></script>
    <!-- wow JS
============================================ -->
    <!-- plugins JS
============================================ -->
    <script src="{{ url('assets/js/plugins.js') }}"></script>
    <!-- main JS
============================================ -->
    <script src="{{ url('assets/js/main.js') }}"></script>

    <!-- Bootrap for the demo page -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- jQuery Slim 3.6  -->
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
        integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script> -->

    <!-- Include SmartWizard JavaScript source -->
    <script src="https://cdn.jsdelivr.net/npm/smartwizard@6/dist/js/jquery.smartWizard.min.js" type="text/javascript">
    </script>
</body>

</html>
