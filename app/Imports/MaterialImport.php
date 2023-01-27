<?php

namespace App\Imports;

use App\Models\JenisMaterial;
use App\Models\Material;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\SkipsFailures;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;

class MaterialImport implements ToModel, WithHeadingRow, WithValidation, SkipsOnFailure
{
    use Importable, SkipsFailures;

    private $jenismaterial;

    public function __construct()
    {
        $this->jenismaterial = JenisMaterial::select('id', 'nama_jenis')->get();
    }
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        $jmaterial = $this->jenismaterial->where('nama_jenis', $row['jenis_material'])->first();
        return new Material([
            'nama_jenis' => $jmaterial->id ?? NULL,
            'nama_material' => $row['nama_material'],
            //
        ]);
    }

    public function rules(): array
    {
        return [
            'nama_jenis' => '',
            'nama_material' => 'required|unique:material',
        ];
    }
}
