<?php

namespace App\Imports;

use App\Models\Prk;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\SkipsFailures;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;

class PRKImport implements ToModel, WithHeadingRow, WithValidation, SkipsOnFailure
{
    use Importable, SkipsFailures;
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Prk([
            'no_prk' => $row['no_prk'],
            'bidang' => $row['bidang'],
            'fungsi' => $row['fungsi'],
            'sub_fungsi' => $row['sub_fungsi'],
            'program' => $row['program'],
            //
        ]);
    }

    public function rules(): array
    {
        return [
            'no_prk' => 'required',
        ];
    }
}
