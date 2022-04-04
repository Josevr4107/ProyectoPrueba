<div class="modal fade" id="ProcesoShow{{$proceso->id}}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content bg-dark-x text-light">
                        
        <!-- Modal Header-->  
        <div class="modal-header bg-danger">
            <h1 class="modal-title col-11 text-center w-100 font-weight-bold">Datos del Proceso</h1>
            <button type="button" class="close col-1 mr-5" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><i class="far fa-window-close"></i></span>
            </button>
        </div>
        
        <!-- Modal Body-->
    
    <div class="modal-body">
        <div class="row">

            <div class="col-md-2 col-xs-12">
                <label>Nro:</label>
                <input type="number" min="1" pattern="^[0-9]+" required name="nro" class="form-control mb-2 @error('nro') is-invalid @enderror"
                id="nro" placeholder="Nro del Proceso" 
                readonly  value="{{ $proceso->nro }}">
            </div>

            <div class="col-md-10 col-xs-12">
                <label>Descripción:</label>
               
                <input type="text" required name="descripcion" class="form-control mb-2 @error('descripcion') is-invalid @enderror"
            id="descripcion" placeholder="Nombre o Descripción del Proceso" 
            readonly  value="{{ $proceso->descripcion }}">

            </div>

        </div>

        <div class="row">

            <div class="col-md-2 col-xs-12">
                <label>Tiempo:</label>
                <input type="number" min="1" pattern="^[0-9]+" required name="tiempomin" class="form-control mb-2 @error('tiempomin') is-invalid @enderror"
                id="tiempomin" placeholder="Minutos" 
                readonly  value="{{ $proceso->tiempomin }}">
         
                @error('tiempomin')
                    <span class="invalid-feedback d-block" role="alert">
                    <strong>{{$message}}</strong>
                    </span>
                @enderror 
            </div>

            <div class="col-md-10 col-12">
                <label>Tipo de Trabajo:</label>
                
                
                <select name="tipotrabajo_id" class="form-control selectpicker" disabled>

                    @foreach ($tipotrabajos as $tipotrabajo)

                    <option value="{{$tipotrabajo->id }}">
                        {{$tipotrabajo->nombre }}
                    </option>

                    @endforeach
                    
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
    