@extends('layout.main')

@section('content')
    <!-- Static Table Start -->
    <div class="sparkline13-hd" style="margin-top: 45px;">
        <div class="main-sparkline13-hd">

        </div>
    </div>
    <div class="sparkline13-graph">
        <div class="datatable-dashv1-list custom-datatable-overright">

            {{-- START MODAL Tambah --}}
            <div id="PrimaryModalhdbgcl" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header header-color-modal bg-color-1">
                            <h4 class="modal-title">Tambah Data Pabrikan</h4>
                            <div class="modal-close-area modal-close-df">
                                <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                            </div>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="/direksi-pekerjaan">
                                @csrf
                                <div class="mb-3">
                                    <label for="nama_direksi" class="form-label">Nama
                                        Direksi</label>
                                    <input type="text" class="form-control" name="nama_direksi">
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
                            <h4 class="modal-title">Ubah Data Pabrikan</h4>
                            <div class="modal-close-area modal-close-df">
                                <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                            </div>
                        </div>
                        <div class="modal-body">
                            <form action="" method="POST">
                                @csrf
                                @method('put')
                                <div class="mb-3">
                                    <label for="nama_direksi" class="form-label">Direksi
                                        Pekerjaan</label>
                                    <input type="text" class="form-control" name="nama_direksi" id="nama_direksi">
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
                                    Data
                                    Direksi
                                    Pekerjaan</h3>
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
                                @if (isset($errors) && $errors->any())
                                    <div class="alert alert-danger" role="alert">
                                        @foreach ($errors->all() as $error)
                                            {{ $error }}
                                        @endforeach
                                    </div>
                                @endif
                                @if (session()->has('failures'))
                                    <table class="table table-warning" style="background-color:#ce9b02;">
                                        <tr>
                                            <th>Baris</th>
                                            <th>Attribute</th>
                                            <th>Erorr</th>
                                            <th>Value</th>
                                        </tr>

                                        @foreach (session()->get('failures') as $validasi)
                                            <tr>
                                                <td>{{ $validasi->row() }}</td>
                                                <td>{{ $validasi->attribute() }}</td>
                                                <td>
                                                    <ul>
                                                        @foreach ($validasi->errors() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </td>
                                                <td>{{ $validasi->values()[$validasi->attribute()] }}</td>
                                            </tr>
                                        @endforeach
                                    </table>
                                @endif
                                <section class="menu-menu">
                                    <div class="col-sm-1">
                                        <a href="#" data-toggle="modal" data-target="#PrimaryModalhdbgcl"
                                            class="btn btn-cusom-four btn-primary"><i class="fa fa-plus edu-informatio"
                                                aria-hidden="true"></i> Tambah</a>
                                    </div>
                                    <div class="col-sm-10">
                                        <form action="{{ url('/direksi-pekerjaan-import') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="col-sm-5">
                                                <input type="file" name="file" class="form-control">
                                            </div>
                                            <div class="col-sm-2">
                                                <button class="btn btn-cusom-four btn-primary form-control">Upload</button>
                                            </div>
                                        </form>
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
                                            <th data-field="nama_direksi" data-editable="true">Direksi Pekerjaan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($direksis as $direksi)
                                            <tr>
                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <button class="btn btn-warning btn-sm edit"
                                                        value="{{ $direksi->id }}" data-toggle="modal"
                                                        data-target="#ModalEdit">
                                                        <i class="fa-regular fa-pen-to-square"></i>
                                                    </button>
                                                    <form class="d-inline" style="display: inline"
                                                        action="{{ url('/direksi-pekerjaan', $direksi->id) }}"
                                                        method="POST">
                                                        @method('delete')
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger btn-sm"
                                                            onclick="return confirm('Apakah anda yakin untuk hapus data Direksi Pekerjaan?')">
                                                            <i class="fa-solid fa-trash"></i>
                                                        </button>
                                                    </form>

                                                </td>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $direksi->nama_direksi }}</td>
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

        <!-- Static Table End -->
        <script>
            $(document).ready(function() {

                $('.edit').click(function() {
                    const id = $(this).val()
                    $.ajax({
                        url: `{{ url('/direksi-pekerjaan/${id}/edit') }}`,
                        method: "get",
                        success: function(data) {
                            $('#nama_direksi').val(data.nama_direksi)
                            $('#nama_pengawas').val(data.nama_pengawas)
                            $('#ModalEdit form').attr('action',
                                `{{ url('direksi-pekerjaan/${id}') }}`)
                        }
                    })
                })
            })
        </script>
    @endsection
