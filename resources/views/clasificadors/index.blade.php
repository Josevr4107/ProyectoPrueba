@extends('layouts.app',['title'=>'Lista de Clasificadores'])

@section('csshead')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css">
@endsection

@section('content')

    @include('modulos.navbar')

    {{-- HEADER --}}


    <section class="content-header text-center">
        <h1 class="font-weight-bold text-light">Lista de Clasificadores</h1>
    </section>

    <div class="container">

        <form action="{{ route('buscar_clasificador') }}" method="post">
            @csrf

            <div class="row mt-4">

                {{-- Nuevo Clasificador --}}

                <div class="col-md-3 col-xs-12  mb-3">
                    <button id="btn_nuevo" type="button" data-toggle="modal" data-target="#ClasificadorCreate"
                        class="btn btn-outline-danger btn-lg w-100">
                        Nuevo Clasificador
                    </button>
                </div>

                {{-- Buscar Clasificador --}}

                <div class="col-md-5 col-xs-12  mb-3">
                    <input placeholder="Nombre" type="text" name="nombre" class="form-control">
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
        @if (count($clasificadors))
            <table class="table text-center h4" id="clasificadors">
                <thead class="bg-danger">
                    <tr class="text-light">
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        {{-- <th>Estado</th> --}}
                        <th>Acciones</th>
                    </tr>
                </thead>


                <tbody>

                    @foreach ($clasificadors as $clasificador)
                        <tr>
                            <td>{{ $clasificador->nombre }}</td>
                            <td>{{ $clasificador->descripcion }}</td>
                            {{-- <td>{{ ($clasificador->estado == 0) ? "Inactivo" : "Activo" }}</td> --}}
                            <td>
                                <div class="btn-group" role="group">
                                    <button id="btn_show" type="button" data-toggle="modal"
                                        data-target="#ClasificadorShow{{ $clasificador->id }}"
                                        class="btn btn-sm btn-info"><i class="fas fa-eye"></i></button>

                                    <button id="btn_edit" type="button" data-toggle="modal"
                                        data-target="#ClasificadorEdit{{ $clasificador->id }}"
                                        class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></button>

                                    <button id="btn_estado" type="button" data-toggle="modal"
                                        data-target="#ClasificadorEstado{{ $clasificador->id }}"
                                        class="btn btn-sm btn-secondary"><i class="fas fa-adjust"></i></button>

                                    <button id="btn_estado" type="button" data-toggle="modal"
                                        data-target="#ClasificadorDestroy{{ $clasificador->id }}" class="btn btn-danger"
                                        {{ $clasificador->estado ? 'disabled' : '' }}><i
                                            class="fas fa-trash-alt"></i></button>
                                </div>
                            </td>
                        </tr>

                        @include('clasificadors.show')
                        @include('clasificadors.edit')
                        @include('clasificadors.estado')
                        @include('clasificadors.destroy')
                    @endforeach

                </tbody>
            </table>
        @else
            <h4>No existen Clasificadores de Cotizaciones</h4>
        @endif
    </div>




    @include('clasificadors.create')


    @include('modulos.scripts')
    @include('modulos.datatable', ['nombretabla' => 'clasificadors'])
@endsection
