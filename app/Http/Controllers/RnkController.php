<?php

namespace App\Http\Controllers;

use App\Models\HargaSatuan;
use App\Models\HargaTransportAsuransi;
use App\Models\Material;
use App\Models\Pabrikan;
use App\Models\Prk;
use App\Models\Rab;
use App\Models\Rnk;
use App\Models\Satuan;
use App\Models\Variant;
use Illuminate\Http\Request;

class RnkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $rabs = Rab::get();
        $rnks = Rnk::with(['rab', 'prk', 'material', 'satuan'])->get();
        $prks = Prk::get();
        $variants = Variant::get();
        $hsatuans = HargaSatuan::get();
        $htransports = HargaTransportAsuransi::get();
        $satuans = Satuan::get();

        return view('rab/rnk.index', [
            'title' => 'Data Rincian Nilai Kontrak',
            'rnks' => $rnks,
            'rabs' => $rabs,
            'prks' => $prks,
            'variants' => $variants,
            'hsatuans' => $hsatuans,
            'htransports' => $htransports,
            'satuans' => $satuans
        ]);
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
            'rab_id' => 'max:255',
            'prk_id' => 'max:255',
            'variant_id' => 'max:255',
            'satuan_id' => 'max:255',
            'volume' => 'max:255',
            'alokasi_bulan' => 'max:255',
            'no_prk' => 'max:255',
            'harga_satuan' => 'max:255',
            'harga_transport' => 'max:255',
            'total' => 'max:255',
        ]);

        Rnk::create($validatedData);
        return redirect('/rincian-nilai-kontrak ')->with('success', 'Data Berhasil Ditambahkan!');
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
        $data = Rab::find($id);

        return response()->json($data);
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

        $rnk = Rnk::with(['rab'])->find($id);
        return response()->json($rnk);
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
            'kode_rab' => 'max:255',
            'unit' => 'max:255',
            'nama_variant' => 'max:255',
            'nama_satuan' => 'max:255',
            'volume' => 'max:255',
            'alokasi_bulan' => 'max:255',
            'no_prk' => 'max:255',
            'harga_satuan' => 'max:255',
            'harga_transport' => 'max:255',
            'total' => 'max:255',
        ]);
        Rnk::with(['rab'])->where('id', $id)->update($validatedData);
        return redirect('/rincian-nilai-kontrak')->with('success', 'Data Berhasil Di Ubah!');
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
        Rnk::destroy($id);
        return redirect('/rincian-nilai-kontrak ')->with('success', 'Data Berhasil Dihapus!');
    }
}
