<?php

namespace App\Http\Controllers;

use App\Imports\PengadaanImport;
use App\Models\Pengadaan;
use Illuminate\Http\Request;

class PengadaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pengadaans = Pengadaan::get();

        return view('pengadaan.index', [
            'title' => 'Data Pengadaan',
            'pengadaans' => $pengadaans
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

    public function pengadaanImport(Request $request)
    {
        $file = $request->file('file')->store('public/import');

        $import = new PengadaanImport;
        $import->import($file);

        // dd($import->failures());
        if ($import->failures()->isNotEmpty()) {
            return back()->withfailures($import->failures());
        }

        return redirect('/pengadaan')->with('success', 'Data Berhasil di import!');
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
            'nama_pengadaan' => 'max:255',
        ]);

        Pengadaan::create($validatedData);
        return redirect('/pengadaan ')->with('success', 'Data Berhasil Ditambahkan!');
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
        $data = Pengadaan::find($id);
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
            'nama_pengadaan' => 'max:255',
        ]);
        Pengadaan::where('id', $id)->update($validatedData);
        return redirect('/pengadaan')->with('success', 'Data Berhasil Di Ubah!');
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
        Pengadaan::destroy($id);
        return redirect('/pengadaan ')->with('success', 'Data Berhasil Dihapus!');
    }
}
