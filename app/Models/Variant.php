<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Variant extends Model
{
    protected $table = 'variant';

    protected $guarded = [];
    public function jenisvariant()
    {
        return $this->belongsTo(JenisVariant::class, 'nama_jenis');
    }
}
