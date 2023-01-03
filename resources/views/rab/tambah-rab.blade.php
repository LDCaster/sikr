@extends('layout.main')

@section('content')
    <div class="data-table-area mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="sparkline13-list">
                        <div class="sparkline13-hd">
                            <div class="main-sparkline13-hd">
                                <h1>Tambah Data <span class="table-project-n">RAB</span></h1>
                            </div>
                        </div>
                        <div class="sparkline13-graph">
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
                                            User
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#step-2">
                                            <span class="num">2</span>
                                            Rincian Nilai Kontrak
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#step-3">
                                            <span class="num">3</span>
                                            Konfirmasi
                                        </a>
                                    </li>
                                </ul>

                                <div class="tab-content" id="h">
                                    <div id="step-1" class="tab-pane" role="tabpanel" aria-labelledby="step-1">
                                        <h3>Step 1 Tambah User</h3>
                                        <div class="basic-login-form-ad">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="all-form-element-inner">
                                                        <form action="" method="POST">
                                                            @csrf
                                                            @method('put')
                                                            <div class="mb-3">
                                                                <label for="nama_user" class="form-label">Nama
                                                                    User</label>
                                                                <input type="text" class="form-control" name="nama_user"
                                                                    id="nama_user">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="prk" class="form-label">PRK</label>
                                                                <input type="text" class="form-control" name="prk"
                                                                    id="prk">
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="step-2" class="tab-pane" role="tabpanel" aria-labelledby="step-2">
                                        <h3>Step 2 Content</h3>
                                        <button class="btn btn-custom-four btn-primary" id="add-input"><i
                                                class="fa fa-plus edu-informatio"></i>
                                            Tambah</button>

                                        {{-- <section class="container"> --}}
                                        <form action="/tambah-rab" method="post" class="form">
                                            @csrf
                                            <br>
                                            <div id="data">

                                            </div>
                                            <div id="jumlah">
                                                </hr><br>
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-md-12"
                                                            style="text-align: right; padding-bottom:10px;">
                                                            <div class="col-md-9" style="padding-top: 9px">
                                                                <h4 class="">Jumlah</h4>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <input class="form-control" style="border-radius: 20px"
                                                                    type="text" placeholder="Jumlah" readonly>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12"
                                                            style="text-align: right; padding-bottom:10px;">
                                                            <div class="col-md-9" style="padding-top: 9px">
                                                                <h4 class="">PPN 11%</h4>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <input class="form-control" style="border-radius: 20px"
                                                                    type="text" placeholder="PPN 11%" readonly>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12" style="text-align: right">
                                                            <div class="col-md-9" style="padding-top: 9px">
                                                                <h4 class="">Total + PPN</h4>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <input class="form-control" style="border-radius: 20px"
                                                                    type="text" placeholder="Total + PPN" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                </hr>
                                            </div>
                                        </form>
                                        </section>
                                    </div>
                                    <div id="step-3" class="tab-pane" role="tabpanel" aria-labelledby="step-3">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum
                                        has been
                                        the
                                        industry's standard dummy text ever since the 1500s, when an unknown printer
                                        took a
                                        galley of
                                        type
                                        and scrambled it to make a type specimen book. It has survived not only five
                                        centuries,
                                        but also
                                        the
                                        leap into electronic typesetting, remaining essentially unchanged. It was
                                        popularised in
                                        the
                                        1960s
                                        with the release of Letraset sheets containing Lorem Ipsum passages, and more
                                        recently
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
        integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script> --}}

    <script>
        let dataRow = 0
        $('#add-input').click(() => {
            const h = document.getElementById('h');
            h.style.removeProperty('height');
            dataRow++
            inputRow(dataRow)
        })

        inputRow = (i) => {
            let tr = ` <div id="adjust-${i}">
                          <hr/>
                            <h4>Data ${i}</h4>
                            <div class="column">
                                <div class="input-box">
                                    <label for="unit">Unit</label>
                                    <input type="text" placeholder="" id="unit" name="unit[]" reqired />
                                </div>
                                <div class="input-box">
                                    <label for="nama_variant">Variant Type</label>
                                    <input type="text" id="nama_variant" name="nama_variant[]" placeholder="" />
                                </div>
                                <div class="input-box">
                                    <label for="nama_satuan">Satuan</label>
                                    <input type="text" id="nama_satuan" name="nama_satuan[]" placeholder="" />
                                </div>
                                <div class="input-box">
                                    <label for="volume">Volume</label>
                                    <input type="text" id="volume" name="volume[]" placeholder="" />
                                </div>
                                <div class="input-box">
                                    <label for="alokasi_bulan">Alokasi Bulan</label>
                                    <input type="text" id="alokasi_bulan" name="alokasi_bulan[]" placeholder="" />
                                </div>
                                <div class="input-box">
                                    <label for="no_prk">No. PRK</label>
                                    <input type="text" id="no_prk" name="no_prk[]" placeholder="" />
                                </div>
                            </div>
                            <div class="column">
                                <div class="input-box">
                                    <label for="harga_satuan">Harga Satuan</label>
                                    <input type="text" id="harga_satuan" name="harga_satuan[]" placeholder="" />
                                </div>
                                <div class="input-box">
                                    <label for="harga_transport">Harga Transport dan Asuransi</label>
                                    <input type="text" id="harga_transport" name="harga_transport[]" placeholder="" />
                                </div>
                                <div class="input-box">
                                    <label for="total">Total(Rp)</label>
                                    <input type="text" id="total" name="total[]" placeholder="" />
                                </div>
                            </div>
                            <button class="btn btn-custom-four btn-primary  delete-record " data-id="${i}">Hapus</button>
                        </div>`
            $('#data').append(tr)
        }

        $('#data').on('click', '.delete-record', function() {
            let id = $(this).attr('data-id')
            $('#adjust-' + id).remove()
        })
    </script>
@endsection
{{-- <button class="btn btn-custom-four btn-primary  delete-record " data-id="${i}">Hapus</button> --}}
