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
                        <div class="sparkline13-graph">
                            <div class="datatable-dashv1-list custom-datatable-overright">
                                <div id="toolbar">
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
                                            <th data-field="action">Aksi</th>
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
                                                    <button class="btn btn-warning edit" value="{{ $pabrikan->id }}"
                                                        data-bs-toggle="modal" data-bs-target="#ModalEdit">Edit</button>
                                                    <form class="d-inline" action="{{ url('/pabrikan', $pabrikan->id) }}"
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
