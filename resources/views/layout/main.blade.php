{{-- <!doctype html>
<html class="no-js" lang="en"> --}}
<!DOCTYPE html>
<html lang="en" class="no-js">

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
        integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    <!--[if lt IE 8]>
  <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
 <![endif]-->

    @include('partials.sidebar')

    @include('partials.topbar')

    @yield('content')

    @include('partials/footer')


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

    {{-- <script type="text/javascript" src="./js/demo.js"></script> --}}

    <script type="text/javascript">
        function onFinish() {
            // let unit = []
            // let nama_variant = []
            // let nama_satuan = []
            // let volume = []

            // $('.unit').each(function() {
            //     unit.push($(this).text())
            // })
            // $('.nama_variant').each(function() {
            //     nama_variant.push($(this).text())
            // })
            // $('.nama_satuan').each(function() {
            //     nama_satuan.push($(this).text())
            // })
            // $('.volume').each(function() {
            //     volume.push($(this).text())
            // })

            // $.ajax({
            //     mehod: "post",
            //     url: "{{ url('/ta mbah-rab/store') }}",
            //     data: {
            //         unit: unit,
            //         nama_variant: nama_variant,
            //         nama_satuan: nama_satuan,
            //         volume: volume,
            //         "_token": "{{ csrf_token() }}"
            //     },
            // success: function(response) {
            //     console log(response),
            // }.error: function(xhr) {
            //     // console log(xhr)
            // }
            // });

            alert('Finish Clicked');
        }

        function onCancel() {
            $('#smartwizard').smartWizard("reset");
        }

        $(function() {
            // Step show event
            $("#smartwizard").on("showStep", function(e, anchorObject, stepIndex, stepDirection, stepPosition) {
                $("#prev-btn").removeClass('disabled').prop('disabled', false);
                $("#next-btn").removeClass('disabled').prop('disabled', false);
                if (stepPosition === 'first') {
                    $("#prev-btn").addClass('disabled').prop('disabled', true);
                } else if (stepPosition === 'last') {
                    $("#next-btn").addClass('disabled').prop('disabled', true);
                } else {
                    $("#prev-btn").removeClass('disabled').prop('disabled', false);
                    $("#next-btn").removeClass('disabled').prop('disabled', false);
                }

                // Get step info from Smart Wizard
                let stepInfo = $('#smartwizard').smartWizard("getStepInfo");
                $("#sw-current-step").text(stepInfo.currentStep + 1);
                $("#sw-total-step").text(stepInfo.totalSteps);
            });

            $("#smartwizard").on("initialized", function(e) {
                console.log("initialized");
            });

            $("#smartwizard").on("loaded", function(e) {
                console.log("loaded");
            });

            // Smart Wizard
            $('#smartwizard').smartWizard({
                selected: 0,
                // autoAdjustHeight: false,
                theme: 'arrows', // basic, arrows, square, round, dots
                transition: {
                    animation: 'slideHorizontal' // none|fade|slideHorizontal|slideVertical|slideSwing|css
                },
                toolbar: {
                    showNextButton: true, // show/hide a Next button
                    showPreviousButton: true, // show/hide a Previous button
                    position: 'bottom', // none/ top/ both bottom
                    extraHtml: `<button class="btn btn-success" onclick="onFinish()">Finish</button>
                              <button class="btn btn-secondary" onclick="onCancel()">Reset</button>`
                },
                anchor: {
                    enableNavigation: true, // Enable/Disable anchor navigation 
                    enableNavigationAlways: false, // Activates all anchors clickable always
                    enableDoneState: true, // Add done state on visited steps
                    markPreviousStepsAsDone: true, // When a step selected by url hash, all previous steps are marked done
                    unDoneOnBackNavigation: false, // While navigate back, done state will be cleared
                    enableDoneStateNavigation: true // Enable/Disable the done state navigation
                },
                disabledSteps: [], // Array Steps disabled
                errorSteps: [], // Highlight step with errors
                hiddenSteps: [], // Hidden steps
                // getContent: (idx, stepDirection, selStep, callback) => {
                //   console.log('getContent',selStep, idx, stepDirection);
                //   callback('<h1>'+idx+'</h1>');
                // }
            });

            $("#state_selector").on("change", function() {
                $('#smartwizard').smartWizard("setState", [$('#step_to_style').val()], $(this).val(), !$(
                    '#is_reset').prop("checked"));
                return true;
            });

            $("#style_selector").on("change", function() {
                $('#smartwizard').smartWizard("setStyle", [$('#step_to_style').val()], $(this).val(), !$(
                    '#is_reset').prop("checked"));
                return true;
            });

        });
    </script>
</body>

</html>
