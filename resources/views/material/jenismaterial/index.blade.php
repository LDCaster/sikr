@extends('layout.main')

@section('content')
    <!-- Static Table Start -->

    <div class="sparkline13-graph">
        <div class="datatable-dashv1-list custom-datatable-overright">

            {{-- START MODAL TAMBAH --}}
            <div id="PrimaryModalhdbgcl" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header header-color-modal bg-color-1">
                            <h4 class="modal-title">Tambah Jenis Material</h4>
                            <div class="modal-close-area modal-close-df">
                                <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                            </div>
                        </div>
                        <div class="modal-body">
                            <form action="{{ url('/jenis-material') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="nama_jenis" class="form-label">Jenis Material</label>
                                    <input type="text" class="form-control" name="nama_jenis">
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
                            <h4 class="modal-title">Ubah Jenis Material</h4>
                            <div class="modal-close-area modal-close-df">
                                <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                            </div>
                        </div>
                        <div class="modal-body">
                            <form action="" method="POST">
                                @csrf
                                @method('put')
                                <div class="mb-3">
                                    <label for="nama_jenis" class="form-label">Jenis Material</label>
                                    <input type="text" class="form-control" name="nama_jenis" id="nama_jenis">
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
                                <h3 style="margin-left: 15px; font-family: 'Roboto Condensed', sans-serif;">Data Jenis
                                    Material</h3>
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
                                @if ($errors->any())
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
                                                aria-hidden="true"></i>
                                            Tambah</a>
                                    </div>
                                    <div class="col-sm-10">
                                        <form action="{{ url('/jenis-material-import') }}" method="POST"
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
                                    data-show-columns="false" data-show-pagination-switch="true" data-show-refresh="true"
                                    data-key-events="true" data-show-toggle="false " data-resizable="true"
                                    data-cookie="true" data-cookie-id-table="saveId" data-show-export="true"
                                    data-click-to-select="true" data-toolbar="#toolbar">
                                    <thead>
                                        <tr>
                                            <th data-field="action" class="aksi">Aksi</th>
                                            <th data-field="no">No</th>
                                            <th data-field="jenis_variant" data-editable="true">Nama Jenis</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($jmaterials as $jmaterial)
                                            <tr>
                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <button class="btn btn-warning btn-sm edit"
                                                        value="{{ $jmaterial->id }}" data-toggle="modal"
                                                        data-target="#ModalEdit">
                                                        <i class="fa-regular fa-pen-to-square"></i>
                                                    </button>
                                                    <form class="d-inline" style="display: inline"
                                                        action="{{ url('/jenis-material', $jmaterial->id) }}"
                                                        method="POST">
                                                        @method('delete')
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger btn-sm"
                                                            onclick="return confirm('Apakah anda yakin untuk hapus data PRK?')">
                                                            <i class="fa-solid fa-trash"></i>
                                                        </button>
                                                    </form>
                                                    <!-- Modal Tambah Data -->
                                                </td>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $jmaterial->nama_jenis }}</td>
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
                    url: `{{ url('/jenis-material/${id}/edit') }}`,
                    method: "get",
                    success: function(data) {
                        $('#nama_jenis').val(data.nama_jenis)
                        $('#ModalEdit form').attr('action',
                            `{{ url('jenis-material/${id}') }}`)
                    }
                })
            })
        })
    </script>
@endsection
