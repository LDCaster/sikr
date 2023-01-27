<?php

namespace App\Http\Controllers;

use App\Imports\PabrikanImport;
use App\Models\Pabrikan;
use App\Models\Rab;
use Illuminate\Http\Request;

class PabrikanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pabrikans = Pabrikan::get();

        return view('pabrikan.index', [
            'title' => 'Data Pabrikan',
            'pabrikans' => $pabrikans
        ]);
    }


    public function pabrikanImport(Request $request)
    {
        $file = $request->file('file')->store('public/import');

        $import = new PabrikanImport;
        $import->import($file);

        // dd($import->failures());
        if ($import->failures()->isNotEmpty()) {
            return back()->withfailures($import->failures());
        }

        return redirect('/pabrikan')->with('success', 'Data Berhasil di import!');
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
            'nama_vendor'   => 'required|max:255',
            'nama_direktur'   => 'max:255',
            'jabatan'   => 'max:255',
            'alamat'   => 'max:255',
            'email'   => 'max:255',
            'no_telp'   => 'max:255',
            'no_notaris'   => '',
            'no_khs'   => '',
            'nama_pengadaan'   => 'max:255',
            'nama_rekening'   => 'max:255',
            'nama_bank'   => 'max:255',
            'cabang'   => 'max:255',
            'no_rekening'   => 'max:255',
            'no_type'   => 'max:255',
            'no_spm'   => 'max:255',
        ]);

        Pabrikan::create($validatedData);
        return redirect('/pabrikan')->with('success', 'Data Berhasil Ditambahkan!');
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
        $data = Pabrikan::find($id);

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
        $data = Pabrikan::find($id);
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
            'nama_vendor'   => 'max:255',
            'nama_direktur'   => 'max:255',
            'jabatan'   => 'max:255',
            'alamat'   => 'max:255',
            'email'   => 'max:255',
            'no_telp'   => 'max:255',
            'no_notaris'   => '',
            'no_khs'   => '',
            'nama_pengadaan'   => 'max:255',
            'nama_rekening'   => 'max:255',
            'nama_bank'   => 'max:255',
            'cabang'   => 'max:255',
            'no_rekening'   => 'max:255',
            'no_type'   => 'max:255',
            'no_spm'   => 'max:255',
        ]);
        Pabrikan::where('id', $id)->update($validatedData);
        return redirect('/pabrikan ')->with('success', 'Data Berhasil Di Ubah!');
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
        Pabrikan::destroy($id);
        return redirect('/pabrikan ')->with('success', 'Data Berhasil Di hapus!');
    }
}
