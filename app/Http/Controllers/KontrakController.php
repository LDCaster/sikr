<?php

namespace App\Http\Controllers;

use App\Models\JenisMaterial;
use App\Models\Kontrak;
use App\Models\Material;
use App\Models\Pabrikan;
use App\Models\Pengadaan;
use App\Models\Rab;
use App\Models\Satuan;
use Barryvdh\DomPDF\PDF as DomPDFPDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;


class KontrakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pabrikans = Pabrikan::get();
        $pengadaans = Pengadaan::get();
        $jmaterials = JenisMaterial::get();
        $satuans = Satuan::get();
        $rabs = Rab::get();
        $kontraks = Kontrak::with(['pengadaan', 'pabrikan', 'jenismaterial', 'satuan', 'rab'])->get();
        //
        return view('kontrak.index', [
            'title' => 'Data Kontrak',
            'kontraks' => $kontraks,
            'pabrikans' => $pabrikans,
            'pengadaans' => $pengadaans,
            'jmaterials' => $jmaterials,
            'satuans' => $satuans,
            'rabs' => $rabs
        ]);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'pengadaan_id' => 'max:255',
            'pabrikan_id' => 'max:255',
            'no_kr' => 'max:255',
            'bt_kr' => 'max:255',
            'tanggal_kr' => 'max:255',
            'rab_id' => 'max:255',
            'nilai_kontrak' => 'max:255',
            'terbilang_kontrak' => 'max:255',
            'nilai_jamlak' => 'max:255',
            'terbilang_jamlak' => 'max:255',
            'hari' => 'max:255',
            'tanggal' => 'max:255',
            'bulan' => 'max:255',
            'tahun' => 'max:255',
            'wd_kontrak' => 'max:255',
            'terbilang_waktu' => 'max:255',
            'direksi_pekerjaan' => 'max:255',
            'pengawas_pekerjaan' => 'max:255',
            'jmaterial_id' => 'max:255',
            'nama_variant' => 'max:255',
            'satuan_id' => 'max:255',
            'volume' => 'max:255',
            'no_type' => 'max:255',
            'no_spm' => 'max:255',
        ]);

        Kontrak::create($validatedData);
        return redirect('/kontrak ')->with('success', 'Data Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data = Kontrak::with(['pengadaan', 'pabrikan', 'jenismaterial', 'satuan', 'rab'])->find($id);
        // $data = Kontrak::find($id);
        // return $data;
        return response()->json($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $validatedData = $request->validate([
            'pengadaan_id' => 'max:255',
            'pabrikan_id' => 'max:255',
            'no_kr' => 'max:255',
            'bt_kr' => 'max:255',
            'tanggal_kr' => 'max:255',
            'rab_id' => 'max:255',
            'nilai_kontrak' => 'max:255',
            'terbilang_kontrak' => 'max:255',
            'nilai_jamlak' => 'max:255',
            'terbilang_jamlak' => 'max:255',
            'hari' => 'max:255',
            'tanggal' => 'max:255',
            'bulan' => 'max:255',
            'tahun' => 'max:255',
            'wd_kontrak' => 'max:255',
            'terbilang_waktu' => 'max:255',
            'direksi_pekerjaan' => 'max:255',
            'pengawas_pekerjaan' => 'max:255',
            'jmaterial_id' => 'max:255',
            'nama_variant' => 'max:255',
            'satuan_id' => 'max:255',
            'volume' => 'max:255',
            'no_type' => 'max:255',
            'no_spm' => 'max:255',

        ]);
        Kontrak::where('id', $id)->update($validatedData);
        return redirect('/kontrak ')->with('success', 'Data Berhasil Di Ubah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function generatePDF($id)
    {
        $pabrikans = Pabrikan::get();
        $pengadaans = Pengadaan::get();
        $jmaterials = JenisMaterial::get();
        $satuans = Satuan::get();
        $rabs = Rab::get();
        $kontraks = Kontrak::with(['pengadaan', 'pabrikan', 'jenismaterial', 'satuan', 'rab'])->where('id', $id)->get();


        $pdf = PDF::loadView('kontrak.cetak', [
            'kontraks' => $kontraks,
            'pabrikans' => $pabrikans,
            'pengadaans' => $pengadaans,
            'jmaterials' => $jmaterials,
            'satuans' => $satuans,
            'rabs' => $rabs
        ]);

        return $pdf->setPaper('a4', 'potrait')->stream('tes.pdf');
    }

    public function generateWORD(Request $request, $id)
    {
        $kontraks = Kontrak::with(['pengadaan', 'pabrikan', 'jenismaterial', 'satuan', 'rab'])->where('id', $id)->find($id);
        $pengadaan = $kontraks->pengadaan->nama_pengadaan;
        $nama_vendor = $kontraks->pabrikan->nama_vendor;
        $nama_direktur = $kontraks->pabrikan->nama_direktur;
        $jabatan = $kontraks->pabrikan->jabatan;
        $alamat = $kontraks->pabrikan->alamat;
        $email = $kontraks->pabrikan->email;
        $no_telp = $kontraks->pabrikan->no_telp;
        $nama_rekening = $kontraks->pabrikan->nama_rekening;
        $nama_bank = $kontraks->pabrikan->nama_bank;
        $cabang = $kontraks->pabrikan->cabang;
        $no_rekening = $kontraks->pabrikan->no_rekening;
        $no_notaris = $kontraks->pabrikan->no_notaris;
        $no_khs = $kontraks->pabrikan->no_khs;
        $no_kr = $kontraks->no_kr;
        $bt_kr = $kontraks->bt_kr;
        $tanggal_kr =  $kontraks->tanggal_kr;
        $prk =  $kontraks->rab->prk;
        $nama_user =  $kontraks->rab->nama_user;
        $nilai_kontrak =  $kontraks->nilai_kontrak;
        $terbilang_kontrak =  $kontraks->terbilang_kontrak;
        $nilai_kontrak =  $kontraks->nilai_jamlak;
        $terbilang_kontrak =  $kontraks->terbilang_jamlak;
        $hari =  $kontraks->hari;
        $tanggal =  $kontraks->tanggal;
        $bulan =  $kontraks->bulan;
        $tahun =  $kontraks->tahun;
        $wd_kontrak =  $kontraks->wd_kontrak;
        $terbilang_waktu =  $kontraks->terbilang_waktu;
        $direksi_pekerjaan =  $kontraks->direksi_pekerjaan;
        $pengawas_pekerjaan =  $kontraks->pengawas_pekerjaan;
        $nama_jenis =  $kontraks->jenismaterial->nama_jenis;
        $nama_variant =  $kontraks->nama_variant;
        $nama_satuan =  $kontraks->satuan->nama_satuan;
        $volume =  $kontraks->volume;
        $no_type =  $kontraks->no_type;
        $no_spm =  $kontraks->no_spm;

        // Creating the new document...
        $phpWord = new \PhpOffice\PhpWord\TemplateProcessor('assets/word/kontrak_rinci.docx');
        // dd($phpWord->setValue('hi', 'hi'));
        $phpWord->setValues(
            [
                'pengadaan' => $pengadaan,
                'nama_vendor' => $nama_vendor,
                'nama_direktur' => $nama_direktur,
                'jabatan' => $jabatan,
                'alamat' => $alamat,
                'email' => $email,
                'no_telp' => $no_telp,
                'nama_rekening' => $nama_rekening,
                'nama_bank' => $nama_bank,
                'cabang' => $cabang,
                'no_rekening' => $no_rekening,
                'no_notaris' => $no_notaris,
                'no_khs' => $no_khs,
                'no_kr' => $no_kr,
                'bt_kr' => $bt_kr,
                'tanggal_kr' => $tanggal_kr,
                'prk' => $prk,
                'nama_user' => $nama_user,
                'nilai_kontrak' => $nilai_kontrak,
                'terbilang_kontrak' => $terbilang_kontrak,
                'nilai_kontrak' => $nilai_kontrak,
                'terbilang_kontrak' => $terbilang_kontrak,
                'hari' => $hari,
                'tanggal' => $tanggal,
                'bulan' => $bulan,
                'tahun' => $tahun,
                'wd_kontrak' => $wd_kontrak,
                'terbilang_waktu' => $terbilang_waktu,
                'direksi_pekerjaan' => $direksi_pekerjaan,
                'pengawas_pekerjaan' => $pengawas_pekerjaan,
                'nama_jenis' => $nama_jenis,
                'nama_variant' => $nama_variant,
                'nama_satuan' => $nama_satuan,
                'volume' => $volume,
                'no_type' => $no_type,
                'no_spm' => $no_spm,
            ]
        );

        // $pathToSave = 'file.docx';
        $phpWord->saveAs('tes.docx');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Kontrak::destroy($id);
        return redirect('/kontrak')->with('success', 'Data Berhasil Dihapus!');
    }
}
