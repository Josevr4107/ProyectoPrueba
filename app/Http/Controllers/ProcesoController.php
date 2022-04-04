<?php

namespace App\Http\Controllers;

use App\Proceso;
use App\Tipotrabajo;
use Illuminate\Http\Request;


class ProcesoController extends Controller
{

    public function index()
    {
        $procesos = Proceso::all();
        $tipotrabajos = Tipotrabajo::all();


        return view('procesos.index', compact('procesos', 'tipotrabajos'));
    }

    public function create()
    {
        return view('procesos.create');
    }


    public function store(Request $request)
    {
        $contador = 0;
        $contador = Proceso::where('tipotrabajo_id', $request->tipotrabajo_id)->count();


        $proceso = Proceso::create([
            'tipotrabajo_id' => $request->tipotrabajo_id,
            'descripcion' => $request->descripcion,
            'nro' => ($contador + 1)
        ] + $request->all());


        $proceso->save();
        // $bitacora="insert to ";
        return redirect('procesos');
    }

    public function show(Proceso $proceso)
    {
        return view('procesos.show', compact('proceso'));
    }


    public function edit(Proceso $proceso)
    {
        return view('procesos.edit', compact('proceso'));
    }


    public function update(Request $request, Proceso $proceso)
    {
        $proceso->update($request->all());
        $proceso->save();
        return redirect('procesos');
    }


    public function destroy(Proceso $proceso)
    {
        $proceso->delete();
        return redirect('procesos');
    }


    public function eliminar(Proceso $proceso)
    {
        return view('procesos.destroy', compact('proceso'));
    }

    public function vista_cambio_estado(Proceso $proceso)
    {
        return view('procesos.cambioestado', compact('proceso'));
    }

    public function actualizar_estado(Request $request, Proceso $proceso)
    {
        $proceso->estado = $request->estado;
        $proceso->save();

        return redirect('procesos');
    }

    public function filtrar(Request $request)
    {

        $tipotrabajos = Tipotrabajo::all();


        $condicion = [];

        // if(!is_null($request->tipotrabajo)){ 
        //     //aplicar filtro de nombre
        //     array_push($condicion, [ 'tipotrabajo', 'LIKE', ( '%' . $request->tipotrabajo . '%') ]); // [ 'columna', 'condicion', 'valor_recibido' ]
        // }

        if (!is_null($request->descripcion)) {
            //aplicar filtro de descripcion
            array_push($condicion, ['descripcion', 'LIKE', ('%' . $request->descripcion . '%')]); // [ 'columna', 'condicion', 'valor_recibido' ]
        }

        //aplicar filtro de estado
        if ($request->estado != '*') {
            array_push($condicion, ['estado', '=', $request->estado]);
        }

        $procesos = Proceso::where($condicion)->get();

        return view('procesos.index', compact('procesos', 'tipotrabajos'));
    }
}
