<div class="modal fade" id="ProcesoCreate" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content bg-dark-x text-light">
                    
            <!-- Modal Header-->  
        <div class="modal-header bg-danger">
            <h1 class="modal-title col-11 text-center w-100 font-weight-bold">Nuevo Proceso</h1>
            <button type="button" class="close col-1 mr-5" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><i class="far fa-window-close"></i></span>
              </button>
        </div>
    
            <!-- Modal Body-->
    
        <form method="post" action="{{ route('procesos.store') }}">
    
            @csrf
    
            @if (session('Registrado'))
                <div class="alert alert-primary" 
                role="alert">{{ session('Registrado') }}</div>
            @endif
    
        <div class="modal-body">
            <div class="row">
                {{-- <div class="col-md-2 col-xs-12">
                    <label>Nro:</label>
                    <input type="number" min="1" pattern="^[0-9]+" required name="nro" class="form-control mb-2 @error('nro') is-invalid @enderror"
                    id="nro" placeholder="Orden" value="{{ old('nro') }}">
             
                    @error('nro')
                        <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                        </span>
                    @enderror 
                </div> --}}

                <div class="col-md-12 col-xs-12">
                    <label>Descripción:</label>
                   
                    <input type="text" required name="descripcion" class="form-control mb-2 @error('descripcion') is-invalid @enderror"
                id="descripcion" placeholder="Nombre o Descripción del Proceso" value="{{ old('descripcion') }}">

                    @error('descripcion')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror 
                </div>
            </div>
            
            <div class="row">

                <div class="col-md-2 col-xs-12">
                    <label>Tiempo:</label>
                    <input type="number" min="1" pattern="^[0-9]+" required name="tiempomin" class="form-control mb-2 @error('tiempomin') is-invalid @enderror"
                    id="tiempomin" placeholder="Minutos" value="{{ old('tiempomin') }}">
             
                    @error('tiempomin')
                        <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                        </span>
                    @enderror 
                </div>

                <div class="col-md-10 col-12">
                    <label>Tipo de Trabajo:</label>

                    <div class="wrapeo">
                    <select name="tipotrabajo_id" class="form-control selectpicker"
                    onfocus='this.size=5;' onblur='this.size=1;' onchange='this.size=1; this.blur();'>
                        <option selected>Seleccione el tipo de trabajo</option>

                            @foreach ($tipotrabajos as $tipotrabajo)

                            <option value="{{$tipotrabajo->id }}">
                                {{$tipotrabajo->nombre }}
                            </option>

                            @endforeach
                        
                    </select>
                </div>

                    @error('tipotrabajo')
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
    