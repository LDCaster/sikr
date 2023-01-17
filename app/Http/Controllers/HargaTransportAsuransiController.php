<?php

namespace App\Http\Controllers;

use App\Models\HargaTransportAsuransi;
use App\Models\Material;
use Illuminate\Http\Request;

class HargaTransportAsuransiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //
        $materials = Material::get();
        $htransports = HargaTransportAsuransi::with(['material'])->get();

        return view('hargatransport.index', [
            'title' => 'Harga Transport & Asuransi',
            'materials' => $materials,
            'htransports' => $htransports
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
            'lokasi_awal' => 'max:255',
            'material_id' => 'max:255',
            'pln_kantor_pusat' => 'max:255',
            'pln_area_up3' => 'max:255',
            'harga' => 'max:255',
        ]);

        HargaTransportAsuransi::create($validatedData);
        return redirect('/harga-transport ')->with('success', 'Data Berhasil Ditambahkan!');
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
        $data = HargaTransportAsuransi::find($id);

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
        $harga = HargaTransportAsuransi::with(['material'])->find($id);
        return response()->json($harga);
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
            'lokasi_awal' => 'max:255',
            'material_id' => 'max:255',
            'pln_kantor_pusat' => 'max:255',
            'pln_area_up3' => 'max:255',
            'harga' => 'max:255',
        ]);
        HargaTransportAsuransi::where('id', $id)->update($validatedData);
        return redirect('/harga-transport ')->with('success', 'Data Berhasil Di Ubah!');
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
        HargaTransportAsuransi::destroy($id);
        return redirect('/harga-transport ')->with('success', 'Data Berhasil Ditambahkan!');
    }
}
