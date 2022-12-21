<?php

namespace App\Http\Controllers;

use App\Models\DireksiPekerjaan;
use Illuminate\Http\Request;

class DireksiPekerjaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $direksis = DireksiPekerjaan::get();

        return view('direksipekerjaan.index', [
            'title' => 'Data Direksi Pekerjaan',
            'direksis' => $direksis
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
            'nama_direksi' => 'max:255',
            'nama_pengawas' => 'max:255',
        ]);

        DireksiPekerjaan::create($validatedData);
        return redirect('/direksi-pekerjaan ')->with('success', 'Data Berhasil Ditambahkan!');
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
        $data = DireksiPekerjaan::find($id);
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
            'nama_direksi' => 'max:255',
            'nama_pengawas' => 'max:255',
        ]);
        DireksiPekerjaan::where('id', $id)->update($validatedData);
        return redirect('/direksi-pekerjaan')->with('success', 'Data Berhasil Di Ubah!');
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
        DireksiPekerjaan::destroy($id);
        return redirect('/direksi-pekerjaan')->with('success', 'Data Berhasil Dihapus!');
    }
}
