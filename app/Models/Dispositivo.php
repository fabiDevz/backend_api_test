<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dispositivo extends Model
{
    use HasFactory;

    public function modelo()
{
    return $this->belongsTo(Modelo::class);
}

public function bodega()
{
    return $this->belongsTo(Bodega::class);
}
}
