@extends('layouts.app',['title'=>'Inicio de Sesión'])
@include('modulos.scripts')


@section('content')

  <section class="container-fluid text-light">

    <div class="row g-0">

        {{-- CARRUSEL --}}
        <div class="col-md-7 d-none d-md-block">
          <div id="carouselExampleCaptions" class="carousel slide row" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item img-1 min-vh-100 active">
                  <div class="carousel-caption d-none d-md-block">
                    <h1 class="font-weight-bold">Diseño Gráfico</h1>
                  </div>
                </div>
                <div class="carousel-item img-2 min-vh-100">
                  <div class="carousel-caption d-none d-md-block">
                    <h1 class="font-weight-bold">Impresión Offset</h1>
                  </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
      </div>


      <div class="col-md-5 bg-dark d-flex flex-column align-items-end min-vh-100">
        <div class="pt-5 p-2 mb-auto w-100 text-center">
          <img src="{{ asset('img/logo.png') }}" class="img-fluid img-logo"/>
        </div>
        <div class="align-self-center w-100 px-lg-5 py-lg-4 p-4">
          <h2 class="font-weight-bold mb-3">Bienvenido a MEIKING</h2>
          <form class="mb-5" method="POST" action="{{ route('login') }}">
              @csrf
              <div class="mb-3">
                  <label for="email" class="form-label font-weight-bold">E-mail:</label>
                  <input id="email" type="email" class="form-control bg-dark-x border-0 text-secondary 
                  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                  
                  @error('email')
                  <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                  </span>
                  @enderror
              </div>

              <div class="mb-3">
                  <label for="password" class="form-label font-weight-bold">Contraseña:</label>
                  <input id="password" type="password" class="form-control bg-dark-x border-0 mb-2 text-secondary 
                  @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                      @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
              </div>

              <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="form-check-label" for="remember">
                    {{ __('Recordar') }}
                </label>
              </div>

              <button type="submit" class="btn btn-danger w-100">Ingresar</button>

              {{-- @if (Route::has('password.request'))
                  <a class="btn btn-link" href="{{ route('password.request') }}">
                      ¿Olvidaste tu Contraseña?
                  </a>
              @endif --}}
          </form>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection
