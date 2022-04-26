<div class="modal fade" id="ClasificadorShow{{$clasificador->id}}" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content bg-dark-x text-light">

      <!-- Modal Header-->
      <div class="modal-header bg-danger">
        <h1 class="modal-title col-11 text-center w-100 font-weight-bold">Datos del Clasificador</h1>
        <button type="button" class="close col-1 mr-5" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="far fa-window-close"></i></span>
        </button>
      </div>

      <!-- Modal Body-->

      <div class="modal-body">
        <div class="row">
          <div class="col-12">
            <label>Nombre:</label>
            <input type="text" name="nombre" class="form-control mb-2" readonly value="{{ $clasificador->nombre }}">
          </div>
        </div>

        <div class="row">
          <div class="col-12">
            <label>Descripción:</label>
            <textarea type="text" name="descripcion" rows="3" class="form-control mb-2"
              readonly>{{ $clasificador->descripcion }}</textarea>
          </div>
        </div>

        <div class="row">
          <div class="form-group col-12">
            <label>Estado:</label>
            <select name="estado" class="form-control mb-2" disabled>
              <option {{ ($clasificador->estado == 0) ? 'selected' : '' }} value="0">Inactivo</option>
              <option {{ ($clasificador->estado == 1) ? 'selected' : '' }} value="1">Activo</option>
            </select>

          </div>
        </div>


        <div class="row mt-4">
          <button type="button" class="btn btn-danger" style="display: block; margin: 0 auto; width: 20rem;"
            data-dismiss="modal">Cancelar</button>
        </div>

      </div>

    </div>
  </div>
</div>