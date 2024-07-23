<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class empleado_habilidad extends Model
{
    use HasFactory;

    protected $table = 'empleado_habilidads';// solucion al error de que la tabla no existe

}
