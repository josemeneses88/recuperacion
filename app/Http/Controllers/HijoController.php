<?php

namespace App\Http\Controllers;

use App\Models\hijo;
use Illuminate\Http\Request;

class HijoController extends Controller
{
    public function index()
    {   // 13- para mostrar en el index
        $datos['hijo']=Hijo::paginate(10);//
        return view ('hijo.index', $datos);
    }

    public function create()// create lo que hace es hacer un envio a storage
    {
        //15 para mostrar la vista create
        return view ('hijo.create');
    }

    public function store(Request $request)
    {
        // 18-  envio de datos --importante
        $campos=[ // validaciones para los campo
            'codigohijo'=>'required|string|max:50',
            'nombrehijo'=>'required|string|max:50',
            'fechahijo'=>'required|date',

        ];
        
        $mensaje=[// mensaje enviado
            'required'=>'El :attribute es requerido',
        ];

        $validatedData = $request->validate($campos, $mensaje);


        $datosHijo =  $request->except('_token');// obtiene los datos que le enviaron exceptuando _token
        hijo::insert($datosHijo); // Aqui guarda los datos recibidos menos el token
        //return response()->json($datosHijo); // muestra la informacion que le enviamos 
        return redirect ('hijo')->with('mensaje','HIJO AGREGADO CON EXITO');

    }

    public function show($id)
    {
        $hijo = hijo::findOrFail($id);
        return view('hijo.show', compact('hijo'));
    }


    
    public function edit($id)
    {
        // 25- recuperando los datos de empleado
        $hijo=hijo::findOrFail($id);
        // 24- Redireccionando a la vista edit
        return view('hijo.edit', compact('hijo'));// enviamos los datos encontrados a la vista
    }

    
    public function update(Request $request, $id)
    {
        //
        $datosHijo =  $request->except(['_token','_method']);// obtiene los datos que le enviaron exceptuando _token y _method
        hijo::where('id','=',$id)->update($datosHijo);// revisa si los id coinciden para hacer el update
        $hijo=hijo::findOrFail($id);
        //  Redireccionando a la vista edit
        return view('hijo.edit', compact('hijo'));// enviamos los datos encontrados a la vista

    }

    public function destroy($id)// se recibe id para usarlo en la linea  hijo::destroy($id);
    {
        // 20- ELIMINAR DATOS
        hijo::destroy($id);
        return redirect('hijo'); // redirecciona a la lista de hijo
    }

}
