<?php

namespace App\Imports;

use App\Models\JenisVariant;
use App\Models\Variant;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\SkipsFailures;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;

class VariantImport implements ToModel, WithHeadingRow, WithValidation, SkipsOnFailure
{
    use Importable, SkipsFailures;

    private $jenisvariant;

    public function __construct()
    {
        $this->jenisvariant = JenisVariant::select('id', 'nama_jenis')->get();
    }
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        $jvariant = $this->jenisvariant->where('nama_jenis', $row['jenis_variant'])->first();
        return new Variant([
            'nama_jenis' => $jvariant->id ?? NULL,
            'nama_variant' => $row['nama_variant'],
            //
        ]);
    }

    public function rules(): array
    {
        return [
            'nama_jenis' => '',
            'nama_variant' => 'required|unique:variant',
        ];
    }
}
