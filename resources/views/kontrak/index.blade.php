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
                                <h1>Data <span class="table-project-n">Kontrak</span></h1>
                            </div>
                        </div>
                        <div class="sparkline13-graph">
                            <div class="datatable-dashv1-list custom-datatable-overright">
                                <div id="toolbar">
                                    <a href="#" data-toggle="modal" data-target="#PrimaryModalhdbgcl"
                                        class="btn btn-cusom-four btn-primary"><i class="fa fa-plus edu-informatio"
                                            aria-hidden="true"></i> Tambah</a>
                                    <div id="PrimaryModalhdbgcl"
                                        class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header header-color-modal bg-color-1">
                                                    <h4 class="modal-title">Tambah Data</h4>
                                                    <div class="modal-close-area modal-close-df">
                                                        <a class="close" data-dismiss="modal" href="#"><i
                                                                class="fa fa-close"></i></a>
                                                    </div>
                                                </div>
                                                <div class="modal-body">
                                                    <i class="educate-icon educate-checked modal-check-pro"></i>
                                                    <h2>Awesome!</h2>
                                                    <p>The Modal plugin is a dialog box/popup window that is displayed on
                                                        top of the current page</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <a data-dismiss="modal" href="#">Cancel</a>
                                                    <a href="#">Process</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <select class="form-control dt-tb">
                                        <option value="">Export Basic</option>
                                        <option value="all">Export All</option>
                                        <option value="selected">Export Selected</option>
                                    </select>
                                </div>
                                <table id="table" data-toggle="table" data-pagination="true" data-search="true"
                                    data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true"
                                    data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                    data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true"
                                    data-toolbar="#toolbar">
                                    <thead>
                                        <tr>
                                            <th data-field="state" data-checkbox="true"></th>
                                            <th data-field="no">No</th>
                                            <th data-field="nama_pengadaan" data-editable="true">Nama Pengadaan</th>
                                            <th data-field="nama_pabrikan" data-editable="true">Nama Pabrikan</th>
                                            <th data-field="nama_direktur" data-editable="true">Nama Direktur</th>
                                            <th data-field="jabatan" data-editable="true">Jabatan</th>
                                            <th data-field="alamat" data-editable="true" class="alamat">Alamat</th>
                                            <th data-field="email" data-editable="true">Email</th>
                                            <th data-field="no_telp" data-editable="true" class="no_telp">Nomor Telepon</th>
                                            <th data-field="nama_bank" data-editable="true" class="nama_bank">Nama BANK</th>
                                            <th data-field="cabang" data-editable="true" class="cabang">Cabang</th>
                                            <th data-field="no_rekening" data-editable="true" class="no_rekening">No
                                                Rekening</th>
                                            <th data-field="no_notaris" data-editable="true" class="no_notaris">No Notaris
                                            </th>
                                            <th data-field="no_khs" data-editable="true" class="no_khs">No KHS</th>
                                            <th data-field="no_kr" data-editable="true">No Kontrak Rinci</th>
                                            <th data-field="bulan_tahun_kr" data-editable="true">Bulan Tahun KR</th>
                                            <th data-field="tanggal_kr" data-editable="true">Tanggal KR</th>
                                            <th data-field="no_prk" data-editable="true">Nomor PRK</th>
                                            <th data-field="user" data-editable="true">User</th>
                                            <th data-field="nilai_kontrak" data-editable="true">Nilai Kontrak</th>
                                            <th data-field="terbilang_kontrak" data-editable="true">Terbilang Kontrak</th>
                                            <th data-field="nilai_jamlak" data-editable="true">Nilai Jamlak</th>
                                            <th data-field="terbilang_jamlak" data-editable="true">Terbilang Jamlak</th>
                                            <th data-field="hari" data-editable="true">Hari</th>
                                            <th data-field="tanggal" data-editable="true">Tanggal</th>
                                            <th data-field="bulan" data-editable="true">Bulan</th>
                                            <th data-field="tahun" data-editable="true">Tahun</th>
                                            <th data-field="wd_kontrak" data-editable="true">Waktu Durasi Kontrak</th>
                                            <th data-field="terbilang_waktu" data-editable="true">Terbilang Waktu</th>
                                            <th data-field="direksi_pekerjaan" data-editable="true">Direksi Pekerjaan</th>
                                            <th data-field="pengawas_pekerjaan" data-editable="true">Pengawas Pekerjaan
                                            </th>
                                            <th data-field="material" data-editable="true">Material</th>
                                            <th data-field="variant" data-editable="true">Variant Type</th>
                                            <th data-field="satuan" data-editable="true">Satuan</th>
                                            <th data-field="volume" data-editable="true">Volume</th>
                                            <th data-field="no_type" data-editable="true">Nomor Type Test</th>
                                            <th data-field="no_spm" data-editable="true">Nomor SPM</th>
                                            <th data-field="action">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($kontraks as $kontrak)
                                            <tr>
                                                <td></td>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $kontrak->nama_pengadaan }}</td>
                                                <td>{{ $kontrak->nama_vendor }}</td>
                                                <td>{{ $kontrak->nama_direktur }}</td>
                                                <td>{{ $kontrak->jabatan }}</td>
                                                <td>{{ $kontrak->alamat }}</td>
                                                <td>{{ $kontrak->email }}</td>
                                                <td>{{ $kontrak->no_telp }}</td>
                                                <td>{{ $kontrak->nama_bank }}</td>
                                                <td>{{ $kontrak->cabang }}</td>
                                                <td>{{ $kontrak->no_rekening }}</td>
                                                <td>{{ $kontrak->no_notaris }}</td>
                                                <td>{{ $kontrak->no_khs }}</td>
                                                <td>{{ $kontrak->no_kr }}</td>
                                                <td>{{ $kontrak->bt_kr }}</td>
                                                <td>{{ $kontrak->tanggal_kr }}</td>
                                                <td>{{ $kontrak->user }}</td>
                                                <td>{{ $kontrak->rab_id }}</td>
                                                <td>{{ $kontrak->terbilang_kontrak }}</td>
                                                <td>{{ $kontrak->hari }}</td>
                                                <td>{{ $kontrak->tanggal }}</td>
                                                <td>{{ $kontrak->bulan }}</td>
                                                <td>{{ $kontrak->tahun }}</td>
                                                <td>{{ $kontrak->wd_kontrak }}</td>
                                                <td>{{ $kontrak->terbilang_waktu }}</td>
                                                <td>{{ $kontrak->nama_direksi }}</td>
                                                <td>{{ $kontrak->nama_pengawas }}</td>
                                                <td>{{ $kontrak->nama_material }}</td>
                                                <td>{{ $kontrak->nama_variant }}</td>
                                                {{-- <td>{{ $kontrak->volume_rab }}</td> --}} <td> </td>
                                                {{-- <td>{{ $kontrak->volume_rab }}</td> --}} <td> </td>
                                                {{-- <td>{{ $kontrak->volume_rab }}</td> --}} <td> </td>
                                                {{-- <td>{{ $kontrak->volume_rab }}</td> --}} <td> </td>
                                                {{-- <td>{{ $kontrak->volume_rab }}</td> --}} <td> </td>
                                                <td>{{ $kontrak->no_type }}</td>
                                                <td>{{ $kontrak->no_spm }}</td>
                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <button class="btn btn-warning edit" value="{{ $kontrak->id }}"
                                                        data-bs-toggle="modal" data-bs-target="#ModalEdit">Edit</button>
                                                    <form class="d-inline" action="{{ url('/pabrikan', $kontrak->id) }}"
                                                        method="POST">
                                                        @method('delete')
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger btn-sm"
                                                            onclick="return confirm('Apakah anda yakin untuk hapus data Pabrikan?')">Hapus</button>
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
@endsection
