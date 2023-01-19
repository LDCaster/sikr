<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kontrak extends Model
{
    use HasFactory;

    protected $table = 'kontrak';

    protected $guarded = [];

    public function pabrikan()
    {
        return $this->belongsTo(Pabrikan::class, 'pabrikan_id');
    }
    public function pengadaan()
    {
        return $this->belongsTo(Pengadaan::class, 'pengadaan_id');
    }
    public function jenismaterial()
    {
        return $this->belongsTo(JenisMaterial::class, 'jmaterial_id');
    }
    public function satuan()
    {
        return $this->belongsTo(Satuan::class, 'satuan_id');
    }
    public function rab()
    {
        return $this->belongsTo(Rab::class, 'rab_id');
    }
}
