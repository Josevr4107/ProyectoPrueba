@extends('layouts.app',['title'=>'Lista de Procesos'])

@section('csshead')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css"/>
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css">

@endsection

@section('content')

@include('modulos.navbar')

  {{-- HEADER --}}

  
<section class="content-header text-center">
  <h1 class="font-weight-bold text-light">Lista de Procesos</h1>
</section>

<div class="container">
    
<form action="{{ route('buscar_proceso') }}" method="post">
      @csrf
        
<div class="row mt-4">

    {{-- Nuevo Proceso --}}
        
  <div class="col-md-2 col-xs-12  mb-3">
      <button id="btn_nuevo" type="button" 
        data-toggle="modal" data-target="#ProcesoCreate"
        class="btn btn-outline-danger btn-lg w-100">
        Nuevo Proceso
      </button>     
  </div>

    {{-- Buscar Proceso --}}

  {{-- <div class="col-md-3 col-xs-12  mb-3">
    <input placeholder="Tipo de Trabajo" type="text" name="tipotrabajo" class="form-control">
  </div> --}}

  <div class="col-md-6 col-xs-12  mb-3">
    <input placeholder="Descripcion" type="text" name="descripcion" class="form-control">
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
    @if ( count($procesos) )
    
<table class="table text-center h4" id="procesos">
    <thead class="bg-danger">
        <tr class="text-light">
          <th>Tipo de Trabajo</th>
          <th>Paso</th>
          <th>Descripción Proceso</th>
          <th>Tiempo (Mins.)</th>
          {{-- <th>Estado</th> --}}
          <th>Acciones</th>
        </tr>
    </thead>
          
          
    <tbody>

        @foreach ($procesos as $proceso)
        <tr>
          <td>{{ $proceso->tipotrabajo->nombre }}</td>
          <td>{{ $proceso->nro }}</td>
          <td>{{ $proceso->descripcion }}</td>
          <td>{{ $proceso->tiempomin }}</td>
          {{-- <td>{{ ($proceso->estado == 0) ? "Inactivo" : "Activo" }}</td> --}}
          <td>
            <div class="btn-group" role="group">
              <button id="btn_show" type="button" data-toggle="modal" data-target="#ProcesoShow{{$proceso->id}}"
              class="btn btn-sm btn-info"><i class="fas fa-eye"></i></button>

              <button id="btn_edit" type="button" data-toggle="modal" data-target="#ProcesoEdit{{$proceso->id}}"
              class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></button>

              <button id="btn_estado" type="button" data-toggle="modal" data-target="#ProcesoEstado{{$proceso->id}}"
              class="btn btn-sm btn-secondary"><i class="fas fa-adjust"></i></button>

              <button id="btn_estado" type="button" data-toggle="modal" data-target="#ProcesoDestroy{{$proceso->id}}"
                class="btn btn-danger"{{ $proceso->estado ? 'disabled': '' }}><i class="fas fa-trash-alt"></i></button>
            </div>
          </td>
        </tr>

        @include('procesos.show')
        @include('procesos.edit')
        @include('procesos.estado')
        @include('procesos.destroy')

        @endforeach
        
    </tbody>
</table>
    
    @else
    <h4>No existen Procesoes de Cotizaciones</h4>
    @endif
</div>
  
  
  
  
  @include('procesos.create')


@include('modulos.scripts')
@include('modulos.datatable',['nombretabla'=>'procesos'])

@endsection