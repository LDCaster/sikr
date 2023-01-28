<?php

namespace App\Http\Controllers;

use App\Imports\PengawasPekerjaanImport;
use App\Models\PengawasPekerjaan;
use Illuminate\Http\Request;

class PengawasPekerjaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pengawass = PengawasPekerjaan::get();

        return view('direksipekerjaan.pengawas', [
            'title' => 'Data Pengawas Pekerjaan',
            'pengawass' => $pengawass
        ]);
    }

    public function pengawaspekerjaanImport(Request $request)
    {
        $file = $request->file('file')->store('public/import');

        $import = new PengawasPekerjaanImport;
        $import->import($file);

        // dd($import->failures());
        if ($import->failures()->isNotEmpty()) {
            return back()->withfailures($import->failures());
        }

        return redirect('/pengawas-pekerjaan')->with('success', 'Data Berhasil di import!');
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
            'pengawas_pekerjaan' => 'max:255',
        ]);

        PengawasPekerjaan::create($validatedData);
        return redirect('/pengawas-pekerjaan ')->with('success', 'Data Berhasil Ditambahkan!');
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
        $data = PengawasPekerjaan::find($id);
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
            'pengawas_pekerjaan' => 'max:255',
        ]);
        PengawasPekerjaan::where('id', $id)->update($validatedData);
        return redirect('/pengawas-pekerjaan')->with('success', 'Data Berhasil Di Ubah!');
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
        PengawasPekerjaan::destroy($id);
        return redirect('/pengawas-pekerjaan')->with('success', 'Data Berhasil Dihapus!');
    }
}
