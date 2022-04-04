<?php

namespace App\Http\Controllers;

use App\Tipotrabajo;
use Illuminate\Http\Request;

class TipotrabajoController extends Controller
{

    public function index()
    {
        $tipotrabajos = Tipotrabajo::all();
        return view('tipotrabajos.index', compact('tipotrabajos'));
        
    }

    
    public function create()
    {
        return view('tipotrabajos.create');
    }

    public function store(Request $request)
    {
        $tipotrabajo = Tipotrabajo::create($request->all());

        $tipotrabajo->save();
        // $bitacora="insert to ";
        return redirect('tipotrabajos');    
    }


    public function show(Tipotrabajo $tipotrabajo)
    {
        return view('tipotrabajos.show', compact('tipotrabajo'));
    }

    public function edit(Tipotrabajo $tipotrabajo)
    {
        return view('tipotrabajos.edit', compact('tipotrabajo'));    
    }


    public function update(Request $request, Tipotrabajo $tipotrabajo)
    {
        $tipotrabajo->update($request->all());
        $tipotrabajo->save();
        return redirect('tipotrabajos');      
    }


    public function destroy(Tipotrabajo $tipotrabajo)
    {
        $tipotrabajo->delete();
        return redirect('tipotrabajos');        
    }

    
    public function eliminar(Tipotrabajo $tipotrabajo)
    {        
        return view('tipotrabajos.destroy', compact('tipotrabajo'));    
    }

    public function vista_cambio_estado(Tipotrabajo $tipotrabajo)
    {        
        return view('tipotrabajos.cambioestado', compact('tipotrabajo'));       
    }

    public function actualizar_estado(Request $request, Tipotrabajo $tipotrabajo)
    {
        $tipotrabajo->estado = $request->estado;
        $tipotrabajo->save();        

        return redirect('tipotrabajos');

    }

    public function filtrar(Request $request) {

        $condicion = [];

        if(!is_null($request->codigo)){ 
            //aplicar filtro de nombre
            array_push($condicion, [ 'codigo', 'LIKE', ( '%' . $request->codigo . '%') ]); // [ 'columna', 'condicion', 'valor_recibido' ]
        }

        if(!is_null($request->nombre)){ 
            //aplicar filtro de nombre
            array_push($condicion, [ 'nombre', 'LIKE', ( '%' . $request->nombre . '%') ]); // [ 'columna', 'condicion', 'valor_recibido' ]
        }

        //aplicar filtro de estado

        if($request->estado != '*'){
            array_push($condicion, [ 'estado', '=', $request->estado  ]);
        }

        $tipotrabajos = Tipotrabajo::where($condicion)->get();

        return view('tipotrabajos.index', compact('tipotrabajos'));

    }

}




