<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class centro extends Model
{
    use HasFactory;

    public function departamentos(){ // 1- relacion uno a muchos
        return $this->hasMany('App\Models\departamento');
    }
}
