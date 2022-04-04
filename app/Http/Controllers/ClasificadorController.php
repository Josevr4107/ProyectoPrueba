<?php

namespace App\Http\Controllers;

use App\Clasificador;
use Illuminate\Http\Request;

class ClasificadorController extends Controller
{

    public function index()
    {
        $clasificadors = Clasificador::all();
        return view('clasificadors.index', compact('clasificadors'));
        
    }


    public function create()
    {
        return view('clasificadors.create');
    }


    public function store(Request $request)
    {
        $clasificador = Clasificador::create($request->all());

        $clasificador->save();
        // $bitacora="insert to ";
        return redirect('clasificadors');    
    }


    public function show(Clasificador $clasificador)
    {
        return view('clasificadors.show', compact('clasificador'));
    }


    public function edit(Clasificador $clasificador)
    {
        return view('clasificadors.edit', compact('clasificador'));    
    }


    public function update(Request $request, Clasificador $clasificador)
    {
        $clasificador->update($request->all());
        $clasificador->save();
        return redirect('clasificadors');      
    }


    public function destroy(Clasificador $clasificador)
    {
        $clasificador->delete();
        return redirect('clasificadors');        
    }

    
    public function eliminar(Clasificador $clasificador)
    {        
        return view('clasificadors.destroy', compact('clasificador'));    
    }

    public function vista_cambio_estado(Clasificador $clasificador)
    {        
        return view('clasificadors.cambioestado', compact('clasificador'));       
    }

    public function actualizar_estado(Request $request, Clasificador $clasificador)
    {
        $clasificador->estado = $request->estado;
        $clasificador->save();        

        return redirect('clasificadors');

    }

    public function filtrar(Request $request) {

        $condicion = [];

        if(!is_null($request->nombre)){ 
            //aplicar filtro de nombre
            array_push($condicion, [ 'nombre', 'LIKE', ( '%' . $request->nombre . '%') ]); // [ 'columna', 'condicion', 'valor_recibido' ]
        }

        //aplicar filtro de estado
        if($request->estado != '*'){
            array_push($condicion, [ 'estado', '=', $request->estado  ]);
        }

        $clasificadors = Clasificador::where($condicion)->get();

        return view('clasificadors.index', compact('clasificadors'));

    }

}