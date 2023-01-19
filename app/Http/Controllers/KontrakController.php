<?php

namespace App\Http\Controllers;

use App\Models\JenisMaterial;
use App\Models\Kontrak;
use App\Models\Material;
use App\Models\Pabrikan;
use App\Models\Pengadaan;
use App\Models\Rab;
use App\Models\Satuan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
