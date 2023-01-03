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
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <!-- Google Fonts
  ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
  ============================================ -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/tambah-rab.css">
    {{-- Bootstrap CSS  --}}
    {{-- ============================================ --}}
    {{-- ============================================ --> 
    {{-- <link rel="stylesheet" href="assets/css/fontawesome.css"> --}}
    <link rel="stylesheet" href="assets/css/font-awesome-6.2.1/css/all.css">
    <!-- owl.carousel CSS
  ============================================ -->
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/owl.theme.css">
    <link rel="stylesheet" href="assets/css/owl.transitions.css">
    <!-- animate CSS
  ============================================ -->
    <link rel="stylesheet" href="assets/css/animate.css">
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
    <!-- normalize CSS
  ============================================ -->
    <link rel="stylesheet" href="assets/css/normalize.css">
    <!-- meanmenu icon CSS
  ============================================ -->
    <link rel="stylesheet" href="assets/css/meanmenu.min.css">
    <!-- main CSS
  ============================================ -->
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- educate icon CSS
  ============================================ -->
    <link rel="stylesheet" href="assets/css/educate-custon-icon.css">
    <!-- morrisjs CSS
  ============================================ -->
    <link rel="stylesheet" href="assets/css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
  ============================================ -->
    <link rel="stylesheet" href="assets/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
  ============================================ -->
    <link rel="stylesheet" href="assets/css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="assets/css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
  ============================================ -->
    {{-- modals CSS --}}
    <link rel="stylesheet" href="assets/css/modals.css">
    {{-- modals css --}}
    {{-- alerts --}}
    <link rel="stylesheet" href="assets/css/alerts.css">
    {{-- alerts --}}
    <link rel="stylesheet" href="assets/css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="assets/css/calendar/fullcalendar.print.min.css">
    <!-- buttons CSS
  ============================================ -->
    <link rel="stylesheet" href="assets/css/buttons.css">
    <!-- x-editor CSS
  ============================================ -->
    <link rel="stylesheet" href="assets/css/editor/select2.css">
    <link rel="stylesheet" href="assets/css/editor/datetimepicker.css">
    <link rel="stylesheet" href="assets/css/editor/bootstrap-editable.css">
    <link rel="stylesheet" href="assets/css/editor/x-editor-style.css">
    <!-- normalize CSS
  ============================================ -->
    <link rel="stylesheet" href="assets/css/data-table/bootstrap-table.css">
    <link rel="stylesheet" href="assets/css/data-table/bootstrap-editable.css">
    <!-- style CSS
  ============================================ -->
    <link rel="stylesheet" href="assets/css/stylee.css">
    <!-- responsive CSS
  ============================================ -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- modernizr JS
  ============================================ -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
  <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
 <![endif]-->
    <div class="error-pagewrap">
        <div class="error-page-int">
            <div class="text-center custom-login">
                <h3>Daftar Akun</h3>
                <p>Si KR layanan Sistem Informasi Kontrak Rinci</p>
            </div>
            <div class="content-error">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="hpanel">
                    <div class="panel-body">
                        <form method="post" action="/register" id="loginForm">
                            @csrf
                            <div class="row">
                                <div class="form-group col-lg-12">
                                    <label for="name">Nama</label>
                                    <input class="form-control" type="text" name="name" id="name"
                                        placeholder="name">
                                </div>
                                <div class="form-group col-lg-12">
                                    <label for="email">Email Address</label>
                                    <input class="form-control" type="text" name="email" id="email"
                                        placeholder="email@example.com">
                                </div>
                                <div class="form-group col-lg-12">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" id="password" placeholder="password"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-success btn-block loginbtn">Register</button>
                                <a class="btn btn-default btn-block" href="/login">Login</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="text-center login-footer">
                <p>Copyright © 2020.
            </div>
        </div>
    </div>
    <!-- jquery
  ============================================ -->

    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
============================================ -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- wow JS
============================================ -->
    <script src="assets/js/wow.min.js"></script>
    <!-- price-slider JS
============================================ -->
    <script src="assets/js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
============================================ -->
    <script src="assets/js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
============================================ -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- sticky JS
============================================ -->
    <script src="assets/js/jquery.sticky.js"></script>
    <!-- scrollUp JS
============================================ -->
    <script src="assets/js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
============================================ -->
    <script src="assets/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="assets/js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- counterup JS
============================================ -->
    <script src="assets/js/counterup/jquery.counterup.min.js"></script>
    <script src="assets/js/counterup/waypoints.min.js"></script>
    <script src="assets/js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
============================================ -->
    <script src="assets/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="assets/js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
============================================ -->
    <script src="assets/js/metisMenu/metisMenu.min.js"></script>
    <script src="assets/js/metisMenu/metisMenu-active.js"></script>
    <!-- data table JS
============================================ -->
    <script src="assets/js/data-table/bootstrap-table.js"></script>
    <script src="assets/js/data-table/tableExport.js"></script>
    <script src="assets/js/data-table/data-table-active.js"></script>
    <script src="assets/js/data-table/bootstrap-table-editable.js"></script>
    <script src="assets/js/data-table/bootstrap-editable.js"></script>
    <script src="assets/js/data-table/bootstrap-table-resizable.js"></script>
    <script src="assets/js/data-table/colResizable-1.5.source.js"></script>
    <script src="assets/js/data-table/bootstrap-table-export.js"></script>
    <!--  editable JS
============================================ -->
    <script src="assets/js/editable/jquery.mockjax.js"></script>
    <script src="assets/js/editable/mock-active.js"></script>
    <script src="assets/js/editable/select2.js"></script>
    <script src="assets/js/editable/moment.min.js"></script>
    <script src="assets/js/editable/bootstrap-datetimepicker.js"></script>
    <script src="assets/js/editable/bootstrap-editable.js"></script>
    <script src="assets/js/editable/xediable-active.js"></script>
    <!-- sparkline JS
============================================ -->
    <script src="assets/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="assets/js/sparkline/sparkline-active.js"></script>
    <!-- Chart JS
============================================ -->
    <script src="assets/js/chart/jquery.peity.min.js"></script>
    <script src="assets/js/chart/peity-active.js"></script>
    <!-- calendar JS
============================================ -->
    <script src="assets/js/calendar/moment.min.js"></script>
    {{-- <script src="assets/js/calendar/fullcalendar.min.js"></script>
<script src="assets/js/calendar/fullcalendar-active.js"></script> --}}
    <!-- tab JS
============================================ -->
    <script src="assets/js/tab.js"></script>
    <!-- plugins JS
============================================ -->
    <script src="assets/js/plugins.js"></script>
    <!-- main JS
============================================ -->
    <script src="assets/js/main.js"></script>
    <!-- tawk chat JS
============================================ -->
    <script src="assets/js/tawk-chat.js"></script>
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
