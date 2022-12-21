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
                                <h1>Data <span class="table-project-n">PRK</span></h1>
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
                                                <h4 class="modal-title">Tambah Data Pabrikan</h4>
                                                <div class="modal-close-area modal-close-df">
                                                    <a class="close" data-dismiss="modal" href="#"><i
                                                            class="fa fa-close"></i></a>
                                                </div>
                                            </div>
                                            <form action="/prk" method="POST">
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="mb-3">
                                                        <label for="no_prk" class="form-label">No PRK</label>
                                                        <input type="text" class="form-control" name="no_prk">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="bidang" class="form-label">Bidang</label>
                                                        <input type="text" class="form-control" name="bidang">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="fungsi" class="form-label">Fungsi</label>
                                                        <input type="text" class="form-control" name="fungsi">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="sub_fungsi" class="form-label">Sub Fungsi</label>
                                                        <input type="text" class="form-control" name="sub_fungsi">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="program" class="form-label">Program</label>
                                                        <input type="text" class="form-control" name="program">
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
                                                <h4 class="modal-title">Ubah Data PRK</h4>
                                                <div class="modal-close-area modal-close-df">
                                                    <a class="close" data-dismiss="modal" href="#"><i
                                                            class="fa fa-close"></i></a>
                                                </div>
                                            </div>
                                            <div class="modal-body">
                                                <form action="" method="POST">
                                                    @csrf
                                                    @method('put')
                                                    <div class="mb-3">
                                                        <label for="no_prk" class="form-label">No PRK</label>
                                                        <input type="text" class="form-control" name="no_prk"
                                                            id="no_prk">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="bidang" class="form-label">Bidang</label>
                                                        <input type="text" class="form-control" name="bidang"
                                                            id="bidang">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="fungsi" class="form-label">Fungsi</label>
                                                        <input type="text" class="form-control" name="fungsi"
                                                            id="fungsi">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="sub_fungsi" class="form-label">Sub Fungsi</label>
                                                        <input type="text" class="form-control" name="sub_fungsi"
                                                            id="sub_fungsi">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="program" class="form-label">Program</label>
                                                        <input type="text" class="form-control" name="program"
                                                            id="program">
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
                                            <th data-field="no_prk" data-editable="true">No PRK</th>
                                            <th data-field="bidang" data-editable="true">Bidang</th>
                                            <th data-field="fungsi" data-editable="true">Fungsi</th>
                                            <th data-field="sub_fungsi" data-editable="true">Sub Fungsi</th>
                                            <th data-field="program" data-editable="true">Program</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($prks as $prk)
                                            <tr>
                                                <td></td>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $prk->no_prk }}</td>
                                                <td>{{ $prk->bidang }}</td>
                                                <td>{{ $prk->fungsi }}</td>
                                                <td>{{ $prk->sub_fungsi }}</td>
                                                <td>{{ $prk->program }}</td>
                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <button class="btn btn-warning edit" value="{{ $prk->id }}"
                                                        data-toggle="modal" data-target="#ModalEdit">Edit</button>
                                                    <form class="d-inline" action="{{ url('/prk', $prk->id) }}"
                                                        method="POST">
                                                        @method('delete')
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger btn-sm"
                                                            onclick="return confirm('Apakah anda yakin untuk hapus data PRK?')">Hapus</button>
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
                    url: `{{ url('/prk/${id}/edit') }}`,
                    method: "get",
                    success: function(data) {
                        $('#no_prk').val(data.no_prk)
                        $('#bidang').val(data.bidang)
                        $('#fungsi').val(data.fungsi)
                        $('#sub_fungsi').val(data.sub_fungsi)
                        $('#program').val(data.program)
                        $('#ModalEdit form').attr('action', `{{ url('prk/${id}') }}`)
                    }
                })
            })
        })
    </script>
@endsection
