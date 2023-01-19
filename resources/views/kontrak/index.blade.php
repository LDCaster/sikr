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
                                <div id="toolbar">
                                    <a href="#" data-toggle="modal" data-target="#PrimaryModalhdbgcl"
                                        class="btn btn-cusom-four btn-primary"><i class="fa fa-plus edu-informatio"
                                            aria-hidden="true"></i> Tambah</a>
                                </div>

                                {{-- START MODAL TAMBAH --}}
                                <div id="PrimaryModalhdbgcl"
                                    class="modal modal-edu-general default-popup-PrimaryModal fade " role="dialog">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header header-color-modal bg-color-1">
                                                <h4 class="modal-title">Tambah Data Kontrak</h4>
                                                <div class="modal-close-area modal-close-df">
                                                    <a class="close" data-dismiss="modal" href="#"><i
                                                            class="fa fa-close"></i></a>
                                                </div>
                                            </div>
                                            <form method="post" action="/kontrak">
                                                <div class="modal-body">
                                                    @csrf

                                                    {{-- START DATA PABRIKAN --}}
                                                    <div class="container">
                                                        <div class="col-lg-6">
                                                            <label for="pengadaan_id" class="form-label">Jenis
                                                                Pengadaan</label>
                                                            <select class="form-control custom-select-value"
                                                                name="pengadaan_id">
                                                                <option value="">-- Pilih Jenis Pengadaan ---
                                                                </option>
                                                                @foreach ($pengadaans as $pengadaan)
                                                                    <option value="{{ $pengadaan->id }}">
                                                                        {{ $pengadaan->nama_pengadaan }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label for="pabrikan_id" class="form-label">Nama
                                                                Pabrikan</label>
                                                            <select class="form-control custom-select-value"
                                                                name="pabrikan_id" id="nm_vendor">
                                                                <option value="">-- Pilih Nama Pabrikan ---
                                                                </option>
                                                                @foreach ($pabrikans as $pabrikan)
                                                                    <option value="{{ $pabrikan->id }}">
                                                                        {{ $pabrikan->nama_vendor }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label for="nama_direktur" class="form-label">Nama
                                                                Direktur</label>
                                                            <input type="text" class="form-control" name="nama_direktur"
                                                                id="nm_direktur" readonly>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label for="jabatan" class="form-label">Jabatan</label>
                                                            <input type="text" class="form-control" name="jabatan"
                                                                id="jbtn" readonly>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <label for="alamat" class="form-label">Alamat</label>
                                                            <input type="text" class="form-control  " name="alamat"
                                                                id="almt" readonly>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <label for="email" class="form-label">Email</label>
                                                            <input type="text" class="form-control  " name="email"
                                                                id="eml" readonly>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <label for="no_telp" class="form-label">Nomor
                                                                Telepon</label>
                                                            <input type="text" class="form-control  " name="no_telp"
                                                                id="notelp" readonly>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <label for="nama_bank" class="form-label">Nama Bank</label>
                                                            <input type="text" class="form-control  " name="nama_bank"
                                                                id="nm_bank" readonly>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <label for="cabang" class="form-label">Cabang</label>
                                                            <input type="text" class="form-control  " name="cabang"
                                                                id="cbng" readonly>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <label for="no_rekening" class="form-label">No
                                                                Rekening</label>
                                                            <input type="text" class="form-control  "
                                                                name="no_rekening" id="norekening" readonly>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label for="no_notaris" class="form-label">No
                                                                Notaris</label>
                                                            <textarea class="" name="no_notaris" id="nonotaris" cols="47" rows="10" readonly></textarea>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label for="no_khs" class="form-label">No KHS</label>
                                                            <textarea class="" name="no_khs" id="nokhs" cols="47" rows="10" readonly></textarea>
                                                        </div>

                                                    </div>
                                                    {{-- END DATA PABRIKAN --}}

                                                    {{-- START DATA KOntrak RInci --}}
                                                    <div class="container">
                                                        <div class="col-lg-6">
                                                            <label for="no_kr" class="form-label">Nomor Kontrak
                                                                Rinci</label>
                                                            <input type="text" class="form-control" name="no_kr">
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <label for="bt_kr" class="form-label">Bulan Tahun
                                                                KR</label>
                                                            <input type="text" class="form-control" name="bt_kr">
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <label for="tanggal_kr" class="form-label">Tanggal
                                                                KR</label>
                                                            <input type="date" class="form-control" name="tanggal_kr">
                                                        </div>
                                                    </div>
                                                    {{-- START DATA KOntrak RInci --}}

                                                    {{-- START DATA RAB --}}
                                                    <div class="container">
                                                        <div class="col-lg-4">
                                                            <label for="rab_id" class="form-label">Kode RAB</label>
                                                            <select class="form-control custom-select-value"
                                                                name="rab_id" id="kd_rab">
                                                                <option value="">-- Pilih RAB ---
                                                                </option>
                                                                @foreach ($rabs as $rab)
                                                                    <option value="{{ $rab->id }}">
                                                                        {{ $rab->kode_rab }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <label for="prk" class="form-label">Nomor PRK</label>
                                                            <input type="text" class="form-control" name="prk"
                                                                id="noprk" readonly>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <label for="user" class="form-label">User</label>
                                                            <input type="text" class="form-control" name="user"
                                                                id="nm_user" readonly>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label for="nilai_kontrak" class="form-label">Nilai
                                                                Kontrak</label>
                                                            <input type="text" class="form-control"
                                                                name="nilai_kontrak">
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label for="terbilang_kontrak" class="form-label">Terbilang
                                                                Kontrak</label>
                                                            <input type="text" class="form-control"
                                                                name="terbilang_kontrak">
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label for="nilai_jamlak" class="form-label">Nilai
                                                                Jamlak</label>
                                                            <input type="text" class="form-control"
                                                                name="nilai_jamlak">
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label for="terbilang_jamlak" class="form-label">Terbilang
                                                                Jamlak</label>
                                                            <input type="text" class="form-control"
                                                                name="terbilang_jamlak">
                                                        </div>
                                                    </div>
                                                    {{-- End DATA RAB --}}

                                                    {{-- START DATA !!!! --}}
                                                    <div class="container">
                                                        <div class="col-lg-3">
                                                            <label for="hari" class="form-label">Hari</label>
                                                            <input type="text" class="form-control" name="hari">
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <label for="tanggal" class="form-label">Tanggal</label>
                                                            <input type="text" class="form-control" name="tanggal">
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <label for="bulan" class="form-label">Bulan</label>
                                                            <input type="text" class="form-control" name="bulan">
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <label for="tahun" class="form-label">Tahun</label>
                                                            <input type="text" class="form-control" name="tahun">
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <label for="wd_kontrak" class="form-label">Waktu Durasi
                                                                Kontrak</label>
                                                            <input type="text" class="form-control" name="wd_kontrak">
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <label for="terbilang_waktu" class="form-label">Terbilang
                                                                Waktu</label>
                                                            <input type="text" class="form-control"
                                                                name="terbilang_waktu">
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <label for="direksi_pekerjaan" class="form-label">Direksi
                                                                Pekerjaan</label>
                                                            <input type="text" class="form-control"
                                                                name="direksi_pekerjaan">
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <label for="pengawas_pekerjaan" class="form-label">Pengawas
                                                                Pekerjaan</label>
                                                            <input type="text" class="form-control"
                                                                name="pengawas_pekerjaan">
                                                        </div>
                                                    </div>
                                                    {{-- END DATA !!!! --}}

                                                    {{-- START DATA Material!!!! --}}
                                                    <div class="container">
                                                        <div class="col-lg-6">
                                                            <label for="jmaterial_id" class="form-label">Material</label>
                                                            <select class="form-control custom-select-value"
                                                                name="jmaterial_id">
                                                                <option value="">-- Pilih Material ---
                                                                </option>
                                                                @foreach ($jmaterials as $jmaterial)
                                                                    <option value="{{ $jmaterial->id }}">
                                                                        {{ $jmaterial->nama_jenis }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label for="nama_variant" class="form-label">Variant
                                                                Type</label>
                                                            <input type="text" class="form-control"
                                                                name="nama_variant">
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <label for="satuan_id" class="form-label">Satuan</label>
                                                            <select class="form-control custom-select-value"
                                                                name="satuan_id">
                                                                <option value="">-- Pilih Satuan ---
                                                                </option>
                                                                @foreach ($satuans as $satuan)
                                                                    <option value="{{ $satuan->id }}">
                                                                        {{ $satuan->nama_satuan }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <label for="volume" class="form-label">Volume</label>
                                                            <input type="text" class="form-control" name="volume">
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <label for="no_type" class="form-label">Nomor Type
                                                                Test</label>
                                                            <input type="text" class="form-control" name="no_type">
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <label for="no_spm" class="form-label">Nomor SPM</label>
                                                            <input type="text" class="form-control" name="no_spm">
                                                        </div>
                                                    </div>
                                                    {{-- END DATA Material!!!! --}}

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
                                </div>
                                {{-- END MODAL TAMBAH --}}

                                {{-- START MODAL Ubah --}}
                                <div id="ModalEdit" class="modal modal-edu-general default-popup-PrimaryModal fade "
                                    role="dialog">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header header-color-modal bg-color-1">
                                                <h4 class="modal-title">Ubah Data Kontrak</h4>
                                                <div class="modal-close-area modal-close-df">
                                                    <a class="close" data-dismiss="modal" href="#"><i
                                                            class="fa fa-close"></i></a>
                                                </div>
                                            </div>
                                            <form method="post" action="">
                                                <div class="modal-body">
                                                    @csrf
                                                    @method('put')
                                                    {{-- START DATA PABRIKAN --}}
                                                    <div class="container">
                                                        <div class="col-lg-6">
                                                            <label for="pengadaan_id" class="form-label">Jenis
                                                                Pengadaan</label>
                                                            <select class="form-control custom-select-value"
                                                                name="pengadaan_id" id="pengadaan_id">
                                                                <option value="">-- Pilih Jenis Pengadaan ---
                                                                </option>
                                                                @foreach ($pengadaans as $pengadaan)
                                                                    <option value="{{ $pengadaan->id }}">
                                                                        {{ $pengadaan->nama_pengadaan }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label for="pabrikan_id" class="form-label">Nama
                                                                Pabrikan</label>
                                                            <select class="form-control custom-select-value"
                                                                name="pabrikan_id" id="pabrikan_id">
                                                                <option value="">-- Pilih Nama Pabrikan ---
                                                                </option>
                                                                @foreach ($pabrikans as $pabrikan)
                                                                    <option value="{{ $pabrikan->id }}">
                                                                        {{ $pabrikan->nama_vendor }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label for="nama_direktur" class="form-label">Nama
                                                                Direktur</label>
                                                            <input type="text" class="form-control"
                                                                name="nama_direktur" id="nama_direktur" readonly>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label for="jabatan" class="form-label">Jabatan</label>
                                                            <input type="text" class="form-control" name="jabatan"
                                                                id="jabatan" readonly>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <label for="alamat" class="form-label">Alamat</label>
                                                            <input type="text" class="form-control  " name="alamat"
                                                                id="alamat" readonly>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <label for="email" class="form-label">Email</label>
                                                            <input type="text" class="form-control  " name="email"
                                                                id="email" readonly>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <label for="no_telp" class="form-label">Nomor
                                                                Telepon</label>
                                                            <input type="text" class="form-control  " name="no_telp"
                                                                id="no_telp" readonly>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <label for="nama_bank" class="form-label">Nama Bank</label>
                                                            <input type="text" class="form-control  " name="nama_bank"
                                                                id="nama_bank" readonly>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <label for="cabang" class="form-label">Cabang</label>
                                                            <input type="text" class="form-control  " name="cabang"
                                                                id="cabang" readonly>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <label for="no_rekening" class="form-label">No
                                                                Rekening</label>
                                                            <input type="text" class="form-control  "
                                                                name="no_rekening" id="no_rekening" readonly>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label for="no_notaris" class="form-label">No
                                                                Notaris</label>
                                                            <textarea class="" name="no_notaris" id="no_notaris" cols="47" rows="10" readonly></textarea>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label for="no_khs" class="form-label">No KHS</label>
                                                            <textarea class="" name="no_khs" id="no_khs" cols="47" rows="10" readonly></textarea>
                                                        </div>

                                                    </div>
                                                    {{-- END DATA PABRIKAN --}}

                                                    {{-- START DATA KOntrak RInci --}}
                                                    <div class="container">
                                                        <div class="col-lg-6">
                                                            <label for="no_kr" class="form-label">Nomor Kontrak
                                                                Rinci</label>
                                                            <input type="text" class="form-control" name="no_kr"
                                                                id="no_kr">
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <label for="bt_kr" class="form-label">Bulan Tahun
                                                                KR</label>
                                                            <input type="text" class="form-control" name="bt_kr"
                                                                id="bt_kr">
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <label for="tanggal_kr" class="form-label">Tanggal
                                                                KR</label>
                                                            <input type="date" class="form-control" name="tanggal_kr"
                                                                id="tanggal_kr">
                                                        </div>
                                                    </div>
                                                    {{-- START DATA KOntrak RInci --}}

                                                    {{-- START DATA RAB --}}
                                                    <div class="container">
                                                        <div class="col-lg-4">
                                                            <label for="rab_id" class="form-label">Kode RAB</label>
                                                            <select class="form-control custom-select-value"
                                                                name="rab_id" id="rab_id">
                                                                <option value="">-- Pilih RAB ---
                                                                </option>
                                                                @foreach ($rabs as $rab)
                                                                    <option value="{{ $rab->id }}">
                                                                        {{ $rab->kode_rab }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <label for="prk" class="form-label">Nomor PRK</label>
                                                            <input type="text" class="form-control" name="prk"
                                                                id="prk" readonly>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <label for="user" class="form-label">User</label>
                                                            <input type="text" class="form-control" name="user"
                                                                id="user" readonly>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label for="nilai_kontrak" class="form-label">Nilai
                                                                Kontrak</label>
                                                            <input type="text" class="form-control"
                                                                name="nilai_kontrak" id="nilai_kontrak">
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label for="terbilang_kontrak" class="form-label">Terbilang
                                                                Kontrak</label>
                                                            <input type="text" class="form-control"
                                                                name="terbilang_kontrak" id="terbilang_kontrak">
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label for="nilai_jamlak" class="form-label">Nilai
                                                                Jamlak</label>
                                                            <input type="text" class="form-control"
                                                                name="nilai_jamlak" id="nilai_jamlak">
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label for="terbilang_jamlak" class="form-label">Terbilang
                                                                Jamlak</label>
                                                            <input type="text" class="form-control"
                                                                name="terbilang_jamlak" id="terbilang_jamlak">
                                                        </div>
                                                    </div>
                                                    {{-- End DATA RAB --}}

                                                    {{-- START DATA !!!! --}}
                                                    <div class="container">
                                                        <div class="col-lg-3">
                                                            <label for="hari" class="form-label">Hari</label>
                                                            <input type="text" class="form-control" name="hari"
                                                                id="hari">
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <label for="tanggal" class="form-label">Tanggal</label>
                                                            <input type="text" class="form-control" name="tanggal"
                                                                id="tanggal">
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <label for="bulan" class="form-label">Bulan</label>
                                                            <input type="text" class="form-control" name="bulan"
                                                                id="bulan">
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <label for="tahun" class="form-label">Tahun</label>
                                                            <input type="text" class="form-control" name="tahun"
                                                                id="tahun">
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <label for="wd_kontrak" class="form-label">Waktu Durasi
                                                                Kontrak</label>
                                                            <input type="text" class="form-control" name="wd_kontrak"
                                                                id="wd_kontrak">
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <label for="terbilang_waktu" class="form-label">Terbilang
                                                                Waktu</label>
                                                            <input type="text" class="form-control"
                                                                name="terbilang_waktu" id="terbilang_waktu">
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <label for="direksi_pekerjaan" class="form-label">Direksi
                                                                Pekerjaan</label>
                                                            <input type="text" class="form-control"
                                                                name="direksi_pekerjaan" id="direksi_pekerjaan">
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <label for="pengawas_pekerjaan" class="form-label">Pengawas
                                                                Pekerjaan</label>
                                                            <input type="text" class="form-control"
                                                                name="pengawas_pekerjaan" id="pengawas_pekerjaan">
                                                        </div>
                                                    </div>
                                                    {{-- END DATA !!!! --}}

                                                    {{-- START DATA Material!!!! --}}
                                                    <div class="container">
                                                        <div class="col-lg-6">
                                                            <label for="jmaterial_id" class="form-label">Material</label>
                                                            <select class="form-control custom-select-value"
                                                                name="jmaterial_id" id="jmaterial_id">
                                                                <option value="">-- Pilih Material ---
                                                                </option>
                                                                @foreach ($jmaterials as $jmaterial)
                                                                    <option value="{{ $jmaterial->id }}">
                                                                        {{ $jmaterial->nama_jenis }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label for="nama_variant" class="form-label">Variant
                                                                Type</label>
                                                            <input type="text" class="form-control"
                                                                name="nama_variant" id="nama_variant">
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <label for="satuan_id" class="form-label">Satuan</label>
                                                            <select class="form-control custom-select-value"
                                                                name="satuan_id" id="satuan_id">
                                                                <option value="">-- Pilih Satuan ---
                                                                </option>
                                                                @foreach ($satuans as $satuan)
                                                                    <option value="{{ $satuan->id }}">
                                                                        {{ $satuan->nama_satuan }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <label for="volume" class="form-label">Volume</label>
                                                            <input type="text" class="form-control" name="volume"
                                                                id="volume">
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <label for="no_type" class="form-label">Nomor Type
                                                                Test</label>
                                                            <input type="text" class="form-control" name="no_type"
                                                                id="no_type">
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <label for="no_spm" class="form-label">Nomor SPM</label>
                                                            <input type="text" class="form-control" name="no_spm"
                                                                id="no_spm">
                                                        </div>
                                                    </div>
                                                    {{-- END DATA Material!!!! --}}

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
                                </div>
                                {{-- END MODAL Ubah --}}

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
                                        <th data-field="action" class="aksi">Aksi</th>
                                        <th data-field="no">No</th>
                                        <th data-field="nama_pengadaan" data-editable="true" class="nama_pengadaan">Nama
                                            Pengadaan</th>
                                        <th data-field="nama_pabrikan" data-editable="true" class="nama_vendor">Nama
                                            Pabrikan</th>
                                        <th data-field="nama_direktur" data-editable="true" class="nama_direktur">Nama
                                            Direktur</th>
                                        <th data-field="jabatan" data-editable="true">Jabatan</th>
                                        <th data-field="alamat" data-editable="true" class="alamat">Alamat</th>
                                        <th data-field="email" data-editable="true">Email</th>
                                        <th data-field="no_telp" data-editable="true" class="no_telp">Nomor Telepon
                                        </th>
                                        <th data-field="nama_bank" data-editable="true" class="nama_bank">Nama BANK
                                        </th>
                                        <th data-field="cabang" data-editable="true" class="cabang">Cabang</th>
                                        <th data-field="no_rekening" data-editable="true" class="no_rekening">No
                                            Rekening</th>
                                        <th data-field="no_notaris" data-editable="true" class="no_notaris">No
                                            Notaris
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

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($kontraks as $kontrak)
                                        <tr>
                                            <td>
                                                <!-- Button trigger modal -->
                                                <button class="btn btn-warning btn-sm edit" value="{{ $kontrak->id }}"
                                                    data-toggle="modal" data-target="#ModalEdit">
                                                    <i class="fa-regular fa-pen-to-square"></i>
                                                </button>
                                                <form class="d-inline" style="display: inline"
                                                    action="{{ url('/kontrak', $kontrak->id) }}" method="POST">
                                                    @method('delete')
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger btn-sm"
                                                        onclick="return confirm('Apakah anda yakin untuk hapus data kontrak?')">
                                                        <i class="fa-solid fa-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $kontrak->pengadaan->nama_pengadaan }}</td>
                                            <td>{{ $kontrak->pabrikan->nama_vendor }}</td>
                                            <td>{{ $kontrak->pabrikan->nama_direktur }}</td>
                                            <td>{{ $kontrak->pabrikan->jabatan }}</td>
                                            <td>{{ $kontrak->pabrikan->alamat }}</td>
                                            <td>{{ $kontrak->pabrikan->email }}</td>
                                            <td>{{ $kontrak->pabrikan->no_telp }}</td>
                                            <td>{{ $kontrak->pabrikan->nama_bank }}</td>
                                            <td>{{ $kontrak->pabrikan->cabang }}</td>
                                            <td>{{ $kontrak->pabrikan->no_rekening }}</td>
                                            <td>{{ $kontrak->pabrikan->no_notaris }}</td>
                                            <td>{{ $kontrak->pabrikan->no_khs }}</td>
                                            <td>{{ $kontrak->no_kr }}</td>
                                            <td>{{ $kontrak->bt_kr }}</td>
                                            <td>{{ $kontrak->tanggal_kr }}</td>
                                            <td>{{ $kontrak->rab->prk }}</td>
                                            <td>{{ $kontrak->rab->nama_user }}</td>
                                            <td>{{ $kontrak->nilai_kontrak }}</td>
                                            <td>{{ $kontrak->terbilang_kontrak }}</td>
                                            <td>{{ $kontrak->nilai_jamlak }}</td>
                                            <td>{{ $kontrak->terbilang_jamlak }}</td>
                                            <td>{{ $kontrak->hari }}</td>
                                            <td>{{ $kontrak->tanggal }}</td>
                                            <td>{{ $kontrak->bulan }}</td>
                                            <td>{{ $kontrak->tahun }}</td>
                                            <td>{{ $kontrak->wd_kontrak }}</td>
                                            <td>{{ $kontrak->terbilang_waktu }}</td>
                                            <td>{{ $kontrak->direksi_pekerjaan }}</td>
                                            <td>{{ $kontrak->pengawas_pekerjaan }}</td>
                                            <td>{{ $kontrak->jenismaterial->nama_jenis }}</td>
                                            <td>{{ $kontrak->nama_variant }}</td>
                                            <td>{{ $kontrak->satuan->nama_satuan }}</td>
                                            <td>{{ $kontrak->volume }}</td>
                                            <td>{{ $kontrak->no_type }}</td>
                                            <td>{{ $kontrak->no_spm }}</td>

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


    {{-- START GET DATA PABRIKAN by Nama VENDOR  --}}
    <script>
        $('#nm_vendor').on('change', (event) => {
            // console.log(event);
            getPabrikan(event.target.value).then(data => {
                $('#nm_direktur').val(data.nama_direktur);
                $('#jbtn').val(data.jabatan);
                $('#almt').val(data.alamat);
                $('#eml').val(data.no_telp);
                $('#notelp').val(data.no_telp);
                $('#nm_bank').val(data.nama_bank);
                $('#cbng').val(data.cabang);
                $('#norekening').val(data.no_rekening);
                $('#nonotaris').val(data.no_notaris);
                $('#nokhs').val(data.no_khs);
            });
        });

        async function getPabrikan(id) {
            let response = await fetch('/pabrikan/' + id);
            let data = await response.json();


            return data;
        }
    </script>
    {{-- END GET DATA PABRIKAN by Nama VENDOR  --}}

    {{-- START GET DATA RAB by Kode RAB  --}}
    <script>
        $('#kd_rab').on('change', (event) => {
            // console.log(event);
            getRab(event.target.value).then(data => {
                $('#noprk').val(data.prk);
                $('#nm_user').val(data.nama_user);
            });
        });

        async function getRab(id) {
            let response = await fetch('/rincian-nilai-kontrak/' + id);
            let data = await response.json();


            return data;
        }
    </script>
    {{-- END GET DATA RAB by Kode RAB  --}}


    {{-- START GET DATA UNTUK UPDATE  --}}
    <script>
        $(document).ready(function() {

            $('.edit').click(function() {
                const id = $(this).val()
                $.ajax({
                    url: `{{ url('/kontrak/${id}/edit') }}`,
                    method: "get",
                    success: function(data) {
                        $('#pengadaan_id').val(data.pengadaan_id)
                        $('#pabrikan_id').val(data.pabrikan_id)
                        $('#nama_direktur').val(data.pabrikan.nama_direktur)
                        $('#jabatan').val(data.pabrikan.jabatan)
                        $('#alamat').val(data.pabrikan.alamat)
                        $('#email').val(data.pabrikan.email)
                        $('#no_telp').val(data.pabrikan.no_telp)
                        $('#nama_bank').val(data.pabrikan.nama_bank)
                        $('#cabang').val(data.pabrikan.cabang)
                        $('#no_rekening').val(data.pabrikan.no_rekening)
                        $('#no_notaris').val(data.pabrikan.no_notaris)
                        $('#no_khs').val(data.pabrikan.no_khs)
                        $('#no_kr').val(data.no_kr)
                        $('#bt_kr').val(data.bt_kr)
                        $('#tanggal_kr').val(data.tanggal_kr)
                        $('#rab_id').val(data.rab_id)
                        $('#prk').val(data.rab.prk)
                        $('#user').val(data.rab.nama_user)
                        $('#nilai_kontrak').val(data.nilai_kontrak)
                        $('#terbilang_kontrak').val(data.terbilang_kontrak)
                        $('#nilai_jamlak').val(data.nilai_jamlak)
                        $('#terbilang_jamlak').val(data.terbilang_jamlak)
                        $('#hari').val(data.hari)
                        $('#tanggal').val(data.tanggal)
                        $('#bulan').val(data.bulan)
                        $('#tahun').val(data.tahun)
                        $('#wd_kontrak').val(data.wd_kontrak)
                        $('#terbilang_waktu').val(data.terbilang_waktu)
                        $('#direksi_pekerjaan').val(data.direksi_pekerjaan)
                        $('#pengawas_pekerjaan').val(data.pengawas_pekerjaan)
                        $('#jmaterial_id').val(data.jmaterial_id)
                        $('#nama_variant').val(data.nama_variant)
                        $('#satuan_id').val(data.satuan_id)
                        $('#volume').val(data.volume)
                        $('#no_type').val(data.no_type)
                        $('#no_spm').val(data.no_spm)
                        $('#ModalEdit form').attr('action', `{{ url('kontrak/${id}') }}`)
                    }
                })
            })
        })
    </script>
    {{-- END GET DATA UNTUK UPDATE  --}}
@endsection
