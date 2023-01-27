<?php

namespace App\Imports;

use App\Models\Pabrikan;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\SkipsFailures;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;

class PabrikanImport implements ToModel, WithHeadingRow, WithValidation, SkipsOnFailure
{
    use Importable, SkipsFailures;

    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Pabrikan([
            //
            'nama_vendor' => $row['nama_vendor'],
            'alamat' => $row['alamat'],
            'email' => $row['email'],
            'no_telp' => $row['nomor_telepon'],
            'nama_direktur' => $row['direktur'],
            'jabatan' => $row['jabatan'],
            'no_notaris' => $row['nomor_notaris'],
            'no_khs' => $row['nomor_khs'],
            'nama_pengadaan' => $row['jenis_pengadaan'],
            'nama_rekening' => $row['nama_rekening'],
            'nama_bank' => $row['nama_bank'],
            'cabang' => $row['cabang'],
            'no_rekening' => $row['nomor_rekening'],
            'no_type' => $row['no_type_test'],
            'no_spm' => $row['nomor_spm'],
        ]);
    }
    public function rules(): array
    {
        return [
            // 'nama_vendor' => 'unique:pabrikan',
            'no_khs' =>  'unique:pabrikan',
        ];
    }
}
