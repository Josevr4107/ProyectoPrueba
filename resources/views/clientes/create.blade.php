<div class="modal fade" id="ClienteCreate" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content bg-dark-x text-light">

      <!-- Modal Header-->
      <div class="modal-header bg-danger">
        <h1 class="modal-title col-11 text-center w-100 font-weight-bold">Nuevo Cliente</h1>
        <button type="button" class="close col-1 mr-5" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="far fa-window-close"></i></span>
        </button>
      </div>

      <!-- Modal Body-->

      <form method="post" action="{{ route('clientes.store') }}">

        @csrf

        @if (session('Registrado'))
        <div class="alert alert-primary" role="alert">{{ session('Registrado') }}</div>
        @endif

        <div class="modal-body">
          <div class="row">
            <div class="col-md-7 col-xs-12">
              <label>Nombre:</label>
              <input type="text" required name="nombre" class="form-control mb-2 @error('nombre') is-invalid @enderror"
                id="nombre" placeholder="Nombre o Razón Social" value="{{ old('nombre') }}">

              @error('nombre')
              <span class="invalid-feedback d-block" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>

            <div class="col-md-5 col-xs-12">
              <label>CI/NIT:</label>
              <input type="number" min="1" pattern="^[0-9]+" required name="cinit"
                class="form-control mb-2 @error('cinit') is-invalid @enderror" id="cinit" placeholder="CI / NIT"
                value="{{ old('cinit') }}">

              @error('cinit')
              <span class="invalid-feedback d-block" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          </div>

          <div class="row">
            <div class="col-xs-12 col-md-6">
              <label>Dirección:</label>
              <input type="text" name="direccion" class="form-control mb-2 @error('direccion') is-invalid @enderror"
                id="direccion" placeholder="Dirección del Cliente" value="{{ old('direccion') }}">

              @error('direccion')
              <span class="invalid-feedback d-block" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>

            <div class="col-xs-12 col-md-3">
              <label>Celular 1:</label>
              <input type="number" min="1" pattern="^[0-9]+"
                class="form-control mb-2 @error('cel1') is-invalid @enderror" required name="cel1" id="cel"
                placeholder="Nro. Celular 1" value="{{ old('cel1') }}">

              @error('cel1')
              <span class="invalid-feedback d-block" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>

            <div class="col-xs-12 col-md-3">
              <label>Celular 2:</label>
              <input type="number" min="1" pattern="^[0-9]+"
                class="form-control mb-2 @error('telf') is-invalid @enderror" name="cel2" id="cel2"
                placeholder="Nro. Celular 2" value="{{ old('cel2') }}">

              @error('cel2')
              <span class="invalid-feedback d-block" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>

          </div>

          <div class="row">
            <div class="col-12">
              <label>Correo:</label>
              <input type="email" class="form-control mb-2 @error('correo') is-invalid @enderror" name="correo"
                id="correo" placeholder="nombre@correo.com" value="{{ old('correo') }}">

              @error('correo')
              <span class="invalid-feedback d-block" role="alert">
                <strong>{{ $message }}</strong>
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