@extends('layout.main')

@section('content')
    <div class="data-table-area mg-b-15">

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    <header class="header-global">
                        <nav id="navbar-main">
                            <div class="container">
                                <h1>Tambah Data RAB</h1>
                            </div>
                        </nav>
                    </header>
                    <div class="container">
                        <div class="mb-5 border-bottom">

                            <div class="float-end text-muted me-3 mt-2">
                                Step number: <span id="sw-current-step"></span> of <span id="sw-total-step"></span>
                            </div>
                        </div>

                        <!-- SmartWizard html -->
                        <div id="smartwizard">
                            <ul class="nav nav-progress">
                                <li class="nav-item">
                                    <a class="nav-link" href="#step-1">
                                        <div class="num">1</div>
                                        Customer Details
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#step-2">
                                        <span class="num">2</span>
                                        Products Details
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#step-3">
                                        <span class="num">3</span>
                                        Shipping Details
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="#step-4">
                                        <span class="num">4</span>
                                        Confirm Order
                                    </a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div id="step-1" class="tab-pane" role="tabpanel" aria-labelledby="step-1">
                                    <h3>Step 1 Content</h3>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                    has been
                                    the
                                    industry's standard dummy text ever since the 1500s, when an unknown printer took a
                                    galley of
                                    type
                                    and scrambled it to make a type specimen book. It has survived not only five centuries,
                                    but also
                                    the
                                    leap into electronic typesetting, remaining essentially unchanged. It was popularised in
                                    the
                                    1960s
                                    with the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                                    with
                                    desktop
                                    publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                </div>
                                <div id="step-2" class="tab-pane" role="tabpanel" aria-labelledby="step-2">
                                    <h3>Step 2 Content</h3>
                                    <div>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when
                                        an
                                        unknown
                                        printer took a galley of type and scrambled it to make a type specimen book. It has
                                        survived
                                        not
                                        only five centuries, but also the leap into electronic typesetting, remaining
                                        essentially
                                        unchanged. It was popularised in the 1960s with the release of Letraset sheets
                                        containing
                                        Lorem
                                        Ipsum passages, and more recently with desktop publishing software like Aldus
                                        PageMaker
                                        including versions of Lorem Ipsum. </div>
                                </div>
                                <div id="step-3" class="tab-pane" role="tabpanel" aria-labelledby="step-3">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                    has been
                                    the
                                    industry's standard dummy text ever since the 1500s, when an unknown printer took a
                                    galley of
                                    type
                                    and scrambled it to make a type specimen book. It has survived not only five centuries,
                                    but also
                                    the
                                    leap into electronic typesetting, remaining essentially unchanged. It was popularised in
                                    the
                                    1960s
                                    with the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                                    with
                                    desktop
                                    publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                </div>
                                <div id="step-4" class="tab-pane" role="tabpanel" aria-labelledby="step-4">
                                    <h3>Step 4 Content</h3>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                    has been
                                    the
                                    industry's standard dummy text ever since the 1500s, when an unknown printer took a
                                    galley of
                                    type
                                    and scrambled it to make a type specimen book. It has survived not only five centuries,
                                    but also
                                    the
                                    leap into electronic typesetting, remaining essentially unchanged. It was popularised in
                                    the
                                    1960s
                                    with the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                                    with
                                    desktop
                                    publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                    has been
                                    the
                                    industry's standard dummy text ever since the 1500s, when an unknown printer took a
                                    galley of
                                    type
                                    and scrambled it to make a type specimen book. It has survived not only five centuries,
                                    but also
                                    the
                                    leap into electronic typesetting, remaining essentially unchanged. It was popularised in
                                    the
                                    1960s
                                    with the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                                    with
                                    desktop
                                    publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                </div>
                            </div>

                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>



                        <br /> &nbsp;
                    </div>
                </div>
            </div>



        </div>
    </div>
@endsection
