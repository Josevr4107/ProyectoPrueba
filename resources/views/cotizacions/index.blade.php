@extends('layouts.app',['title'=>'Lista de Cotizaciones'])

@section('csshead')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css">
@endsection

@section('content')

    @include('modulos.navbar')

    {{-- HEADER --}}


    <section class="content-header text-center">
        <h1 class="font-weight-bold text-light">Lista de Cotizaciones</h1>
    </section>

    <div class="container">

        <form action="{{ route('buscar_cotizacion') }}" method="post">
            @csrf

            <div class="row mt-4">

                {{-- Nuevo Cotizacion --}}

                <div class="col-md-3 col-xs-12  mb-3">
                    <a href="{{ url('/cotizacions/create') }}" class="btn btn-outline-danger btn-lg w-100"> Nueva
                        Cotización</a>

                    {{-- <button id="btn_nuevo" type="button" data-toggle="modal" data-target="#CotizacionCreate"
                        class="btn btn-outline-danger btn-lg w-100">
                        Nueva Cotizacion
                    </button> --}}
                </div>

                {{-- Buscar Cotizacion --}}

                {{-- <div class="col-md-3 col-xs-12  mb-3">
    <input placeholder="Tipo de Trabajo" type="text" name="tipotrabajo" class="form-control">
  </div> --}}

                <div class="col-md-5 col-xs-12  mb-3">
                    <input placeholder="Nombre del Cliente" type="text" name="cliente" class="form-control">
                </div>

                <div class="col-md-2  mb-3">
                    <select name="estado" class="form-control">
                        <option value="*">Todos</option>
                        <option value="0">Inactivo</option>
                        <option value="1">Activo</option>
                    </select>
                </div>

                <div class="col-md-2 xcol-xs-12  mb-3">
                    <button type="submit" class="btn btn-outline-info btn-lg w-100">Buscar</button>
                </div>

            </div>
        </form>


    </div>

    {{-- TABLA CLIENTES --}}
    <div class="table-responsive bg-light">
        @if (count($cotizacions))
            <table class="table text-center h4" id="cotizacions">
                <thead class="bg-danger">
                    <tr class="text-light">
                        <th>Categoría</th>
                        <th>Cliente</th>
                        <th>Precio Total</th>
                        {{-- <th>Estado</th> --}}
                        <th>Acciones</th>
                    </tr>
                </thead>


                <tbody>

                    @foreach ($cotizacions as $cotizacion)
                        <tr>
                            <td>{{ $cotizacion->clasificador->nombre }}</td>
                            <td>{{ $cotizacion->cliente->nombre }}</td>
                            <td>{{ $cotizacion->preciototal }}</td>
                            {{-- <td>{{ ($cotizacion->estado == 0) ? "Inactivo" : "Activo" }}</td> --}}
                            <td>
                                <div class="btn-group" role="group">
                                    <button id="btn_show" type="button" data-toggle="modal"
                                        data-target="#CotizacionShow{{ $cotizacion->id }}"
                                        class="btn btn-sm btn-secondary"><i class="fas fa-eye"></i></button>

                                    <button id="btn_edit" type="button" data-toggle="modal"
                                        data-target="#CotizacionEdit{{ $cotizacion->id }}"
                                        class="btn btn-sm btn-secondary"><i class="fas fa-edit"></i></button>

                                    <button id="btn_estado" type="button" data-toggle="modal"
                                        data-target="#CotizacionEstado{{ $cotizacion->id }}"
                                        class="btn btn-sm btn-secondary"><i class="fas fa-adjust"></i></button>

                                    <button id="btn_estado" type="button" data-toggle="modal"
                                        data-target="#CotizacionDestroy{{ $cotizacion->id }}" class="btn btn-danger"
                                        {{ $cotizacion->estado ? 'disabled' : '' }}><i
                                            class="fas fa-trash-alt"></i></button>
                                </div>
                            </td>
                        </tr>

                        @include('cotizacions.show')
                        @include('cotizacions.edit')
                        @include('cotizacions.estado')
                        @include('cotizacions.destroy')
                    @endforeach

                </tbody>
            </table>
        @else
            <h4>No existen Cotizaciones de Cotizaciones</h4>
        @endif
    </div>




    {{-- @include('cotizacions.create') --}}


    @include('modulos.scripts')
    @include('modulos.datatable', ['nombretabla' => 'cotizacions'])

@endsection
