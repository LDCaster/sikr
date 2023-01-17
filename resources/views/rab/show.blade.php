@extends('layout.main')

@section('content')
    <div class="data-table-area mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="sparkline13-list">
                        <div class="sparkline13-hd">
                            <div class="main-sparkline13-hd">
                                <h1>Data <span class="table-project-n">Rencana Anggaran Biaya</span></h1>
                            </div>
                            <div class="sparkline10-graph">
                                <div class="static-table-list">
                                    <table id="nilai" class="table table-bordered text-nowrap"
                                        style="text-align: center;">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th style="text-align: center">Unit</th>
                                                <th>Variant</th>
                                                <th class="satuan">Satuan</th>
                                                <th>Volume</th>
                                                <th>Alokasi Bulan</th>
                                                <th style="text-align: center">No PRK</th>
                                                <th class="harga_satuan">Harga Satuan</th>
                                                <th class="harga_transport">Harga Transport</th>
                                                <th class="total">Total (Rp)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($datas->rnks as $rnk)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $rnk->prk->bidang }}</td>
                                                    <td>{{ $rnk->material->nama_material }}</td>
                                                    <td>{{ $rnk->satuan->nama_satuan }}</td>
                                                    <td>{{ $rnk->volume }}</td>
                                                    <td>{{ $rnk->alokasi_bulan }}</td>
                                                    <td>{{ $rnk->no_prk }}</td>
                                                    <td>{{ $rnk->harga_satuan }}</td>
                                                    <td>{{ $rnk->harga_transport }}</td>
                                                    <td id="total_rnk">{{ $rnk->total }}</td>
                                                </tr>
                                            @endforeach
                                            <tr style="font-weight: 700; background-color: #bdd7ee;">
                                                <td></td>
                                                <td>Sub Total</td>
                                                <td>Variant</td>
                                                <td>Unit</td>
                                                <td>Volume</td>
                                                <td></td>
                                                <td></td>
                                                <td style="background-color: black !important"></td>
                                                <td style="background-color: black !important"></td>
                                                <td>{{ $datas->rnks()->sum('total') }}</td>
                                                {{-- <td>
                                                    <span id="hasil"></span>
                                                </td> --}}
                                            </tr>
                                            <tr style="font-weight: 700; background-color: #c6e0b4;">
                                                <td style="background-color: #bdd7ee !important;"></td>
                                                <td colspan="8">Sub Total</td>
                                                <td></td>
                                            </tr>
                                            <tr style="font-weight: 700; background-color: #c6e0b4;">
                                                <td style="background-color: #bdd7ee !important;"></td>
                                                <td colspan="8">PPN 11%</td>
                                                <td></td>
                                            </tr>
                                            <tr style="font-weight: 700; background-color: #f8cbad;">
                                                <td style="background-color: #bdd7ee !important;"></td>
                                                <td colspan="8">Total + PPN</td>
                                                <td></td>
                                            </tr>


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        var nilai = $("#total_rnk").text();
        let TotalRnk = nilai.replace(/[&\/\\#,+()$~%.'":*?<>{}]/g, '');
        console.log(hTransport);
    </script>
@endsection
