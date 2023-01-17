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
                                <h1>Data <span class="table-project-n">Pabrikan</span> </h1>
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
                                                <h4 class="modal-title">Tambah Data Pabrikan</h4>
                                                <div class="modal-close-area modal-close-df">
                                                    <a class="close" data-dismiss="modal" href="#"><i
                                                            class="fa fa-close"></i></a>
                                                </div>
                                            </div>
                                            <form action="{{ url('/pabrikan') }}" method="POST">
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="mb-3">
                                                        <label for="nama_vendor" class="form-label">Nama Vendor</label>
                                                        <input type="text" class="form-control" name="nama_vendor"
                                                            aria-describedby="namavendorlHelp">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="alamat" class="form-label">Alamat</label>
                                                        <input type="text" class="form-control" name="alamat">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="email" class="form-label">E-mail</label>
                                                        <input type="text" class="form-control" name="email">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="no_telp" class="form-label">No Telepon</label>
                                                        <input type="text" class="form-control" name="no_telp">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="nama_direktur" class="form-label">Direktur</label>
                                                        <input type="text" class="form-control" name="nama_direktur">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="jabatan" class="form-label">Jabatan</label>
                                                        <input type="text" class="form-control" name="jabatan">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="no_notaris" class="form-label">No Notaris</label>
                                                        <textarea type="text" class="form-control" name="no_notaris"></textarea>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="no_khs" class="form-label">No KHS</label>
                                                        <textarea type="text" class="form-control" name="no_khs"></textarea>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="nama_pengadaan" class="form-label">Jenis
                                                            Pengadaan</label>
                                                        <input type="text" class="form-control" name="nama_pengadaan">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="nama_rekening" class="form-label">Nama
                                                            Rekening</label>
                                                        <input type="text" class="form-control" name="nama_rekening">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="nama_bank" class="form-label">Nama Bank</label>
                                                        <input type="text" class="form-control" name="nama_bank">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="cabang" class="form-label">Cabang</label>
                                                        <input type="text" class="form-control" name="cabang">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="no_rekening" class="form-label">No
                                                            Rekening</label>
                                                        <input type="text" class="form-control" name="no_rekening">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="no_type" class="form-label">No Type</label>
                                                        <input type="text" class="form-control" name="no_type">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="no_spm" class="form-label">No SPM</label>
                                                        <input type="text" class="form-control" name="no_spm">
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
                                                <h4 class="modal-title">Ubah Data Pabrikan</h4>
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
                                                        <label for="nama_vendor" class="form-label">Nama Vendor</label>
                                                        <input type="text" class="form-control" name="nama_vendor"
                                                            aria-describedby="namavendorlHelp" id="nama_vendor">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="alamat" class="form-label">Alamat</label>
                                                        <input type="text" class="form-control" name="alamat"
                                                            id="alamat">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="email" class="form-label">E-mail</label>
                                                        <input type="text" class="form-control" name="email"
                                                            id="email">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="no_telp" class="form-label">No Telepon</label>
                                                        <input type="text" class="form-control" name="no_telp"
                                                            id="no_telp">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="nama_direktur" class="form-label">Direktur</label>
                                                        <input type="text" class="form-control" name="nama_direktur"
                                                            id="nama_direktur">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="jabatan" class="form-label">Jabatan</label>
                                                        <input type="text" class="form-control" name="jabatan"
                                                            id="jabatan">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="no_notaris" class="form-label">No Notaris</label>
                                                        <textarea type="text" class="form-control" name="no_notaris" id="no_notaris"></textarea>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="no_khs" class="form-label">No KHS</label>
                                                        <textarea type="text" class="form-control" name="no_khs" id="no_khs"></textarea>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="nama_pengadaan" class="form-label">Jenis
                                                            Pengadaan</label>
                                                        <input type="text" class="form-control" name="nama_pengadaan"
                                                            id="nama_pengadaan">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="nama_rekening" class="form-label">Nama
                                                            Rekening</label>
                                                        <input type="text" class="form-control" name="nama_rekening"
                                                            id="nama_rekening">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="nama_bank" class="form-label">Nama Bank</label>
                                                        <input type="text" class="form-control" name="nama_bank"
                                                            id="nama_bank">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="cabang" class="form-label">Cabang</label>
                                                        <input type="text" class="form-control" name="cabang"
                                                            id="cabang">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="no_rekening" class="form-label">No
                                                            Rekening</label>
                                                        <input type="text" class="form-control" name="no_rekening"
                                                            id="no_rekening">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="no_type" class="form-label">No Type</label>
                                                        <input type="text" class="form-control" name="no_type"
                                                            id="no_type">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="no_spm" class="form-label">No SPM</label>
                                                        <input type="text" class="form-control" name="no_spm"
                                                            id="no_spm">
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
                                            <th data-field="alamat" data-editable="true">Alamat</th>
                                            <th data-field="email" data-editable="true">Email</th>
                                            <th data-field="no_telp" data-editable="true">No Telepon</th>
                                            <th data-field="nama_direktur" data-editable="true">Direktur</th>
                                            <th data-field="jabatan" data-editable="true">Jabatan</th>
                                            <th data-field="no_notaris" data-editable="true">Nomor Notaris</th>
                                            <th data-field="no_khs" data-editable="true">Nomor KHS</th>
                                            <th data-field="nama_pengadaan" data-editable="true">Jenis Pengadaan</th>
                                            <th data-field="nama_rekening" data-editable="true">Nama Rekening</th>
                                            <th data-field="nama_bank" data-editable="true">Nama Bank</th>
                                            <th data-field="cabang" data-editable="true">Cabang</th>
                                            <th data-field="no_rekening" data-editable="true">Nomor Rekening</th>
                                            <th data-field="no_type" data-editable="true">No Type Test</th>
                                            <th data-field="no_spm" data-editable="true">Nomor SPM</th>
                                            <th data-field="action" class="aksi">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($pabrikans as $pabrikan)
                                            <tr>
                                                <td></td>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $pabrikan->nama_vendor }}</td>
                                                <td>{{ $pabrikan->alamat }}</td>
                                                <td>{{ $pabrikan->email }}</td>
                                                <td>{{ $pabrikan->no_telp }}</td>
                                                <td>{{ $pabrikan->nama_direktur }}</td>
                                                <td>{{ $pabrikan->jabatan }}</td>
                                                <td>{{ $pabrikan->no_notaris }}</td>
                                                <td>{{ $pabrikan->no_khs }}</td>
                                                <td>{{ $pabrikan->nama_pengadaan }}</td>
                                                <td>{{ $pabrikan->nama_rekening }}</td>
                                                <td>{{ $pabrikan->nama_bank }}</td>
                                                <td>{{ $pabrikan->cabang }}</td>
                                                <td>{{ $pabrikan->no_rekening }}</td>
                                                <td>{{ $pabrikan->no_type }}</td>
                                                <td>{{ $pabrikan->no_spm }}</td>
                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <button class="btn btn-warning btn-sm edit"
                                                        value="{{ $pabrikan->id }}" data-toggle="modal"
                                                        data-target="#ModalEdit">
                                                        <i class="fa-regular fa-pen-to-square"></i>
                                                    </button>
                                                    <form class="d-inline" style="display: inline"
                                                        action="{{ url('/pabrikan', $pabrikan->id) }}" method="POST">
                                                        @method('delete')
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger btn-sm"
                                                            onclick="return confirm('Apakah anda yakin untuk hapus data Rab?')">
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
        $(document).ready(function() {

            $('.edit').click(function() {
                const id = $(this).val()
                $.ajax({
                    url: `{{ url('/pabrikan/${id}/edit') }}`,
                    method: "get",
                    success: function(data) {
                        $('#nama_vendor').val(data.nama_vendor)
                        $('#alamat').val(data.alamat)
                        $('#email').val(data.email)
                        $('#no_telp').val(data.no_telp)
                        $('#nama_direktur').val(data.nama_direktur)
                        $('#jabatan').val(data.jabatan)
                        $('#no_notaris').val(data.no_notaris)
                        $('#no_khs').val(data.no_khs)
                        $('#nama_pengadaan').val(data.nama_pengadaan)
                        $('#nama_rekening').val(data.nama_rekening)
                        $('#nama_bank').val(data.nama_bank)
                        $('#cabang').val(data.cabang)
                        $('#no_rekening').val(data.no_rekening)
                        $('#no_type').val(data.no_type)
                        $('#no_spm').val(data.no_spm)
                        $('#ModalEdit form').attr('action', `{{ url('pabrikan/${id}') }}`)
                    }
                })
            })
        })
    </script>
@endsection
