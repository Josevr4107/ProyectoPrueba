<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;
use App\Http\Requests\ClienteRequest;
use Facade\FlareClient\Http\Client;

class ClienteController extends Controller
{


    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes.index', compact('clientes'));
    }


    public function create()
    {
        return view('clientes.create');
    }


    public function store(ClienteRequest $request)
    {

        $cliente = Cliente::create($request->all());

        $cliente->save();
        // $bitacora="insert to ";
        // return redirect('clientes');
        return back();
    }



    public function show(Cliente $cliente)
    {
        return view('clientes.show', compact('cliente'));
    }


    public function edit(Cliente $cliente)
    {
        return view('clientes.edit', compact('cliente'));
    }



    public function update(Request $request, Cliente $cliente)
    {
        $cliente->update($request->all());
        $cliente->save();
        return redirect('clientes');
    }


    public function destroy(Cliente $cliente)
    {
        $cliente->delete();
        return redirect('clientes');
    }


    public function eliminar(Cliente $cliente)
    {
        return view('clientes.destroy', compact('cliente'));
    }

    public function vista_cambio_estado(Cliente $cliente)
    {
        return view('clientes.cambioestado', compact('cliente'));
    }

    public function actualizar_estado(Request $request, Cliente $cliente)
    {
        $cliente->estado = $request->estado;
        $cliente->save();

        return redirect('clientes');
    }

    public function filtrar(Request $request)
    {

        $condicion = [];

        if (!is_null($request->nombre)) {
            //aplicar filtro de nombre
            array_push($condicion, ['nombre', 'LIKE', ('%' . $request->nombre . '%')]); // [ 'columna', 'condicion', 'valor_recibido' ]
        }
        if (!is_null($request->cinit)) {
            //aplicar filtro de cinit
            array_push($condicion, ['cinit', 'LIKE', ('%' . $request->cinit . '%')]); // [ 'columna', 'condicion', 'valor_recibido' ]
        }
        //aplicar filtro de estado

        if ($request->estado != '*') {
            array_push($condicion, ['estado', '=', $request->estado]);
        }

        $clientes = Cliente::where($condicion)->get();

        return view('clientes.index', compact('clientes'));
    }
}
