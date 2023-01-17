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
                                <h1>Data <span class="table-project-n">Harga Satuan</span></h1>
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
                                                <h4 class="modal-title">Tambah Data Harga Satuan</h4>
                                                <div class="modal-close-area modal-close-df">
                                                    <a class="close" data-dismiss="modal" href="#"><i
                                                            class="fa fa-close"></i></a>
                                                </div>
                                            </div>
                                            <form method="post" action="/harga-satuan">
                                                <div class="modal-body">
                                                    @csrf
                                                    <div class="mb-3">
                                                        <label for="pabrikan_id" class="form-label">Nama Vendor</label>
                                                        <select class="form-control custom-select-value" name="pabrikan_id"
                                                            id="pabrikan_id">
                                                            <option value="">-- Pilih No KHS ---</option>
                                                            @foreach ($pabrikans as $pabrikan)
                                                                <option value="{{ $pabrikan->id }}">
                                                                    {{ $pabrikan->nama_vendor }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="no_khs" class="form-label">No KHS</label>
                                                        <textarea class="form-control" name="no_khs" id="no_khs" readonly cols="20" rows="10"></textarea>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="variant_id" class="form-label">Nama Material</label>
                                                        <select class="form-control custom-select-value" name="variant_id">
                                                            <option value="">-- Pilih Nama Material ---</option>
                                                            @foreach ($materials as $material)
                                                                <option value="{{ $material->id }}">
                                                                    {{ $material->nama_material }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="tahun" class="form-label">Tahun</label>
                                                        <input type="text" class="form-control" name="tahun">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="harga_satuan" class="form-label">Harga Satuan</label>
                                                        <input type="text" class="form-control uang" name="harga_satuan">
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
                                                <h4 class="modal-title">Ubah Data Harga Satuan</h4>
                                                <div class="modal-close-area modal-close-df">
                                                    <a class="close" data-dismiss="modal" href="#"><i
                                                            class="fa fa-close"></i></a>
                                                </div>
                                            </div>
                                            <form action="" method="POST">
                                                <div class="modal-body">
                                                    @csrf
                                                    @method('put')
                                                    <div class="mb-3">
                                                        <label for="pabrikan_id_edit" class="form-label">Nama Vendor</label>
                                                        <select class="form-control custom-select-value"
                                                            name="pabrikan_id_edit" id="pabrikan_id_edit">
                                                            <option value="">-- Pilih No KHS ---</option>
                                                            @foreach ($pabrikans as $pabrikan)
                                                                <option value="{{ $pabrikan->id }}">
                                                                    {{ $pabrikan->nama_vendor }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="no_khs_edit" class="form-label">No KHS</label>
                                                        <textarea class="form-control" name="no_khs_edit" id="no_khs_edit" readonly cols="30" rows="10"></textarea>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="variant_id" class="form-label">Nama Material</label>
                                                        <select class="form-control custom-select-value" name="variant_id"
                                                            id="variant_id">
                                                            <option value="">-- Pilih Nama Material ---</option>
                                                            @foreach ($materials as $material)
                                                                <option value="{{ $material->id }}">
                                                                    {{ $material->nama_material }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="tahun" class="form-label">Tahun</label>
                                                        <input type="text" class="form-control" name="tahun"
                                                            id="tahun">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="harga_satuan" class="form-label">Harga Satuan</label>
                                                        <input type="text" class="form-control uang"
                                                            name="harga_satuan" id="harga_satuan">
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
                                            <th data-field="nama_vendor" data-editable="true">Nama Vendor</th>
                                            <th data-field="no_khs">No KHS</th>
                                            <th data-field="nama_variant" data-editable="true">Nama Variant</th>
                                            <th data-field="tahun" data-editable="true">Tahun</th>
                                            <th data-field="harga_satuan" data-editable="true">Harga Satuan</th>
                                            <th data-field="action" class="aksi">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($hsatuans as $hsatuan)
                                            <tr>
                                                <td></td>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $hsatuan->pabrikan->nama_vendor }}</td>
                                                <td>{{ $hsatuan->pabrikan->no_khs }}</td>
                                                <td>{{ $hsatuan->material->nama_material }}</td>
                                                <td>{{ $hsatuan->tahun }}</td>
                                                <td>{{ $hsatuan->harga_satuan }}</td>
                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <button class="btn btn-warning btn-sm edit"
                                                        value="{{ $hsatuan->id }}" data-toggle="modal"
                                                        data-target="#ModalEdit">
                                                        <i class="fa-regular fa-pen-to-square"></i>
                                                    </button>
                                                    <form class="d-inline" style="display: inline"
                                                        action="{{ url('/harga-satuan', $hsatuan->id) }}" method="POST">
                                                        @method('delete')
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger btn-sm"
                                                            onclick="return confirm('Apakah anda yakin untuk hapus data harga satuan?')">
                                                            <i class="fa-solid fa-trash"></i>
                                                        </button>
                                                    </form>
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
        $('#pabrikan_id').on('change', (event) => {
            // console.log(event);
            getKHS(event.target.value).then(data => {
                $('#no_khs').val(data.no_khs);
            });
        });
        $('#pabrikan_id_edit').on('change', (event) => {
            // console.log(event);
            getKHS(event.target.value).then(data => {
                $('#no_khs_edit').val(data.no_khs);
            });
        });

        async function getKHS(id) {
            let response = await fetch('/pabrikan/' + id);
            let data = await response.json();
            // const body = await response.text();
            console.log(data);

            return data;
        }
    </script>


    <script>
        $(document).ready(function() {

            $('.edit').click(function() {
                const id = $(this).val()
                $.ajax({
                    url: `{{ url('/harga-satuan/${id}/edit') }}`,
                    method: "get",
                    success: function(data) {
                        $('#variant_id').val(data.variant_id)
                        $('#pabrikan_id_edit').val(data.pabrikan_id)
                        $('#no_khs_edit').val(data.pabrikan.no_khs)
                        $('#tahun').val(data.tahun)
                        $('#harga_satuan').val(data.harga_satuan)
                        $('#ModalEdit form').attr('action',
                            `{{ url('harga-satuan/${id}') }}`)
                    }
                })
            })
        })
    </script>
@endsection
