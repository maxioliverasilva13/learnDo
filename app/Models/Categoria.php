<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    public function eventos()
    {
        return $this->belongsToMany(Categoria::class, 'categoriaeventos', 'categoria_id', 'eventos_id');
    }
}
