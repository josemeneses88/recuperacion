<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hijo extends Model
{
    use HasFactory;

    public function empleados(){//3- relacion uno a muchos 
        return $this->hasMany('App\Models\empleado');
    }
}
