<?php

namespace App\Imports;

use App\Models\PengawasPekerjaan;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\SkipsFailures;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;

class PengawasPekerjaanImport implements ToModel, WithHeadingRow, WithValidation, SkipsOnFailure
{
    use Importable, SkipsFailures;
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new PengawasPekerjaan([
            //
            'pengawas_pekerjaan' => $row['pengawas_pekerjaan'],
        ]);
    }
    public function rules(): array
    {
        return [
            'pengawas_pekerjaan' => 'unique:pengawaspekerjaan',
        ];
    }
}
