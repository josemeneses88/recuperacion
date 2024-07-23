<?php

namespace App\Http\Controllers;

use App\Models\empleado;
use App\Models\habilidad;
use App\Models\empleado_habilidad;
use Illuminate\Http\Request;

class EmpleadoHabilidadController extends Controller
{
    // 2- funcion asociar
    public function asociar(){
        
        $empleados = Empleado::all();// 3- Obtener todos los empleados
        $habilidads = Habilidad::all(); // 4- Obtener todos los habilidads
        
        return view('empleado_habilidad.asociar', compact('empleados', 'habilidads')); // 5- Mostrar la vista con los datos
    }


    // 6- Funcion para asociar los empleados a los habilidads
    public function store(Request $request){
        
        $habilidad = Habilidad::find($request->habilidad_id);
        $habilidad->empleados()->attach($request->empleado_id);
        return redirect('empleadohabilidad');
    } 
    
}
