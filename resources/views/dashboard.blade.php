@extends('layout.main')

@section('title', 'Dashboard')

@section('content')
    {{-- DASHBOARD START --}}

    <div class="dashtwo-order-area mg-tb-30" style="margin-top: 70px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="analytics-edu-wrap ant-res-b-30 reso-mg-b-30">
                        <div class="skill-content-3 analytics-edu">
                            <div class="skill">
                                <div class="progress">
                                    <div class="lead-content">
                                        <h3><span class="counter">{{ $tpabrikans }}</span></h3>
                                        <p>Data Pabrikan</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="analytics-edu-wrap reso-mg-b-30">
                        <div class="skill-content-3 analytics-edu analytics-edu4">
                            <div class="skill">
                                <div class="progress">
                                    <div class="lead-content">
                                        <h3><span class="counter">{{ $tjvariants }}</span></h3>
                                        <p>Data Jenis Variant</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="analytics-edu-wrap reso-mg-b-30 res-tablet-mg-t-30 dk-res-t-pro-30">
                        <div class="skill-content-3 analytics-edu analytics-edu3">
                            <div class="skill">
                                <div class="progress progress-bt">
                                    <div class="lead-content">
                                        <h3><span class="counter">{{ $tvariants }}</span></h3>
                                        <p>Data Variant</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="analytics-edu-wrap res-tablet-mg-t-30 dk-res-t-pro-30">
                        <div class="skill-content-3 analytics-edu analytics-edu2">
                            <div class="skill">
                                <div class="progress progress-bt">
                                    <div class="lead-content">
                                        <h3><span class="counter">{{ $tjmaterials }}</span></h3>
                                        <p>Data Jenis Material</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" style="margin-top: 20px;">
                    <div class="analytics-edu-wrap res-tablet-mg-t-30 dk-res-t-pro-30">
                        <div class="skill-content-3 analytics-edu analytics-edu2">
                            <div class="skill">
                                <div class="progress progress-bt">
                                    <div class="lead-content">
                                        <h3><span class="counter">{{ $tmaterials }}</span></h3>
                                        <p>Data Material</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" style="margin-top: 20px;">
                    <div class="analytics-edu-wrap res-tablet-mg-t-30 dk-res-t-pro-30">
                        <div class="skill-content-3 analytics-edu analytics-edu2">
                            <div class="skill">
                                <div class="progress progress-bt">
                                    <div class="lead-content">
                                        <h3><span class="counter">{{ $tpengadaans }}</span></h3>
                                        <p>Data Pengadaan</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" style="margin-top: 20px;">
                    <div class="analytics-edu-wrap res-tablet-mg-t-30 dk-res-t-pro-30">
                        <div class="skill-content-3 analytics-edu analytics-edu2">
                            <div class="skill">
                                <div class="progress progress-bt">
                                    <div class="lead-content">
                                        <h3><span class="counter">{{ $tdireksis }}</span></h3>
                                        <p>Data Direksi Pekerjaan</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" style="margin-top: 20px;">
                    <div class="analytics-edu-wrap res-tablet-mg-t-30 dk-res-t-pro-30">
                        <div class="skill-content-3 analytics-edu analytics-edu2">
                            <div class="skill">
                                <div class="progress progress-bt">
                                    <div class="lead-content">
                                        <h3><span class="counter">{{ $tpengawas }}</span></h3>
                                        <p>Data Pengawas Pekerjaan</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" style="margin-top: 20px; margin-left:292px;">
                    <div class="analytics-edu-wrap res-tablet-mg-t-30 dk-res-t-pro-30">
                        <div class="skill-content-3 analytics-edu analytics-edu2">
                            <div class="skill">
                                <div class="progress progress-bt">
                                    <div class="lead-content">
                                        <h3><span class="counter">{{ $tsatuans }}</span></h3>
                                        <p>Data Satuan</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" style="margin-top: 20px;">
                    <div class="analytics-edu-wrap res-tablet-mg-t-30 dk-res-t-pro-30">
                        <div class="skill-content-3 analytics-edu analytics-edu2">
                            <div class="skill">
                                <div class="progress progress-bt">
                                    <div class="lead-content">
                                        <h3><span class="counter">{{ $tprks }}</span></h3>
                                        <p>Data PRK</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- DASHBOARD END --}}
@endsection
