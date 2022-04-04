<div class="modal fade" id="TipotrabajoEdit{{$tipotrabajo->id}}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content bg-dark-x text-light">
                            
          <!-- Modal Header-->  
        <div class="modal-header bg-danger">
            <h1 class="modal-title col-11 text-center w-100 font-weight-bold">Editar Tipo de Trabajo</h1>
            <button type="button" class="close col-1 mr-5" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><i class="far fa-window-close"></i></span>
            </button>
        </div>
      
          <!-- Modal Body-->
        <form method="post" action="{{ route('tipotrabajos.update', $tipotrabajo) }}">
          @csrf
          @method('PUT')
          
          @if (session('Actualizado'))
          <div class="alert alert-primary"role="alert">
            {{ session('Actualizado') }}
          </div>
          @endif
      
        <div class="modal-body">

          <div class="row">
            <div class="col-12">
                <label>Nombre:</label>
                <input type="text" name="nombre" class="form-control mb-2"
                  required value="{{ $tipotrabajo->nombre }}">
            </div>
            </div>
      
        <div class="row">
            <div class="col-12">
            <label>Descripción:</label>
            <textarea type="text" name="descripcion" rows="3" class="form-control mb-2" 
                required >{{ $tipotrabajo->descripcion }}</textarea>
            </div>
        </div>

        <div class="row">
          <div class="col-12">
              <label>Tipo:</label>
              <input type="text" name="codigo" class="form-control mb-2"
                required value="{{ $tipotrabajo->codigo }}">
          </div>
        </div>
        
    
          <div class="row mt-4 mx-auto">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary ml-auto">Editar</button>
          </div>
        
        </div>
        </form>
      
</div>
</div>
</div>