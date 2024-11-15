<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Majelis extends Model
{
    public function anggotaMajelis(): HasMany
    {
        return $this->hasMany(AnggotaMajelis::class);
    }
}
