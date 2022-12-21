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
                                <h1>Data <span class="table-project-n">Variant</span></h1>
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

                                {{-- START MODAL TAMBAH --}}
                                <div id="PrimaryModalhdbgcl" class="modal modal-edu-general default-popup-PrimaryModal fade"
                                    role="dialog">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header header-color-modal bg-color-1">
                                                <h4 class="modal-title">Tambah Data Variant</h4>
                                                <div class="modal-close-area modal-close-df">
                                                    <a class="close" data-dismiss="modal" href="#"><i
                                                            class="fa fa-close"></i></a>
                                                </div>
                                            </div>
                                            <div class="modal-body">
                                                <form method="post" action="{{ url('/variant') }}">
                                                    @csrf
                                                    <div class="mb-3">
                                                        <label for="nama_jenis" class="form-label">Nama Jenis</label>
                                                        <select class="form-control custom-select-value" name="nama_jenis">
                                                            @foreach ($jenisvariants as $jv)
                                                                <option value="{{ $jv->id }}">{{ $jv->nama_jenis }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="nama_variant" class="form-label">Nama Variant</label>
                                                        <input type="text" class="form-control" name="nama_variant">
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
                                                <h4 class="modal-title">Ubah Data Variant</h4>
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
                                                        <label for="nama_jenis" class="form-label">Nama Jenis</label>
                                                        <select class="form-control custom-select-value" name="nama_jenis">
                                                            @foreach ($jenisvariants as $jv)
                                                                @if (old('nama_jenis', $jv->id) == $variants->nama_jenis))
                                                                    <option value="{{ $jv->id }}" selected>
                                                                        {{ $jv->nama_jenis }}
                                                                    </option>
                                                                @else
                                                                    <option value="{{ $jv->nama_jenis }}"></option>
                                                                @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="nama_variant" class="form-label">Nama Variant</label>
                                                        <input type="text" class="form-control" name="nama_variant"
                                                            id="nama_variant">
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
                                            <th data-field="jenis_variant" data-editable="true">Nama Jenis</th>
                                            <th data-field="nama_variant" data-editable="true">Nama Variant</th>
                                            <th data-field="action">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($variants as $variant)
                                            <tr>
                                                <td></td>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $variant->nama_jenis }}</td>
                                                <td>{{ $variant->nama_variant }}</td>
                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <button class="btn btn-warning edit" value="{{ $variant->id }}"
                                                        data-toggle="modal" data-target="#ModalEdit">Edit</button>
                                                    <form class="d-inline" action="{{ url('/variant', $variant->id) }}"
                                                        method="POST">
                                                        @method('delete')
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger btn-sm"
                                                            onclick="return confirm('Apakah anda yakin untuk hapus data variant?')">Hapus</button>
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
        $(document).ready(function() {

            $('.edit').click(function() {
                const id = $(this).val()
                $.ajax({
                    url: `{{ url('/variant/${id}/edit') }}`,
                    method: "get",
                    success: function(data) {
                        $('#nama_jenis').val(data.nama_jenis)
                        $('#nama_variant').val(data.nama_variant)
                        $('#ModalEdit form').attr('action', `{{ url('variant/${id}') }}`)
                    }
                })
            })
        })
    </script>
@endsection
