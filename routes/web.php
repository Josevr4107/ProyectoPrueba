<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes();



// Route::get('/', function () {
//     return view('home');
// });


Route::group( [ 'middleware' => 'auth'], function()
{
    
    // CLIENTES //
    Route::resource('clientes','ClienteController');
    Route::get('clientes/cambio_estado/{cliente}',
    'ClienteController@vista_cambio_estado')->name('cliente.cambioestado');
    Route::post('clientes/actualizar_estado/{cliente}',
    'ClienteController@actualizar_estado')->name('clientes.actualizar_estado');
    Route::get('clientes_eliminar/{cliente}', 'ClienteController@eliminar')->name('clientes.eliminar_vista');
    Route::post('buscar_cliente', 'ClienteController@filtrar')->name('buscar_cliente');

    // CLASIFICADOR //

    Route::resource('clasificadors','ClasificadorController');
    Route::get('clasificadors/cambio_estado/{clasificador}',
    'ClasificadorController@vista_cambio_estado')->name('clasificador.cambioestado');
    Route::post('clasificadors/actualizar_estado/{clasificador}',
    'ClasificadorController@actualizar_estado')->name('clasificadors.actualizar_estado');
    Route::get('clasificadors_eliminar/{clasificador}', 'ClasificadorController@eliminar')->name('clasificadors.eliminar_vista');
    Route::post('buscar_clasificador', 'ClasificadorController@filtrar')->name('buscar_clasificador');

   // Tipo Trabajo //

   Route::resource('tipotrabajos','TipotrabajoController');
   Route::get('tipotrabajos/cambio_estado/{tipotrabajo}',
   'TipotrabajoController@vista_cambio_estado')->name('tipotrabajo.cambioestado');
   Route::post('tipotrabajos/actualizar_estado/{tipotrabajo}',
   'TipotrabajoController@actualizar_estado')->name('tipotrabajos.actualizar_estado');
   Route::get('tipotrabajos_eliminar/{tipotrabajo}', 'TipotrabajoController@eliminar')->name('tipotrabajos.eliminar_vista');
   Route::post('buscar_tipotrabajo', 'TipotrabajoController@filtrar')->name('buscar_tipotrabajo');

   // Procesos y Tiempos //

   Route::resource('procesos','ProcesoController');
   Route::get('procesos/cambio_estado/{proceso}',
   'ProcesoController@vista_cambio_estado')->name('proceso.cambioestado');
   Route::post('procesos/actualizar_estado/{proceso}',
   'ProcesoController@actualizar_estado')->name('procesos.actualizar_estado');
   Route::get('procesos_eliminar/{proceso}', 'ProcesoController@eliminar')->name('procesos.eliminar_vista');
   Route::post('buscar_proceso', 'ProcesoController@filtrar')->name('buscar_proceso');

   // Cotizaciones //

   Route::resource('cotizacions','CotizacionController');
   Route::get('cotizacions/cambio_estado/{cotizacion}',
   'CotizacionController@vista_cambio_estado')->name('cotizacion.cambioestado');
   Route::post('cotizacions/actualizar_estado/{cotizacion}',
   'CotizacionController@actualizar_estado')->name('cotizacions.actualizar_estado');
   Route::get('cotizacions_eliminar/{cotizacion}', 'CotizacionController@eliminar')->name('cotizacions.eliminar_vista');
   Route::post('buscar_cotizacion', 'CotizacionController@filtrar')->name('buscar_cotizacion');





    
    Route::get('/', 'HomeController@index')->name('home');

    
}
);


Route::get('/welcome', function () {
    return view('welcome');
});

// Route::get('/inicio', 'InicioController@index');
