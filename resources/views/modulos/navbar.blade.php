<nav class="navbar navbar-expand-md navbar-dark d-block bg-dark fixed-top border-bottom">
    <div class="container">

        <div class="collapse navbar-collapse">
            <a href="/"><img src="{{ asset('img/navbar-brand.png') }}" class="navbar-brand"></a>
        </div>

        <button class="navbar-toggler mx-auto mb-2" type="button" data-toggle="collapse" data-target="#menu"
            aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="menu">

            <ul class="navbar-nav mr-auto">
                <li class="nav-item mx-auto"><a href="{{ url('/cotizacions') }}" class="nav-link">Cotizaciones</a>
                </li>
                <li class="nav-item mx-auto"><a class="nav-link" href="{{ url('/clientes') }}">Clientes</a></li>
                <li class="nav-item mx-auto"><a href="{{ url('/clasificadors') }}"
                        class="nav-link">Categorías</a></li>
                <li class="nav-item mx-auto"><a href="{{ url('/tipotrabajos') }}" class="nav-link">Lista de
                        Trabajos</a>
                </li>
                <li class="nav-item mx-auto"><a href="{{ url('/procesos') }}" class="nav-link">Procesos</a></li>
            </ul>

            <ul class="navbar-nav">
                <li class="nav-item mx-auto dropdown">
                    <a href="" class="nav-link dropdown-toggle text-center" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ auth()->user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right bg-light" style="font-size: 1.3rem">
                        <a class="dropdown-item text-center" href="{{ url('/') }}">Perfil</a>
                        <a class="dropdown-item text-center" data-widget="control-sidebar" data-slide="true"
                            href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();" role="button">
                            Salir</a>
                        <form method="post" id="logout-form" action="{{ route('logout') }}">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>

        </div>

    </div>
</nav>
