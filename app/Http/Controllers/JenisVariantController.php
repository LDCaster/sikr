<?php

namespace App\Http\Controllers;


use App\Imports\JenisVariantImport;
use App\Models\JenisVariant;
use Illuminate\Http\Request;


class JenisVariantController extends Controller
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
        $jvariants = JenisVariant::get();

        return view('variant/jenisvariant.index', [
            'title' => 'Data Jenis Variant',
            'jvariants' => $jvariants
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

    public function jenisvariantImport(Request $request)
    {
        $file = $request->file('file')->store('public/import');

        $import = new JenisVariantImport;
        $import->import($file);

        // dd($import->failures());
        if ($import->failures()->isNotEmpty()) {
            return back()->withfailures($import->failures());
        }

        return redirect('/jenis-variant')->with('success', 'Data Berhasil di import!');
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
        ]);

        JenisVariant::create($validatedData);
        return redirect('/jenis-variant ')->with('success', 'Data Berhasil Ditambahkan!');
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
        $data = JenisVariant::find($id);
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
            'nama_jenis'   => 'max:255',
        ]);
        JenisVariant::where('id', $id)->update($validatedData);
        return redirect('/jenis-variant ')->with('success', 'Data Berhasil Di Ubah!');
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
        JenisVariant::destroy($id);
        return redirect('/jenis-variant ')->with('success', 'Data Berhasil Dihapus!');
    }
}
