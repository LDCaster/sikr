<?php

namespace App\Http\Controllers;

use App\Imports\VariantImport;
use App\Models\JenisVariant;
use App\Models\Variant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VariantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        ////
        $jenisvariants = JenisVariant::get();
        // $nama_jenis = DB::table('variant')
        //     ->join('jenisvariant', 'jenisvariant.id', '=', 'variant.nama_jenis')
        //     ->get();
        $variants = Variant::with(['jenisvariant'])->get();

        return view('variant.index', [
            'title' => 'Data Variant',
            'jenisvariants' => $jenisvariants,
            'variants' => $variants
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

    public function variantImport(Request $request)
    {
        $file = $request->file('file')->store('public/import');

        $import = new VariantImport;
        $import->import($file);

        // dd($import->failures());
        if ($import->failures()->isNotEmpty()) {
            return back()->withfailures($import->failures());
        }

        return redirect('/variant')->with('success', 'Data Berhasil di import!');
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
            'nama_variant' => 'max:255',
        ]);

        Variant::create($validatedData);
        return redirect('/variant ')->with('success', 'Data Berhasil Ditambahkan!');
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
        $variant = Variant::with(['jenisvariant'])->find($id);
        return response()->json($variant);
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
        $validatedData = $request->validate([
            'nama_jenis' => 'max:255',
            'nama_variant' => 'max:255',
        ]);
        Variant::with(['jenisvariant'])->where('id', $id)->update($validatedData);
        return redirect('/variant')->with('success', 'Data Berhasil Di Ubah!');
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
        Variant::destroy($id);
        return redirect('/variant ')->with('success', 'Data Berhasil Dihapus!');
    }
}
