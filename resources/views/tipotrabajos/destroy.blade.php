<div class="modal fade" id="TipotrabajoDestroy{{$tipotrabajo->id}}" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content bg-dark-x text-light">

      <!-- Modal Header-->
      <div class="modal-header bg-danger">
        <h1 class="modal-title col-11 text-center w-100 font-weight-bold">¿Desea eliminar el Tipo de Trabajo?</h1>
        <button type="button" class="close col-1 mr-5" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="far fa-window-close"></i></span>
        </button>
      </div>

      <!-- Modal Body-->

      <div class="modal-body">

        <div class="row">
          <div class="col-12">
            <label>Nombre:</label>
            <input type="text" name="nombre" class="form-control mb-2" readonly value="{{ $tipotrabajo->nombre }}">
          </div>
        </div>

        <div class="row">
          <div class="col-12">
            <label>Descripción:</label>
            <textarea type="text" name="descripcion" rows="3" class="form-control mb-2"
              readonly>{{ $tipotrabajo->descripcion }}</textarea>
          </div>
        </div>

        <div class="row">
          <div class="col-12">
            <label>Tipo:</label>
            <input type="text" name="codigo" class="form-control mb-2" readonly value="{{ $tipotrabajo->codigo }}">
          </div>
        </div>


        <div class="row mt-4">
          <form action="{{ route('tipotrabajos.destroy', $tipotrabajo)}}" method="post" class="col-12">
            @method('DELETE')
            @csrf
            <button type="button" class="btn btn-danger mr-auto ml-3" data-dismiss="modal">Cancelar</button>
            <button class="btn btn-danger ml-auto mr-3" type="submit">Eliminar Trabajo</button>
          </form>
        </div>

      </div>

    </div>
  </div>
</div>