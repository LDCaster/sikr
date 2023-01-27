<?php

namespace App\Imports;

use App\Models\Pengadaan;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\SkipsFailures;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;

class PengadaanImport implements ToModel, WithHeadingRow, WithValidation, SkipsOnFailure
{
    use Importable, SkipsFailures;
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Pengadaan([
            'nama_pengadaan' => $row['nama_pengadaan'],
            //
        ]);
    }

    public function rules(): array
    {
        return [
            'nama_pengadaan' => 'unique:pengadaan',
        ];
    }
}
