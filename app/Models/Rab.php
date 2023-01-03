<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rab extends Model
{
    use HasFactory;

    protected $table = 'rab';

    protected $guarded = [];

    public function rnk()
    {
        return $this->hasMany(Rnk::class, 'kode_rab');
    }
}
