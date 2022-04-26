<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ $title }} - MEIKING</title>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  @yield('csshead')

  <!-- ICONOS -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  {{-- <script src="https://kit.fontawesome.com/f101cebdc9.js" crossorigin="anonymous"></script> --}}

</head>

<body class="bg-dark-x">

  <div id="app">

    <main class="">

      @yield('content')
    </main>

  </div>
  @include('modulos.scripts')
  @yield('datatable')

  <hr>
</body>

</html>