<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rnk extends Model
{
    use HasFactory;

    protected $table = 'rnk';

    protected $guarded = [];

    public function rab()
    {
        return $this->belongsTo(Rab::class, 'kode_rab');
    }
}
