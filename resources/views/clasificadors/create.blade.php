<div class="modal fade" id="ClasificadorCreate" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content bg-dark-x text-light">
                    
            <!-- Modal Header-->  
        <div class="modal-header bg-danger">
            <h1 class="modal-title col-11 text-center w-100 font-weight-bold">Nuevo Clasificador de Cotizaciones</h1>
            <button type="button" class="close col-1 mr-5" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><i class="far fa-window-close"></i></span>
              </button>
        </div>
    
            <!-- Modal Body-->
    
        <form method="post" action="{{ route('clasificadors.store') }}">
    
            @csrf
    
            @if (session('Registrado'))
                <div class="alert alert-primary" 
                role="alert">{{ session('Registrado') }}</div>
            @endif
    
        <div class="modal-body">
            <div class="row">
                <div class="col-12">
                    <label>Nombre:</label>
                    <input type="text" required name="nombre" class="form-control mb-2 @error('nombre') is-invalid @enderror"
                    id="nombre" placeholder="Nombre del Clasificador" value="{{ old('nombre') }}">
    
                        @error('nombre')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
                </div>
            </div>
            
            <div class="row">
                <div class="col-12">
                    <label>Descripción:</label>
                   
                    <textarea name="descripcion" class="form-control mb-2 @error('descripcion') is-invalid @enderror"
                    id="descripcion" rows="3" placeholder="Descripción del Clasificador" value="{{ old('descripcion') }}"></textarea>
            
                    @error('descripcion')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror 
                </div>
            </div>

    
            <div class="row mt-4 mx-auto">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-success ml-auto">Registrar</button>
            </div>
        </div>
        </form>
            
    
    
    </div>
    </div>
    
    </div>
    