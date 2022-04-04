<div class="modal fade" id="ClienteShow{{$cliente->id}}" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
<div class="modal-content bg-dark-x text-light">
                    
    <!-- Modal Header-->  
    <div class="modal-header bg-danger">
        <h1 class="modal-title col-11 text-center w-100 font-weight-bold">Datos del Cliente</h1>
        <button type="button" class="close col-1 mr-5" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"><i class="far fa-window-close"></i></span>
        </button>
    </div>
    
    <!-- Modal Body-->

<div class="modal-body">
    <div class="row">
        <div class="col-md-7 col-xs-12">
            <label>Nombre:</label>
            <input type="text" name="nombre" class="form-control mb-2"
            value="{{ $cliente->nombre }}" readonly>
        </div>

        <div class="col-md-5 col-xs-12">
            <label>CI/NIT:</label>
            <input type="number" name="cinit" class="form-control mb-2"
            value="{{ $cliente->cinit }}" readonly>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-md-6">
            <label>Dirección:</label>
            <input type="text" name="direccion" class="form-control mb-2"
            value="{{ $cliente->direccion }}" readonly>
        </div>

        <div class="col-xs-12 col-md-3">
            <label>Celular 1:</label>
            <input type="number" min="1" pattern="^[0-9]+" class="form-control mb-2" 
            name="cel1" value="{{ $cliente->cel1 }}" readonly>
        </div>
        <div class="col-xs-12 col-md-3">
            <label>Celular 2:</label>
            <input type="number" min="1" pattern="^[0-9]+" class="form-control mb-2" 
            name="cel2" value="{{ $cliente->cel2 }}" readonly>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-md-6">
            <label>Correo:</label>
            <input type="email" class="form-control mb-2" 
            name="correo" value="{{ $cliente->correo }}" readonly>
        </div>
        
        <div class="form-group col-xs-12 col-md-6">
            <label>Estado:</label>
            <select name="estado" class="form-control mb-2"disabled>
                <option {{ ($cliente->estado == 0) ? 'selected' : '' }} value="0">Inactivo</option>
                <option {{ ($cliente->estado == 1) ? 'selected' : '' }} value="1">Activo</option>
            </select>
            
        </div>
    </div>

    
    <div class="row mt-4">
            <button type="button" class="btn btn-danger" style="display: block; margin: 0 auto; width: 20rem;" data-dismiss="modal">Cancelar</button>
    </div>
          
</div>

</div>
</div>
</div>
