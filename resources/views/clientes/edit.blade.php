<div class="modal fade" id="ClienteEdit{{ $cliente->id }}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content bg-dark-x text-light">

            <!-- Modal Header-->
            <div class="modal-header bg-danger">
                <h1 class="modal-title col-11 text-center w-100 font-weight-bold">Editar Cliente</h1>
                <button type="button" class="close col-1 mr-5" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="far fa-window-close"></i></span>
                </button>
            </div>

            <!-- Modal Body-->
            <form method="post" action="{{ route('clientes.update', $cliente) }}">
                @csrf
                @method('PUT')

                @if (session('Actualizado'))
                    <div class="alert alert-primary" role="alert">
                        {{ session('Actualizado') }}
                    </div>
                @endif

                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-7 col-xs-12">
                            <label>Nombre:</label>
                            <input type="text" name="nombre" class="form-control mb-2" required
                                value="{{ $cliente->nombre }}">
                        </div>

                        <div class="col-md-5 col-xs-12">
                            <label>CI/NIT:</label>
                            <input type="number" min="1" pattern="^[0-9]+" name="cinit" class="form-control mb-2"
                                required value="{{ $cliente->cinit }}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <label>Dirección:</label>
                            <input type="text" name="direccion" class="form-control mb-2"
                                value="{{ $cliente->direccion }}">
                        </div>

                        <div class="col-xs-12 col-md-3">
                            <label>Celular 1:</label>
                            <input type="number" min="1" pattern="^[0-9]+" class="form-control mb-2" name="cel1"
                                required value="{{ $cliente->cel1 }}">
                        </div>

                        <div class="col-xs-12 col-md-3">
                            <label>Celular 2:</label>
                            <input type="number" min="1" pattern="^[0-9]+" class="form-control mb-2" name="cel2"
                                value="{{ $cliente->cel2 }}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <label>Correo:</label>
                            <input type="email" class="form-control mb-2" name="correo"
                                value="{{ $cliente->correo }}">
                        </div>
                    </div>

                    <div class="row mt-4 mx-auto">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-danger ml-auto">Editar</button>
                    </div>

                </div>
            </form>

        </div>
    </div>
</div>
