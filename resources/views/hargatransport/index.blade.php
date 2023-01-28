@extends('layout.main')

@section('content')
    <div class="sparkline13-graph">
        <div class="datatable-dashv1-list custom-datatable-overright">

            {{-- START MODAL Tambah --}}
            <div id="PrimaryModalhdbgcl" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header header-color-modal bg-color-1">
                            <h4 class="modal-title">Tambah Data Harga Transport dan Asuransi</h4>
                            <div class="modal-close-area modal-close-df">
                                <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                            </div>
                        </div>
                        <form method="post" action="/harga-transport">
                            <div class="modal-body">
                                @csrf
                                <div class="mb-3">
                                    <label for="lokasi_awal" class="form-label">Lokasi Asal</label>
                                    <input type="text" class="form-control" name="lokasi_awal">
                                </div>
                                <div class="mb-3">
                                    <label for="nama_material" class="form-label">Nama Material</label>
                                    <select class="form-control custom-select-value" name="material_id">
                                        <option value="">-- Pilih Nama Material ---</option>
                                        @foreach ($materials as $material)
                                            <option value="{{ $material->id }}">
                                                {{ $material->nama_material }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="pln_kantor_pusat" class="form-label">PLN Kantor
                                        Induk</label>
                                    <input type="text" class="form-control" name="pln_kantor_pusat">
                                </div>
                                <div class="mb-3">
                                    <label for="pln_area_up3" class="form-label">PLN Area UP3</label>
                                    <input type="text" class="form-control" name="pln_area_up3">
                                </div>

                                <div class="mb-3">
                                    <label for="harga" class="form-label">Harga</label>
                                    <input type="text" class="form-control uang" name="harga">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button data-dismiss="modal" class="btn btn-cusom-four btn-primary">Cancel</button>
                                <button type="submit" class="btn btn-cusom-four btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            {{-- END MODAL TAMBAH --}}

            {{-- START MODAL EDIT --}}
            <div id="ModalEdit" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header header-color-modal bg-color-1">
                            <h4 class="modal-title">Ubah Data Harga Transport dan Asuransi</h4>
                            <div class="modal-close-area modal-close-df">
                                <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                            </div>
                        </div>
                        <form action="" method="POST">
                            <div class="modal-body">
                                @csrf
                                @method('put')
                                <div class="mb-3">
                                    <label for="lokasi_awal" class="form-label">Lokasi Asal</label>
                                    <input type="text" class="form-control" name="lokasi_awal" id="lokasi_awal">
                                </div>
                                <div class="mb-3">
                                    <label for="nama_material" class="form-label">Nama Material</label>
                                    <select class="form-control custom-select-value" name="material_id" id="material_id">
                                        <option value="">-- Pilih Nama Material ---</option>
                                        @foreach ($materials as $material)
                                            <option value="{{ $material->id }}">
                                                {{ $material->nama_material }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="pln_kantor_pusat" class="form-label">PLN Kantor
                                        Induk</label>
                                    <input type="text" class="form-control" name="pln_kantor_pusat"
                                        id="pln_kantor_pusat">
                                </div>
                                <div class="mb-3">
                                    <label for="pln_area_up3" class="form-label">PLN Area UP3</label>
                                    <input type="text" class="form-control" name="pln_area_up3" id="pln_area_up3">
                                </div>

                                <div class="mb-3">
                                    <label for="harga" class="form-label">Harga</label>
                                    <input type="text" class="form-control uang" name="harga" id="harga">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button data-dismiss="modal" class="btn btn-cusom-four btn-primary">Cancel</button>
                                <button type="submit" class="btn btn-cusom-four btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            {{-- END MODAL EDIT --}}

            <div class="data-table-area mg-b-15" style="margin-top: 55px">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="sparkline13-list">
                                <h3 style="margin-left: 15px; font-family: 'Roboto Condensed', sans-serif;">
                                    Data Harga Transport</h3>
                                <hr>
                                @if (session()->has('success'))
                                    <div class="alert alert-success alert-success-style1 alert-success-stylenone">
                                        <button type="button" class="close sucess-op" data-dismiss="alert"
                                            aria-label="Close">
                                            <span class="icon-sc-cl" aria-hidden="true">&times;</span>
                                        </button>
                                        <i class="fa fa-check edu-checked-pro admin-check-sucess admin-check-pro-none"
                                            aria-hidden="true"></i>
                                        <p>{{ session('success') }}</p>
                                    </div>
                                @endif
                                <section class="menu-menu">
                                    <div class="col-sm-1">
                                        <a href="#" data-toggle="modal" data-target="#PrimaryModalhdbgcl"
                                            class="btn btn-cusom-four btn-primary"><i class="fa fa-plus edu-informatio"
                                                aria-hidden="true"></i> Tambah</a>
                                    </div>
                                </section>
                                <table id="table" data-toggle="table" data-pagination="true" data-search="true"
                                    data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true"
                                    data-key-events="true" data-show-toggle="false" data-resizable="true"
                                    data-cookie="true" data-cookie-id-table="saveId" data-show-export="true"
                                    data-click-to-select="true" data-toolbar="#toolbar">
                                    <thead>
                                        <tr>
                                            <th data-field="action" class="aksi">Aksi</th>
                                            <th data-field="no">No</th>
                                            <th data-field="lokasi_asal" data-editable="true">Lokasi Asal</th>
                                            <th data-field="nama_material" data-editable="true">Nama Material</th>
                                            <th data-field="pln_kantor_induk" data-editable="true">PLN Kantor Induk</th>
                                            <th data-field="pln_area_up3" data-editable="true">PLN Area UP3</th>
                                            <th data-field="harga" data-editable="true">Harga</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($htransports as $htransport)
                                            <tr>
                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <button class="btn btn-warning btn-sm edit"
                                                        value="{{ $htransport->id }}" data-toggle="modal"
                                                        data-target="#ModalEdit">
                                                        <i class="fa-regular fa-pen-to-square"></i>
                                                    </button>
                                                    <form class="d-inline" style="display: inline"
                                                        action="{{ url('/harga-transport', $htransport->id) }}"
                                                        method="POST">
                                                        @method('delete')
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger btn-sm"
                                                            onclick="return confirm('Apakah anda yakin untuk hapus data harga transport?')">
                                                            <i class="fa-solid fa-trash"></i>
                                                        </button>
                                                    </form>

                                                </td>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $htransport->lokasi_awal }}</td>
                                                <td>{{ $htransport->material->nama_material }}</td>
                                                <td>{{ $htransport->pln_kantor_pusat }}</td>
                                                <td>{{ $htransport->pln_area_up3 }}</td>
                                                <td>{{ $htransport->harga }}</td>
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

            $('.edit').click(function() {
                const id = $(this).val()
                $.ajax({
                    url: `{{ url('/harga-transport/${id}/edit') }}`,
                    method: "get",
                    success: function(data) {
                        $('#lokasi_awal').val(data.lokasi_awal)
                        $('#material_id').val(data.material_id)
                        $('#pln_kantor_pusat').val(data.pln_kantor_pusat)
                        $('#pln_area_up3').val(data.pln_area_up3)
                        $('#harga').val(data.harga)
                        $('#ModalEdit form').attr('action',
                            `{{ url('harga-transport/${id}') }}`)
                    }
                })
            })
        })
    </script>
@endsection
