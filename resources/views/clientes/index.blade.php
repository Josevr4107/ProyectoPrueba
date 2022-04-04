@extends('layouts.app',['title'=>'Lista de Clientes'])

@section('csshead')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css">
@endsection


@section('content')

    @include('modulos.navbar')

    {{-- HEADER --}}


    <section class="content-header text-center">
        <h1 class="font-weight-bold text-light">Lista de Clientes</h1>
    </section>

    <div class="container">

        <form action="{{ route('buscar_cliente') }}" method="post">
            @csrf

            <div class="row mt-4">

                {{-- Nuevo Cliente --}}

                <div class="col-md-2 col-xs-12 mb-3">
                    <button id="btn_nuevo" type="button" data-toggle="modal" data-target="#ClienteCreate"
                        class="btn btn-outline-danger btn-lg w-100">
                        Nuevo Cliente
                    </button>
                </div>

                {{-- Buscar Cliente --}}

                <div class="col-md-3 col-xs-12  mb-3">
                    <input placeholder="Nombre o Razón Social" type="text" name="nombre" class="form-control">
                </div>

                <div class="col-md-3 col-xs-12  mb-3">
                    <input placeholder="CI / NIT" type="number" min="1" pattern="^[0-9]+" name="cinit"
                        class="form-control">
                </div>

                <div class="col-md-2  mb-3">
                    <select name="estado" class="form-control">
                        <option value="*">Todos</option>
                        <option value="0">Inactivo</option>
                        <option value="1">Activo</option>
                    </select>
                </div>

                <div class="col-md-2  mb-3">
                    <button type="submit" class="btn btn-outline-info btn-lg w-100">Buscar Cliente</button>
                </div>

            </div>
        </form>

    </div>

    {{-- TABLA CLIENTES --}}
    <div class="table-responsive bg-light">
        @if (count($clientes))
            <table class="table text-center h4" id="clientes">
                <thead class="bg-danger">
                    <tr class="text-light">
                        <th>Nombre</th>
                        <th>CI/NIT</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>


                <tbody>

                    @foreach ($clientes as $cliente)
                        <tr>
                            <td>{{ $cliente->nombre }}</td>
                            <td>{{ $cliente->cinit }}</td>
                            <td>{{ $cliente->estado == 0 ? 'Inactivo' : 'Activo' }}</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <button id="btn_show" type="button" data-toggle="modal"
                                        data-target="#ClienteShow{{ $cliente->id }}" class="btn btn-sm btn-secondary"><i
                                            class="fas fa-eye"></i></button>

                                    <button id="btn_edit" type="button" data-toggle="modal"
                                        data-target="#ClienteEdit{{ $cliente->id }}" class="btn btn-sm btn-secondary"><i
                                            class="fas fa-edit"></i></button>

                                    <button id="btn_estado" type="button" data-toggle="modal"
                                        data-target="#ClienteEstado{{ $cliente->id }}" class="btn btn-sm btn-secondary"><i
                                            class="fas fa-adjust"></i></button>

                                    <button id="btn_estado" type="button" data-toggle="modal"
                                        data-target="#ClienteDestroy{{ $cliente->id }}" class="btn btn-danger"
                                        {{ $cliente->estado ? 'disabled' : '' }}><i class="fas fa-trash-alt"></i></button>
                                </div>
                            </td>
                        </tr>

                        @include('clientes.show')
                        @include('clientes.edit')
                        @include('clientes.estado')
                        @include('clientes.destroy')
                    @endforeach

                </tbody>
            </table>
        @else
            <h4>No existen clientes</h4>
        @endif
    </div>





    @include('clientes.create')


    @include('modulos.scripts')
    {{-- @include('modulos.datatable',['nombretabla'=>'clientes']) --}}


    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js"></script>

    <script>
        $('#clientes').DataTable({
            dom: '<"col-12 d-flex justify-content-between mt-2"lB>tp',
            buttons: [{
                extend: 'print',
                text: 'Reporte',
                customize: function(win) {
                    $(win.document.body).find('table').css('width', '100%');
                },
                exportOptions: {
                    columns: [0, 1],
                    stripHtml: true,
                },
                download: 'open'
            }],
            responsive: true,
            autoWidth: false,
            language: {
                url: 'plugins/languaje/datatable/spanish.json'
            }
        });
    </script>




@endsection
