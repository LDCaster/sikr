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
                                <h1>Data <span class="table-project-n">Rencana Anggaran Biaya</span></h1>
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

                                {{-- START MODAL Tambah --}}
                                <div id="PrimaryModalhdbgcl" class="modal modal-edu-general default-popup-PrimaryModal fade"
                                    role="dialog">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header header-color-modal bg-color-1">
                                                <h4 class="modal-title">Tambah Data RAB</h4>
                                                <div class="modal-close-area modal-close-df">
                                                    <a class="close" data-dismiss="modal" href="#"><i
                                                            class="fa fa-close"></i></a>
                                                </div>
                                            </div>
                                            <form method="post" action="/rencana-anggaran-biaya">
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="mb-3">
                                                        <label for="kode_rab" class="form-label">Kode RAB</label>
                                                        <input type="text" class="form-control" name="kode_rab">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="nama_user" class="form-label">User</label>
                                                        <input type="text" class="form-control" name="nama_user">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="prk" class="form-label">PRK</label>
                                                        <input type="text" class="form-control" name="prk">
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
                                                        <label for="kode_rab" class="form-label">Kode RAB</label>
                                                        <input type="text" class="form-control" id="kode_rab"
                                                            name="kode_rab">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="nama_user" class="form-label">User</label>
                                                        <input type="text" class="form-control" id="nama_user"
                                                            name="nama_user">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="prk" class="form-label">PRK</label>
                                                        <input type="text" class="form-control" id="prk"
                                                            name="prk">
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
                                    {{-- <a href="/tambah-rab" class="btn btn-cusom-four btn-primary"><i
                                            class="fa fa-plus edu-informatio" aria-hidden="true"></i> Tambah
                                        RAB</a> --}}
                                    <a href="#" data-toggle="modal" data-target="#PrimaryModalhdbgcl"
                                        class="btn btn-cusom-four btn-primary"><i class="fa fa-plus edu-informatio"
                                            aria-hidden="true"></i> Tambah</a>
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
                                            <th data-field="unit" data-editable="true">Kode RAB</th>
                                            <th data-field="variant" data-editable="true">User</th>
                                            <th data-field="nama_rab" data-editable="true">PRK</th>
                                            <th data-field="action" class="aksi">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($rabs as $rab)
                                            <tr>
                                                <td></td>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $rab->kode_rab }}</td>
                                                <td>{{ $rab->nama_user }}</td>
                                                <td>{{ $rab->prk }}</td>
                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <button class="btn btn-warning edit" value="{{ $rab->id }}"
                                                        data-toggle="modal" data-target="#ModalEdit"> <i
                                                            class="fa-regular fa-pen-to-square"></i></button>
                                                    <form class="d-inline"
                                                        action="{{ url('/rencana-anggaran-biaya', $rab->id) }}"
                                                        method="POST">
                                                        @method('delete')
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger btn-sm"
                                                            onclick="return confirm('Apakah anda yakin untuk hapus data RAB?')">
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

            $('.edit').click(function() {
                const id = $(this).val()
                $.ajax({
                    url: `{{ url('/rencana-anggaran-biaya/${id}/edit') }}`,
                    method: "get",
                    success: function(data) {
                        $('#kode_rab').val(data.kode_rab)
                        $('#nama_user').val(data.nama_user)
                        $('#prk').val(data.prk)
                        $('#ModalEdit form').attr('action',
                            `{{ url('rencana-anggaran-biaya/${id}') }}`)
                    }
                })
            })
        })
    </script>
@endsection
