@extends('layouts.app',['title'=>'Lista de Clientes'])


@section('content')
    
  {{-- NAVBAR --}}
  
  @include('modulos.navbar')

  {{-- CAROUSEL--}}

  <section class="container-fluid">
    <div class="row g-0">

        <div class="col-12 d-none d-block">
            <div id="carouselExampleCaptions" class="carousel slide carousel-fade row" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carousel" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel" data-slide-to="1"></li>
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
                <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev" style="opacity: 0 ">
                {{-- <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev"> --}}
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Anterior</span>
                </button>
                
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next"  onLoad="ini()">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Siguiente</span>
                </a>
              </div>
        </div>
      </div>
  </section>

    
@endsection


{{--
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
--}}