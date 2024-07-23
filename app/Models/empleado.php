<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class empleado extends Model
{
    use HasFactory;

    public function departamento(){//2- relacion uno a muchos 
        return $this->belongsTo('App\Models\departamento');
    }

    public function hijo(){//3- relacion uno a muchos 
        return $this->belongsTo('App\Models\hijo');
    }

    public function habilidads (){ // 4- relacion muchos a muchos 
        return $this->belongsToMany(Habilidad::class, 'empleado_habilidads', 'empleado_id', 'habilidad_id');
    }

}
