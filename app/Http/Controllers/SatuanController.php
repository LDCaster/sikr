<?php

namespace App\Http\Controllers;

use App\Imports\SatuanImport;
use App\Models\Satuan;
use Illuminate\Http\Request;

class SatuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $satuans = Satuan::get();

        return view('satuan.index', [
            'title' => 'Data Satuan',
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

    public function satuanImport(Request $request)
    {
        $file = $request->file('file')->store('public/import');

        $import = new SatuanImport;
        $import->import($file);

        // dd($import->failures());
        if ($import->failures()->isNotEmpty()) {
            return back()->withfailures($import->failures());
        }

        return redirect('/satuan')->with('success', 'Data Berhasil di import!');
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
            'nama_satuan' => 'max:255',
        ]);

        Satuan::create($validatedData);
        return redirect('/satuan ')->with('success', 'Data Berhasil Ditambahkan!');
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
        $data = Satuan::find($id);
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
        //ubah data satuan
        $validatedData = $request->validate([
            'nama_satuan' => 'max:255',
        ]);
        Satuan::where('id', $id)->update($validatedData);
        return redirect('/satuan')->with('success', 'Data Berhasil Di Ubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //menghapus data satuan
        Satuan::destroy($id);
        return redirect('/satuan')->with('success', 'Data Berhasil Dihapus!');
    }
}
