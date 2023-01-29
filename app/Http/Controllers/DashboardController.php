<?php

namespace App\Http\Controllers;

use App\Models\DireksiPekerjaan;
use App\Models\JenisMaterial;
use App\Models\JenisVariant;
use App\Models\Material;
use App\Models\Pabrikan;
use App\Models\Pengadaan;
use App\Models\PengawasPekerjaan;
use App\Models\Prk;
use App\Models\Satuan;
use App\Models\Variant;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tpabrikans = Pabrikan::count();
        $tjvariants = JenisVariant::count();
        $tvariants = Variant::count();
        $tjmaterials = JenisMaterial::count();
        $tmaterials = Material::count();
        $tpengadaans = Pengadaan::count();
        $tdireksis = DireksiPekerjaan::count();
        $tpengawas = PengawasPekerjaan::count();
        $tsatuans = Satuan::count();
        $tprks = Prk::count();

        return view('dashboard', [
            'title' => 'Dashboard',
            'tpabrikans' => $tpabrikans,
            'tjvariants' => $tjvariants,
            'tvariants' => $tvariants,
            'tjmaterials' => $tjmaterials,
            'tmaterials' => $tmaterials,
            'tpengadaans' => $tpengadaans,
            'tdireksis' => $tdireksis,
            'tpengawas' => $tpengawas,
            'tsatuans' => $tsatuans,
            'tprks' => $tprks
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
    }
}
