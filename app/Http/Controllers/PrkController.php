<?php

namespace App\Http\Controllers;

use App\Imports\PRKImport;
use App\Models\Prk;
use Illuminate\Http\Request;

class PrkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $prks = Prk::get();

        return view('prk.index', [
            'title' => 'Data PRK',
            'prks' => $prks
        ]);
    }


    public function prkImport(Request $request)
    {
        $file = $request->file('file')->store('public/import');

        $import = new PRKImport;
        $import->import($file);

        // dd($import->failures());
        if ($import->failures()->isNotEmpty()) {
            return back()->withfailures($import->failures());
        }

        return redirect('/prk')->with('success', 'Data Berhasil di import!');
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
            'no_prk' => 'max:255',
            'bidang' => 'max:255',
            'fungsi' => 'max:255',
            'sub_fungsi' => 'max:255',
            'program' => 'max:255',
        ]);

        Prk::create($validatedData);
        return redirect('/prk ')->with('success', 'Data Berhasil Ditambahkan!');
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
        //
        $data = Prk::find($id);

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
        $data = Prk::find($id);
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
        //ubah data prk
        $validatedData = $request->validate([
            'no_prk' => 'max:255',
            'bidang' => 'max:255',
            'fungsi' => 'max:255',
            'sub_fungsi' => 'max:255',
            'program' => 'max:255',
        ]);
        Prk::where('id', $id)->update($validatedData);
        return redirect('/prk')->with('success', 'Data Berhasil Di Ubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //menghapus data prk
        Prk::destroy($id);
        return redirect('/prk')->with('success', 'Data Berhasil Dihapus!');
    }
}
