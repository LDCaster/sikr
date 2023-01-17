<?php

namespace App\Http\Controllers;

use App\Models\HargaSatuan;
use App\Models\Material;
use App\Models\Pabrikan;
use App\Models\Variant;
use Illuminate\Http\Request;

class HargaSatuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materials = Material::get();
        $pabrikans = Pabrikan::get();
        $hsatuans = HargaSatuan::with(['pabrikan', 'material'])->get();

        return view('hargasatuan.index', [
            'title' => 'Harga Satuan',
            'materials' => $materials,
            'pabrikans' => $pabrikans,
            'hsatuans' => $hsatuans
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
     *;
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'variant_id' => 'max:255',
            'pabrikan_id' => 'max:255',
            'tahun' => 'max:255',
            'harga_satuan' => 'max:255',

        ]);

        HargaSatuan::create($validatedData);
        return redirect('/harga-satuan')->with('success', 'Data Berhasil Ditambahkan!');
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
        $data = HargaSatuan::find($id);

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
        $harga = HargaSatuan::with(['material', 'pabrikan'])->find($id);
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
            'variant_id' => 'max:255',
            'pabrikan_id' => 'max:255',
            'tahun' => 'max:255',
            'harga_satuan' => 'max:255',

        ]);
        HargaSatuan::where('id', $id)->update($validatedData);
        return redirect('/harga-satuan ')->with('success', 'Data Berhasil Di Ubah!');
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
        HargaSatuan::destroy($id);
        return redirect('/harga-satuan')->with('success', 'Data Berhasil Ditambahkan!');
    }
}
