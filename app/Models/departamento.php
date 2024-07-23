<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class departamento extends Model
{
    use HasFactory;

    public function centro(){//1- relacion uno a muchos 
        return $this->belongsTo('App\Models\centro');
    }

    public function empleados(){//1- relacion uno a muchos 
        return $this->hasMany('App\Models\empleado');
    }

}
