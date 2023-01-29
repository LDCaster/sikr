{{-- Menu Top Bar Start --}}
<!-- Start Welcome area -->
<div class="all-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="logo-pro">
                    <a href="index.html"><img class="main-logo" src="" alt="" /></a>
                </div>
            </div>
        </div>
    </div>
    <div class="header-advance-area">
        <div class="header-top-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="header-top-wraper">
                            <div class="row">
                                <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                    <div class="menu-switcher-pro">
                                        <button type="button" id="sidebarCollapse"
                                            class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                            <i class="fa-solid fa-bars"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                    <div class="header-top-menu tabl-d-n">
                                        <ul class="nav navbar-nav mai-top-nav">

                                            {{-- jam digital  --}}

                                            <li class="nav-item" id="jam_aktif">
                                                <a href="" class="disabled-link">
                                                    <label id="jam"></label> :
                                                    <label id="menit"></label> :
                                                    <label id="detik"></label>
                                                    <label id="pm_am"></label>
                                                </a>
                                            </li>
                                            <?php
                                            $tgl = date('Y-m-d');
                                            function merubah_tanggal($tgl)
                                            {
                                                $bulan = [
                                                    1 => 'Januari',
                                                    'Februari',
                                                    'Maret',
                                                    'April',
                                                    'Mei',
                                                    'Juni',
                                                    'Juli',
                                                    'Agustus',
                                                    'September',
                                                    'Oktober',
                                                    'November',
                                                    'Desember',
                                                ];
                                                $pecahkan = explode('-', $tgl);
                                                return $pecahkan[2] . '/' . $bulan[(int) $pecahkan[1]] . '/' . $pecahkan[0];
                                            }
                                            ?>
                                            <li class="nav-item" id="tgl_hari_ini">
                                                <a href="" class="disabled-link" style="font-weight: bold">
                                                    <?php echo merubah_tanggal($tgl); ?></a>
                                            </li>

                                            {{-- end jam digital --}}

                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                    <div class="header-right-info">
                                        <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                            <li class="nav-item" style="margin-right: 25px">
                                                <a href="#" data-toggle="dropdown" role="button"
                                                    aria-expanded="false" class="nav-link dropdown-toggle">
                                                    <img src="{{ url('/assets/img/profile') . '/' . Auth::user()->img }}"
                                                        style=" margin-bottom:3px;" alt="" />
                                                    <span class="admin-name dropdown-menu-right"
                                                        style="font-size: 80%;">Selamat Datang,
                                                        {{ Auth::user()->name }}</span> <i
                                                        class="fa fa-angle-down edu-icon edu-down-arrow"></i>
                                                </a>
                                                <ul role="menu"
                                                    class="dropdown-header-top author-log dropdown-menu animated">
                                                    <li><a href="{{ url('/akun-saya') }}">
                                                            <span
                                                                class="edu-icon edu-user-rounded author-log-ic"></span>Akun
                                                            Saya</a>
                                                    </li>
                                                    <li><a href="/logout"><span
                                                                class="edu-icon edu-locked author-log-ic"></span>Log
                                                            Out</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        {{-- <!-- Mobile Menu start -->
        <div class="mobile-menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="mobile-menu">
                            <nav id="dropdown">
                                <ul class="mobile-menu-nav">
                                    <li><a data-toggle="collapse" data-target="#Charts" href="#">Home <span
                                                class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                        <ul class="collapse dropdown-header-top">
                                            <li><a href="index.html">Dashboard v.1</a></li>
                                            <li><a href="index-1.html">Dashboard v.2</a></li>
                                            <li><a href="index-3.html">Dashboard v.3</a></li>
                                            <li><a href="analytics.html">Analytics</a></li>
                                            <li><a href="widgets.html">Widgets</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="events.html">Event</a></li>
                                    <li><a data-toggle="collapse" data-target="#demoevent" href="#">Professors
                                            <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                        <ul id="demoevent" class="collapse dropdown-header-top">
                                            <li><a href="all-professors.html">All Professors</a>
                                            </li>
                                            <li><a href="add-professor.html">Add Professor</a>
                                            </li>
                                            <li><a href="edit-professor.html">Edit Professor</a>
                                            </li>
                                            <li><a href="professor-profile.html">Professor Profile</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle="collapse" data-target="#demopro" href="#">Students
                                            <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                        <ul id="demopro" class="collapse dropdown-header-top">
                                            <li><a href="all-students.html">All Students</a>
                                            </li>
                                            <li><a href="add-student.html">Add Student</a>
                                            </li>
                                            <li><a href="edit-student.html">Edit Student</a>
                                            </li>
                                            <li><a href="student-profile.html">Student Profile</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle="collapse" data-target="#democrou" href="#">Courses
                                            <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                        <ul id="democrou" class="collapse dropdown-header-top">
                                            <li><a href="all-courses.html">All Courses</a>
                                            </li>
                                            <li><a href="add-course.html">Add Course</a>
                                            </li>
                                            <li><a href="edit-course.html">Edit Course</a>
                                            </li>
                                            <li><a href="course-profile.html">Courses Info</a>
                                            </li>
                                            <li><a href="course-payment.html">Courses Payment</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle="collapse" data-target="#demolibra" href="#">Library
                                            <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                        <ul id="demolibra" class="collapse dropdown-header-top">
                                            <li><a href="library-assets.html">Library Assets</a>
                                            </li>
                                            <li><a href="add-library-assets.html">Add Library Asset</a>
                                            </li>
                                            <li><a href="edit-library-assets.html">Edit Library Asset</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle="collapse" data-target="#demodepart"
                                            href="#">Departments <span
                                                class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                        <ul id="demodepart" class="collapse dropdown-header-top">
                                            <li><a href="departments.html">Departments List</a>
                                            </li>
                                            <li><a href="add-department.html">Add Departments</a>
                                            </li>
                                            <li><a href="edit-department.html">Edit Departments</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle="collapse" data-target="#demomi" href="#">Mailbox
                                            <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                        <ul id="demomi" class="collapse dropdown-header-top">
                                            <li><a href="mailbox.html">Inbox</a>
                                            </li>
                                            <li><a href="mailbox-view.html">View Mail</a>
                                            </li>
                                            <li><a href="mailbox-compose.html">Compose Mail</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle="collapse" data-target="#Miscellaneousmob"
                                            href="#">Interface <span
                                                class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                        <ul id="Miscellaneousmob" class="collapse dropdown-header-top">
                                            <li><a href="google-map.html">Google Map</a>
                                            </li>
                                            <li><a href="data-maps.html">Data Maps</a>
                                            </li>
                                            <li><a href="pdf-viewer.html">Pdf Viewer</a>
                                            </li>
                                            <li><a href="x-editable.html">X-Editable</a>
                                            </li>
                                            <li><a href="code-editor.html">Code Editor</a>
                                            </li>
                                            <li><a href="tree-view.html">Tree View</a>
                                            </li>
                                            <li><a href="preloader.html">Preloader</a>
                                            </li>
                                            <li><a href="images-cropper.html">Images Cropper</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle="collapse" data-target="#Chartsmob" href="#">Charts
                                            <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                        <ul id="Chartsmob" class="collapse dropdown-header-top">
                                            <li><a href="bar-charts.html">Bar Charts</a>
                                            </li>
                                            <li><a href="line-charts.html">Line Charts</a>
                                            </li>
                                            <li><a href="area-charts.html">Area Charts</a>
                                            </li>
                                            <li><a href="rounded-chart.html">Rounded Charts</a>
                                            </li>
                                            <li><a href="c3.html">C3 Charts</a>
                                            </li>
                                            <li><a href="sparkline.html">Sparkline Charts</a>
                                            </li>
                                            <li><a href="peity.html">Peity Charts</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle="collapse" data-target="#Tablesmob" href="#">Tables
                                            <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                        <ul id="Tablesmob" class="collapse dropdown-header-top">
                                            <li><a href="static-table.html">Static Table</a>
                                            </li>
                                            <li><a href="data-table.html">Data Table</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle="collapse" data-target="#formsmob" href="#">Forms
                                            <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                        <ul id="formsmob" class="collapse dropdown-header-top">
                                            <li><a href="basic-form-element.html">Basic Form Elements</a>
                                            </li>
                                            <li><a href="advance-form-element.html">Advanced Form Elements</a>
                                            </li>
                                            <li><a href="password-meter.html">Password Meter</a>
                                            </li>
                                            <li><a href="multi-upload.html">Multi Upload</a>
                                            </li>
                                            <li><a href="tinymc.html">Text Editor</a>
                                            </li>
                                            <li><a href="dual-list-box.html">Dual List Box</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle="collapse" data-target="#Appviewsmob" href="#">App
                                            views <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                        <ul id="Appviewsmob" class="collapse dropdown-header-top">
                                            <li><a href="basic-form-element.html">Basic Form Elements</a>
                                            </li>
                                            <li><a href="advance-form-element.html">Advanced Form Elements</a>
                                            </li>
                                            <li><a href="password-meter.html">Password Meter</a>
                                            </li>
                                            <li><a href="multi-upload.html">Multi Upload</a>
                                            </li>
                                            <li><a href="tinymc.html">Text Editor</a>
                                            </li>
                                            <li><a href="dual-list-box.html">Dual List Box</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle="collapse" data-target="#Pagemob" href="#">Pages
                                            <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                        <ul id="Pagemob" class="collapse dropdown-header-top">
                                            <li><a href="login.html">Login</a>
                                            </li>
                                            <li><a href="register.html">Register</a>
                                            </li>
                                            <li><a href="lock.html">Lock</a>
                                            </li>
                                            <li><a href="password-recovery.html">Password Recovery</a>
                                            </li>
                                            <li><a href="404.html">404 Page</a></li>
                                            <li><a href="500.html">500 Page</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mobile Menu end --> --}}
        {{-- <div class="breadcome-area">
            <div class="container-fluid" style="margin-top: 40px">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcome-list single-page-breadcome">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="breadcome-heading">
                                        <h3>Data Variant</h3>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <ul class="breadcome-menu">
                                        <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                        </li>
                                        <li><span class="bread-blod">Dashboard</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
    <!-- Single pro tab start-->
    {{-- Menu Top Bar End --}}


    {{-- fungsi jam digital --}}
    <script type="text/javascript">
        window.setTimeout("jam_aktif()", 1000);

        function jam_aktif() {
            var jam_aktif = new Date();
            setTimeout("jam_aktif()", 1000);
            var jam = jam_aktif.getHours();
            var menit = jam_aktif.getMinutes();
            var detik = jam_aktif.getSeconds();

            //menampilkan am/pm
            if (jam < 12) {
                document.getElementById("pm_am").innerHTML = 'AM';
            } else if (jam > 12) {
                document.getElementById("pm_am").innerHTML = 'PM';
            }

            //memberikan angka 2 digit untuk 0-9 pada JAM
            if (jam == 0) {
                document.getElementById("jam").innerHTML = '0' + jam;
            } else if (jam < 10) {
                document.getElementById("jam").innerHTML = '0' + jam;
            } else if (jam == 10) {
                document.getElementById("jam").innerHTML = jam_aktif.getHours();
            } else if (jam > 10) {
                document.getElementById("jam").innerHTML = jam_aktif.getHours();
            }

            //memberikan angka 2 digit untuk 0-9 pada MENIT
            if (menit == 0) {
                document.getElementById("menit").innerHTML = '0' + menit;
            } else if (menit < 10) {
                document.getElementById("menit").innerHTML = '0' + menit;
            } else if (menit == 10) {
                document.getElementById("menit").innerHTML = jam_aktif.getMinutes();
            } else if (menit > 10) {
                document.getElementById("menit").innerHTML = jam_aktif.getMinutes();
            }

            //memberikan angka 2 digit untuk 0-9 pada DETIK
            if (detik == 0) {
                document.getElementById("detik").innerHTML = '0' + detik;
            } else if (detik < 10) {
                document.getElementById("detik").innerHTML = '0' + detik;
            } else if (detik == 10) {
                document.getElementById("detik").innerHTML = jam_aktif.getSeconds();
            } else if (detik > 10) {
                document.getElementById("detik").innerHTML = jam_aktif.getSeconds();
            }
        }
    </script>
    {{-- end fungsi jam digital  --}}
