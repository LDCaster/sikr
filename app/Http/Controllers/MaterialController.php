<?php

namespace App\Http\Controllers;

use App\Imports\MaterialImport;
use App\Models\JenisMaterial;
use App\Models\Material;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jenismaterials = JenisMaterial::get();
        $materials = Material::with(['jenismaterial'])->get();

        return view('material.index', [
            'title' => 'Data Material',
            'jenismaterials' => $jenismaterials,
            'materials' => $materials
        ]);
    }

    public function materialImport(Request $request)
    {
        $file = $request->file('file')->store('public/import');

        $import = new MaterialImport;
        $import->import($file);

        // dd($import->failures());
        if ($import->failures()->isNotEmpty()) {
            return back()->withfailures($import->failures());
        }

        return redirect('/material')->with('success', 'Data Berhasil di import!');
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
            'nama_jenis' => 'max:255',
            'nama_material' => 'max:255',
        ]);

        Material::create($validatedData);
        return redirect('/material ')->with('success', 'Data Berhasil Ditambahkan!');
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
        //
        $material = Material::with(['jenismaterial'])->find($id);
        return response()->json($material);
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
            'nama_jenis' => 'max:255',
            'nama_material' => 'max:255',
        ]);
        Material::with(['jenismaterial'])->where('id', $id)->update($validatedData);
        return redirect('/material')->with('success', 'Data Berhasil Di Ubah!');
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
        Material::destroy($id);
        return redirect('/material ')->with('success', 'Data Berhasil Dihapus!');
    }
}
