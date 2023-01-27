<?php

namespace App\Imports;

use App\Models\DireksiPekerjaan;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\SkipsFailures;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;

class DireksiPekerjaanImport implements ToModel, WithHeadingRow, WithValidation, SkipsOnFailure
{
    use Importable, SkipsFailures;
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new DireksiPekerjaan([
            //
            'nama_direksi' => $row['nama_direksi'],
        ]);
    }
    public function rules(): array
    {
        return [
            'nama_direksi' => 'unique:direksipekerjaan',
        ];
    }
}
