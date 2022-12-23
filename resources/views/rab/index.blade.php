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
                        <div class="sparkline13-graph">
                            <div class="datatable-dashv1-list custom-datatable-overright">
                                <div id="toolbar">
                                    <a href="/tambah-rab" class="btn btn-cusom-four btn-primary"><i
                                            class="fa fa-plus edu-informatio" aria-hidden="true"></i> Tambah
                                        RAB</a>
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
                                            <th data-field="unit" data-editable="true">Unit</th>
                                            <th data-field="variant" data-editable="true">PRK</th>
                                            <th data-field="nama_rab" data-editable="true">Nama RAB</th>
                                            <th data-field="total_harga" data-editable="true">Total Harga</th>
                                            <th data-field="action">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($rabs as $rab)
                                            <tr>
                                                <td></td>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $rab->nama_rab }}</td>
                                                <td>{{ $rab->unit }}</td>
                                                <td>{{ $rab->prk }}</td>
                                                <td>{{ $rab->total_harga }}</td>
                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <button class="btn btn-warning edit" value="{{ $rab->id }}"
                                                        data-bs-toggle="modal" data-bs-target="#ModalEdit">Edit</button>
                                                    <form class="d-inline" action="{{ url('/pabrikan', $rab->id) }}"
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