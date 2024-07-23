<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class habilidad extends Model
{
    use HasFactory;

    public function empleados (){ // 4- relacion muchos a muchos 
        return $this->belongsToMany(Empleado::class, 'empleado_habilidads', 'habilidad_id', 'empleado_id');
    }
}
