@extends('layout.main')

@section('content')
    <div class="data-table-area mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="sparkline13-list">
                        <div class="sparkline13-hd">
                            <!-- CONTENT START -->
                            <section>

                                <!-- .container start -->
                                <div class="container py-5">

                                    <!-- .row start -->
                                    <div class="row">

                                        <!-- .col start -->
                                        <div class="col-lg-4">

                                            <div class="card text-center p-5">

                                                <div class="card-body">

                                                    {{-- <img src="https://avatars.githubusercontent.com/u/45115034?v=4"
                                                        alt="Profil Picture" class="img img-thumbnail rounded-circle w-50"
                                                        height="200px" width="200px"> --}}
                                                    <img class="img img-thumbnail rounded-circle w-50"
                                                        src="{{ url('/assets/img/profile') . '/' . Auth::user()->img }}"
                                                        style=" margin-bottom:3px;" alt="" height="200px"
                                                        width="200px" />

                                                    <h2>{{ Auth::user()->name }}</h2>

                                                    {{-- <p class="card-text text-muted">
                                                        Web developer di Nokensoft.com dan trainer coding di SaCode.web.id.
                                                    </p> --}}
                                                </div>

                                            </div>

                                        </div>
                                        <!-- .col end -->

                                        <!-- .col start -->
                                        <div class="col-lg-8">

                                            <div class="shadow border rounded p-5" style="margin-top: 50px">
                                                <h2>Informasi Kontak</h2>

                                                <!-- .row start -->
                                                <div class="row">

                                                    <!-- .col start -->
                                                    <div class="col-lg-8">

                                                        {{-- <p class="card-text">
                                                            <span class="text-muted mb-1 d-block">Alamat :</span>

                                                            <i class="fa-solid fa-map me-2 text-success"></i>

                                                            Jalan Raya Waena, Kelurahan Waena, Distrik Heram, Kota Jayapura,
                                                            Papua.
                                                        </p> <!-- alamat end --> --}}

                                                        <p class="card-text">
                                                            <span class="text-muted mb-1 d-block">Alamat Email</span>

                                                            <i class="fa-solid fa-envelope me-2 text-success"></i>
                                                            {{ Auth::user()->email }}

                                                        </p> <!-- alamat email end -->

                                                        <p class="card-text">
                                                            <span class="text-muted mb-1 d-block">Role</span>
                                                            <i class="fa-solid fa-user me-2 text-success"></i>
                                                            {{ Auth::user()->role->name }}
                                                        </p> <!-- nomor telepon end -->

                                                        {{-- <p class="card-text">
                                                            <span class="text-muted mb-1 d-block">Alamat Website</span>

                                                            <a href="https://nokensoft.com" target="_blank"
                                                                class="text-decoration-none link-success">
                                                                <i class="fa-solid fa-globe me-2 text-success"></i>
                                                                www.nokensoft.com
                                                            </a>

                                                        </p> <!-- alamat website end --> --}}
                                                        <button class="btn btn-success btn-sm">
                                                            <i class="fa-solid fa-pencil me-1"></i> Ubah Profil
                                                        </button>
                                                    </div>
                                                    <!-- .col end -->


                                                </div>
                                                <!-- .row end -->

                                            </div>

                                        </div>
                                        <!-- .col end -->

                                    </div>
                                    <!-- .row end -->

                                </div>
                                <!-- .container end -->

                            </section>
                            <!-- CONTENT END -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
