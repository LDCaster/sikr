@extends('layout.main')

@section('content')
    <!-- Static Table Start -->
    <div class="data-table-area mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="sparkline13-list">
                        <div class="sparkline13-hd">
                            <div class="main-sparkline13-hd">
                                <h1>Data <span class="table-project-n">Rincian Nilai Kontrak</span></h1>
                            </div>
                        </div>
                        @if (session()->has('success'))
                            <div class="alert alert-success alert-success-style1 alert-success-stylenone">
                                <button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
                                    <span class="icon-sc-cl" aria-hidden="true">&times;</span>
                                </button>
                                <i class="fa fa-check edu-checked-pro admin-check-sucess admin-check-pro-none"
                                    aria-hidden="true"></i>
                                <p>{{ session('success') }}</p>
                            </div>
                        @endif
                        <div class="sparkline13-graph">
                            <div class="datatable-dashv1-list custom-datatable-overright">
                                <a href="#" data-toggle="modal" data-target="#PrimaryModalhdbgcl"
                                    class="btn btn-cusom-four btn-primary"><i class="fa fa-plus edu-informatio"
                                        aria-hidden="true"></i> Tambah</a>


                                {{-- START MODAL Tambah --}}
                                <div id="PrimaryModalhdbgcl" class="modal modal-edu-general default-popup-PrimaryModal fade"
                                    role="dialog">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header header-color-modal bg-color-1">
                                                <h4 class="modal-title">Tambah Data Rincian Nilai Kontrak</h4>
                                                <div class="modal-close-area modal-close-df">
                                                    <a class="close" data-dismiss="modal" href="#"><i
                                                            class="fa fa-close"></i></a>
                                                </div>
                                            </div>
                                            {{-- BUTTON TAMBAH DATA DINAMIS --}}
                                            {{-- <button class="btn btn-custom-four btn-primary" id="add-input"><i
                                                    class="fa fa-plus edu-informatio"></i>
                                                Tambah</button> --}}
                                            <form method="post" action="/rincian-nilai-kontrak">
                                                @csrf
                                                <div class="container">
                                                    <div class="col-lg-6">
                                                        <label for="kode_rab" class="form-label">Kode Rab</label>
                                                        <select class="form-control custom-select-value" name="kode_rab"
                                                            id="kode_rab">
                                                            <option value="">-- Pilih Rab ---</option>
                                                            @foreach ($rabs as $rab)
                                                                <option value="{{ $rab->id }}">{{ $rab->kode_rab }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <label for="nama_user" class="form-label">User</label>
                                                        <input type="text" class="form-control" name="nama_user"
                                                            id="nama_user" readonly>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <label for="prk" class="form-label">PRK</label>
                                                        <input type="text" class="form-control" name="prk"
                                                            id="prk" readonly>
                                                    </div>
                                                    <div class="col-lg-12" style="margin-top: 10px">
                                                        <label for="unit" class="form-label">Unit</label>
                                                        <select class="form-control custom-select-value" name="unit"
                                                            id="unit">
                                                            <option value="">-- Pilih Unit ---</option>
                                                            @foreach ($prks as $prk)
                                                                <option value="{{ $prk->id }}">{{ $prk->bidang }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-6" style="margin-top: 10px">
                                                        <label for="no_prk" class="form-label">No PRK</label>
                                                        <input type="text" class="form-control" name="no_prk"
                                                            id="no_prk">
                                                    </div>
                                                    <div class="col-lg-6" style="margin-top: 10px">
                                                        <label for="nama_variant" class="form-label">Variant
                                                            Type</label>
                                                        <select class="form-control custom-select-value" name="nama_variant"
                                                            id="nama_variant">
                                                            <option value="">-- Pilih Variant ---</option>
                                                            @foreach ($variants as $variant)
                                                                <option value="{{ $variant->id }}">
                                                                    {{ $variant->nama_variant }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-4" style="margin-top: 10px">
                                                        <label for="alokasi_bulan" class="form-label">Alokasi Bulan</label>
                                                        <input type="text" class="form-control" name="alokasi_bulan">
                                                    </div>
                                                    <div class="col-lg-4" style="margin-top: 10px">
                                                        <label for="volume" class="form-label">Volume</label>
                                                        <input type="text" class="form-control" name="volume">
                                                    </div>
                                                    <div class="col-lg-4" style="margin-top: 10px">
                                                        <label for="nama_satuan" class="form-label">Satuan</label>
                                                        <select class="form-control custom-select-value"
                                                            name="nama_satuan" id="nama_satuan">
                                                            <option value="">-- Pilih Satuan ---</option>
                                                            @foreach ($satuans as $satuan)
                                                                <option value="{{ $satuan->id }}">
                                                                    {{ $satuan->nama_satuan }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-4" style="margin-top: 10px">
                                                        <label for="harga_satuan" class="form-label">Harga Satuan</label>
                                                        <input type="text" class="form-control" name="harga_satuan"
                                                            id="harga_satuan">
                                                    </div>
                                                    <div class="col-lg-4" style="margin-top: 10px">
                                                        <label for="biaya_transport" class="form-label">Biaya
                                                            Transport</label>
                                                        {{-- <input type="text" class="form-control" name="biaya_transport"
                                                            id="biaya_transport"> --}}
                                                        <select class="form-control custom-select-value"
                                                            name="biaya_transport" id="biaya_transport"
                                                            id="biaya_transport">
                                                            <option value="">-- Pilih Biaya Transport ---</option>
                                                            @foreach ($satuans as $satuan)
                                                                <option value="{{ $satuan->id }}">
                                                                    {{ $satuan->nama_satuan }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-4" style="margin-top: 10px">
                                                        <label for="harga_transport" class="form-label">Harga
                                                            Transport</label>
                                                        <input type="text" class="form-control" name="harga_transport"
                                                            id="harga_transport">
                                                    </div>
                                                    <div class="col-lg-12" style="margin-top: 10px">
                                                        <label for="total" class="form-label">Total</label>
                                                        <input type="text" class="form-control" name="total">
                                                    </div>
                                                    <div id="rnk">

                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button data-dismiss="modal"
                                                        class="btn btn-cusom-four btn-primary">Cancel</button>
                                                    <button type="submit"
                                                        class="btn btn-cusom-four btn-primary">Submit</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                {{-- END MODAL TAMBAH --}}

                                {{-- START MODAL EDIT --}}
                                <div id="ModalEdit" class="modal modal-edu-general default-popup-PrimaryModal fade"
                                    role="dialog">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header header-color-modal bg-color-1">
                                                <h4 class="modal-title">Ubah Data RAB</h4>
                                                <div class="modal-close-area modal-close-df">
                                                    <a class="close" data-dismiss="modal" href="#"><i
                                                            class="fa fa-close"></i></a>
                                                </div>
                                            </div>
                                            <form action="" method="POST">
                                                @csrf
                                                @method('put')
                                                <div class="modal-body">
                                                    <div class="mb-3">
                                                        <label for="kode_rab" class="form-label">Kode Rab</label>
                                                        <select class="form-control custom-select-value" name="kode_rab"
                                                            id="kode_rab">
                                                            @foreach ($rabs as $rab)
                                                                <option value="{{ $rab->id }}">{{ $rab->kode_rab }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="unit" class="form-label">Unit</label>
                                                        <input type="text" class="form-control" name="unit"
                                                            id="unit">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="nama_variant" class="form-label">Variant Type</label>
                                                        <input type="text" class="form-control" name="nama_variant"
                                                            id="nama_variant">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="nama_satuan" class="form-label">Satuan</label>
                                                        <input type="text" class="form-control" name="nama_satuan"
                                                            id="nama_satuan">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="volume" class="form-label">Volume</label>
                                                        <input type="text" class="form-control" name="volume"
                                                            id="volume">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="alokasi_bulan" class="form-label">Alokasi
                                                            Bulan</label>
                                                        <input type="text" class="form-control" name="alokasi_bulan"
                                                            id="alokasi_bulan">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="harga_satuan" class="form-label">Harga Satuan</label>
                                                        <input type="text" class="form-control" name="harga_satuan"
                                                            id="harga_satuan">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="harga_transport" class="form-label">Harga
                                                            Transport</label>
                                                        <input type="text" class="form-control" name="harga_transport"
                                                            id="harga_transport">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="total" class="form-label">Total</label>
                                                        <input type="text" class="form-control" name="total"
                                                            id="total">
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button data-dismiss="modal"
                                                        class="btn btn-cusom-four btn-primary">Cancel</button>
                                                    <button type="submit"
                                                        class="btn btn-cusom-four btn-primary">Submit</button>
                                                </div>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                                {{-- END MODAL EDIT --}}


                                <div id="toolbar">
                                    <select class="form-control dt-tb">
                                        <option value="">Export Basic</option>
                                        <option value="all">Export All</option>
                                        <option value="selected">Export Selected</option>
                                    </select>
                                </div>
                                <table id="table" data-toggle="table" data-pagination="true" data-search="true"
                                    data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true"
                                    data-key-events="true" data-show-toggle="true" data-resizable="true"
                                    data-cookie="true" data-cookie-id-table="saveId" data-show-export="true"
                                    data-click-to-select="true" data-toolbar="#toolbar">
                                    <thead>
                                        <tr>
                                            <th data-field="state" data-checkbox="true"></th>
                                            <th data-field="no">No</th>
                                            <th data-field="kode_rab" data-editable="true">Kode RAB</th>
                                            <th data-field="unit" data-editable="true">Unit</th>
                                            <th data-field="variant" data-editable="true">Variant</th>
                                            <th data-field="satuan" data-editable="true">Satuan</th>
                                            <th data-field="volume" data-editable="true">Volume</th>
                                            <th data-field="alokasi_bulan" data-editable="true">Alokasi Bulan</th>
                                            <th data-field="no_prk" data-editable="true">No PRK</th>
                                            <th data-field="harga_satuan" data-editable="true">Harga Satuan</th>
                                            <th data-field="harga_transport" data-editable="true">Harga Transport</th>
                                            <th data-field="sub_harga" data-editable="true">Total</th>
                                            <th data-field="action" class="aksi">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($rnks as $rnk)
                                            <tr>
                                                <td></td>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $rnk->rab->kode_rab }}</td>
                                                <td>{{ $rnk->unit }}</td>
                                                <td>{{ $rnk->nama_variant }}</td>
                                                <td>{{ $rnk->nama_satuan }}</td>
                                                <td>{{ $rnk->volume }}</td>
                                                <td>{{ $rnk->alokasi_bulan }}</td>
                                                <td>{{ $rnk->no_prk }}</td>
                                                <td>{{ $rnk->harga_satuan }}</td>
                                                <td>{{ $rnk->harga_transport }}</td>
                                                <td>{{ $rnk->total }}</td>
                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <button class="btn btn-warning edit" value="{{ $rnk->id }}"
                                                        data-toggle="modal" data-target="#ModalEdit"> <i
                                                            class="fa-regular fa-pen-to-square"></i></button>
                                                    <form class="d-inline"
                                                        action="{{ url('/rincian-nilai-kontrak', $rnk->id) }}"
                                                        method="POST">
                                                        @method('delete')
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger btn-sm"
                                                            onclick="return confirm('Apakah anda yakin untuk hapus data Rincian Nilai Kontrak?')">
                                                            <i class="fa-solid fa-trash"></i></button>
                                                    </form>
                                                    <!-- Modal Tambah Data -->
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Static Table End -->

    <script>
        $(document).ready(function() {
            $("#harga_satuan, #biaya_transport").keyup(function() {
                var harga_satuan = $("#harga_satuan").val();
                var biaya_transport = $("#biaya_transport").val();
                var harga_transport = parseFloat(harga_satuan) * parseFloat(biaya_transport);
                $("#harga_transport").val(harga_transport);
            });
        })
    </script>

    <script>
        $('#kode_rab').on('change', (event) => {
            // console.log(event);
            getRab(event.target.value).then(data => {
                $('#nama_user').val(data.nama_user);
                $('#prk').val(data.prk);
            });
        });

        $('#unit').on('change', (event) => {
            // console.log(event);
            getPrk(event.target.value).then(data => {
                $('#no_prk').val(data.no_prk);
            });
        });

        async function getPrk(id) {
            let response = await fetch('/prk/' + id);
            let data = await response.json();
            // const body = await response.text();
            console.log(data);

            return data;
        }

        async function getRab(id) {
            let response = await fetch('/rencana-anggaran-biaya/' + id);
            let data = await response.json();
            // const body = await response.text();
            // console.log(data);

            return data;
        }


        // FUNGSI TAMBAH DINAMIS
        // let dataRow = 0
        // $('#add-input').click(() => {
        //     dataRow++
        //     inputRow(dataRow)
        // })

        // inputRow = (i) => {
        //     let tr = ` <div id="adjust-${i}">
    //                     <h4>Data ${i}</h4>
    //                     <div class="col-lg-6">
    //                         <label for="kode_rab" class="form-label">Kode Rab</label>
    //                         <select class="form-control custom-select-value" name="kode_rab" id="kode_rab">

    //                         </select>
    //                     </div>
    //                     <div class="col-lg-3">
    //                         <label for="nama_user" class="form-label">User</label>
    //                         <input type="text" class="form-control" name="nama_user" id="nama_user" readonly>
    //                     </div>
    //                     <div class="col-lg-3">
    //                         <label for="prk" class="form-label">PRK</label>
    //                         <input type="text" class="form-control" name="prk" id="prk" readonly>
    //                     </div>
    //                     <div class="col-lg-12" style="margin-top: 10px">
    //                         <label for="unit" class="form-label">Unit</label>
    //                         <input type="text" class="form-control" name="unit" id="unit">
    //                     </div>
    //                     <div class="col-lg-6" style="margin-top: 10px">
    //                         <label for="nama_variant" class="form-label">Variant Type</label>
    //                         <input type="text" class="form-control" name="nama_variant">
    //                     </div>
    //                     <div class="col-lg-6" style="margin-top: 10px">
    //                         <label for="no_prk" class="form-label">No PRK</label>
    //                         <input type="text" class="form-control" name="no_prk">
    //                     </div>
    //                     <div class="col-lg-4" style="margin-top: 10px">
    //                         <label for="alokasi_bulan" class="form-label">Alokasi Bulan</label>
    //                         <input type="text" class="form-control" name="alokasi_bulan">
    //                     </div>
    //                     <div class="col-lg-4" style="margin-top: 10px">
    //                         <label for="volume" class="form-label">Volume</label>
    //                         <input type="text" class="form-control" name="volume">
    //                     </div>
    //                     <div class="col-lg-4" style="margin-top: 10px">
    //                         <label for="nama_satuan" class="form-label">Satuan</label>
    //                         <input type="text" class="form-control" name="nama_satuan">
    //                     </div>
    //                     <div class="col-lg-6" style="margin-top: 10px">
    //                         <label for="harga_satuan" class="form-label">Harga Satuan</label>
    //                         <input type="text" class="form-control" name="harga_satuan">
    //                     </div>
    //                     <div class="col-lg-6" style="margin-top: 10px">
    //                         <label for="harga_transport" class="form-label">Harga Transport</label>
    //                         <input type="text" class="form-control" ame="harga_transport">
    //                     </div>
    //                     <div class="col-lg-12" style="margin-top: 10px">
    //                         <label for="total" class="form-label">Total</label>
    //                         <input type="text" class="form-control" name="total">
    //                     </div>
    //                     <button class="btn btn-custom-four btn-primary  delete-record " data-id="${i}">Hapus</button>
    //                 </div>`
        //     $('#rnk').append(tr)
        // }

        // $('#rnk').on('click', '.delete-record', function() {
        //     let id = $(this).attr('rnk-id')
        //     $('#adjust-' + id).remove()
        // })
    </script>
    <script>
        $(document).ready(function() {

            $('.edit').click(function() {
                const id = $(this).val()
                $.ajax({
                    url: `{{ url('/rincian-nilai-kontrak/${id}/edit') }}`,
                    method: "get",
                    success: function(data) {
                        // console.log(data)
                        $('#kode_rab').val(data.kode_rab)
                        $('#unit').val(data.unit)
                        $('#nama_variant').val(data.nama_variant)
                        $('#nama_satuan').val(data.nama_satuan)
                        $('#volume').val(data.volume)
                        $('#alokasi_bulan').val(data.alokasi_bulan)
                        $('#no_prk').val(data.no_prk)
                        $('#harga_satuan').val(data.harga_satuan)
                        $('#harga_transport').val(data.harga_transport)
                        $('#total').val(data.total)
                        $('#ModalEdit form').attr('action',
                            `{{ url('rincian-nilai-kontrak/${id}') }}`)
                    }
                })
            })
        })
    </script>
@endsection
