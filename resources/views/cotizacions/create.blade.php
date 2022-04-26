@extends('layouts.app',['title'=>'Lista de Cotizaciones'])

@section('content')
@include('modulos.navbar')


<section class="content-header text-center">
  <h1 class="font-weight-bold text-light">Nueva Cotización</h1>
</section>

<div class="container">
  <form action="" class="bg-danger">
    <label for="cliente">Cliente</label>
    <select name="cliente" class="form-control col-md-5 col-xs-12  mb-3 
            @error('cliente') is-invalid @enderror" id="cliente">

      <option value="">-- Seleccione una Cliente -</option>

      @foreach ($clientes as $cliente)
      <option value="{{ $cliente->id }}" {{-- si la ultima cliente es igual al id actual entonces agregale el atributo
        selected caso contrario no agrega nada --}} {{ old('cliente')==$cliente->id ? 'selected' : '' }}>
        {{ $cliente->nombre }} </option>
      @endforeach

    </select>

    <button id="btn_nuevo" type="button" data-toggle="modal" data-target="#ClienteCreate"
      class="btn btn-dark btn-lg w-100 col-md-1 col-xs-12">
      +
    </button>






  </form>






</div>


@include('clientes.create')

@include('modulos.scripts')
@endsection