<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Rab extends Model
{
    use HasFactory;

    protected $table = 'rab';

    protected $guarded = [];

    public function rnks()
    {
        return $this->hasMany(Rnk::class, 'rab_id', 'id');
    }
}
