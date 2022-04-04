<div class="modal fade" id="ProcesoEstado{{$proceso->id}}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content bg-dark-x text-light">
                            
            <!-- Modal Header-->  
            <div class="modal-header bg-danger">
                <h1 class="modal-title col-11 text-center w-100 font-weight-bold">Cambiar Estado</h1>
                <button type="button" class="close col-1 mr-5" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="far fa-window-close"></i></span>
                </button>
            </div>
            
            <!-- Modal Body-->
        
            <form action="{{ route('procesos.actualizar_estado',$proceso) }}" method="post">
            @csrf
                
            <div class="modal-body">
                <div class="row">
                <div class="form-group col-12">
                    <label>Estado</label>
                    <select name="estado" class="form-control">
                    <option {{ ($proceso->estado == 0) ? 'selected' : ''  }} value="0">Inactivo</option>
                    <option {{ ($proceso->estado == 1) ? 'selected' : ''  }} value="1">Activo</option>
                    </select>
                </div>
                </div>
    
                <div class="row mt-4 mx-auto">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary ml-auto">Cambiar Estado</button>
                  </div>
            </div>
            </form>
    </div>
    </div>
    </div>