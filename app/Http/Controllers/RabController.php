<?php

namespace App\Http\Controllers;

use App\Models\Rab;
use App\Models\Rnk;
use Illuminate\Http\Request;

class RabController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $rabs = Rab::get();
        // dd($rabs);
        $rnks = Rnk::with(['rab', 'prk', 'material', 'satuan'])->get();

        // return $rabs;
        return view('rab.index', [
            'title' => 'Data Rencana Anggaran Biaya',
            'rnks' => $rnks,
            'rabs' => $rabs
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
            'kode_rab' => 'max:255',
            'nama_user' => 'max:255',
            'prk' => 'max:255'
        ]);

        Rab::create($validatedData);
        return redirect('/rencana-anggaran-biaya ')->with('success', 'Data Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $datas = Rab::with('rnks')->find($id);

        // count total 
        $arr = array();
        foreach ($datas->rnks as $value) {
            array_push($arr, $value->total);
        }
        $arrTotal =  preg_replace("/[^0-9]/", '', $arr);
        $rmTotal = implode(",", $arrTotal);
        $result = 0;
        $ppn = 0;
        foreach (explode(',', $rmTotal) as $key)
            $sub = $result += intval($key);
        $ppn = $sub * 0.11;
        $total_ppn = $sub += $ppn;
        // end count total

        // count vol
        $vol = array();
        foreach ($datas->rnks as $value) {
            array_push($vol, $value->volume);
        }
        $volTotal =  preg_replace("/[^0-9]/", '', $vol);
        $vTotal = implode(",", $volTotal);
        $volResult = 0;
        foreach (explode(',', $vTotal) as $key)
            $total_vol = $volResult += intval($key);
        // end count vol

        return view('rab.show', [
            'title' => 'Details',
            'datas' => $datas,
            'result' => $result,
            'ppn' => $ppn,
            'total_ppn' => $total_ppn,
            'total_vol' => $total_vol,
            // 'total_unit' => $total_unit,
            // 'total_variant' => $total_variant,
        ]);
        // return response()->json($data);
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
        $data = Rab::find($id);
        return response()->json($data);
        // return view(['data' => $data]);
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
            'kode_rab' => 'max:255',
            'nama_user' => 'max:255',
            'prk' => 'max:255'
        ]);
        Rab::where('id', $id)->update($validatedData);
        return redirect('/rencana-anggaran-biaya')->with('success', 'Data Berhasil Di Ubah!');
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
        //menghapus data satuan
        Rab::destroy($id);
        return redirect('/rencana-anggaran-biaya')->with('success', 'Data Berhasil Dihapus!');
    }
}
