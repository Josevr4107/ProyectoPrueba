<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\Cotizacion;
use Illuminate\Http\Request;

class CotizacionController extends Controller
{

    public function index()
    {
        $cotizacions = Cotizacion::all();
        return view('cotizacions.index', compact('cotizacions'));
    }


    public function create()
    {

        $clientes = Cliente::all(['id', 'nombre']);

        return view('cotizacions.create')->with('clientes', $clientes);;
    }

    public function store(Request $request)
    {
        $cotizacion = Cotizacion::create($request->all());

        $cotizacion->save();
        // $bitacora="insert to ";
        return redirect('cotizacions');
    }

    public function show(Cotizacion $cotizacion)
    {
        return view('cotizacions.show', compact('cotizacion'));
    }

    public function edit(Cotizacion $cotizacion)
    {
        return view('cotizacions.edit', compact('cotizacion'));
    }

    public function update(Request $request, Cotizacion $cotizacion)
    {
        $cotizacion->update($request->all());
        $cotizacion->save();
        return redirect('cotizacions');
    }


    public function destroy(Cotizacion $cotizacion)
    {
        $cotizacion->delete();
        return redirect('cotizacions');
    }

    public function eliminar(Cotizacion $cotizacion)
    {
        return view('cotizacions.destroy', compact('cotizacion'));
    }

    public function vista_cambio_estado(Cotizacion $cotizacion)
    {
        return view('cotizacions.cambioestado', compact('cotizacion'));
    }

    public function actualizar_estado(Request $request, Cotizacion $cotizacion)
    {
        $cotizacion->estado = $request->estado;
        $cotizacion->save();

        return redirect('cotizacions');
    }

    public function filtrar(Request $request)
    {

        $condicion = [];

        if (!is_null($request->codigo)) {
            //aplicar filtro de nombre
            array_push($condicion, ['codigo', 'LIKE', ('%' . $request->codigo . '%')]); // [ 'columna', 'condicion', 'valor_recibido' ]
        }

        if (!is_null($request->nombre)) {
            //aplicar filtro de nombre
            array_push($condicion, ['nombre', 'LIKE', ('%' . $request->nombre . '%')]); // [ 'columna', 'condicion', 'valor_recibido' ]
        }

        //aplicar filtro de estado

        if ($request->estado != '*') {
            array_push($condicion, ['estado', '=', $request->estado]);
        }

        $cotizacions = Cotizacion::where($condicion)->get();

        return view('cotizacions.index', compact('cotizacions'));
    }
}
