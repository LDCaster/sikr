<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HargaSatuan extends Model
{
    use HasFactory;

    protected $table = 'harga_satuan';

    protected $guarded = [];

    public function material()
    {
        return $this->belongsTo(Material::class, 'variant_id');
    }
    public function pabrikan()
    {
        return $this->belongsTo(Pabrikan::class, 'pabrikan_id');
    }
}
