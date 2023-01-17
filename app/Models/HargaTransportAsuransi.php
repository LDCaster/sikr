<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HargaTransportAsuransi extends Model
{
    use HasFactory;

    protected $table = 'harga_transport_asuransi';

    protected $guarded = [];

    public function material()
    {
        return $this->belongsTo(Material::class, 'material_id');
    }
}
