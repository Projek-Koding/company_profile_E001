<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AnggotaMajelis extends Model
{
    public function majelis()
    {
        return $this->belongsTo(Majelis::class);
    }
}
