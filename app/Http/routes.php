<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::get('especialidades', 'frontpageController@especialidades');
Route::get('promociones', 'frontpageController@promociones');
Route::get('instalaciones', 'frontpageController@instalaciones');
Route::get('tratamientos', 'frontpageController@tratamientos');

Route::get('cita', 'frontpageController@cita');
Route::resource('factura', 'FacturaController');




Route::controllers([
    'users'    => 'UsersController',
    'auth'     => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',

]);
//Rutas para el administrador
Route::group(['prefix' => 'admin', 'middleware' => ['auth'], 'namespace' => '\Admin'], function(){

    Route::get('/', 'AdminController@index');


    Route::resource('factura', 'FacturarController');
    Route::resource('users', 'UsersController');
    Route::resource('ivas', 'IvaController');
    Route::resource('turnos', 'TurnosController');
    Route::resource('insumos', 'insumosController');
    Route::resource('proveedores', 'ProveedorController');
    Route::resource('productos', 'ProductoController');
    Route::resource('especialidades', 'EspecialidadController');
    Route::resource('especialistas', 'EspecialistaController');

    Route::get('generar-pdf/{id}',[
        'as'    => 'generar-pdf',
        'uses'  => 'DiagnosticoController@generarPdf'
    ]);

    Route::get('ver-historial/{id}',
        [
            'as'   => 'ver-historial',
            'uses' => 'UsersController@verHistorial'
        ]);

    Route::get('ver-detalle-diagnostico/{id}',
        [
            'as'   => 'ver-detalle-diagnostico',
            'uses' => 'DiagnosticoController@verDetalle'
        ]);

    Route::resource('pedido', 'PedidoController');

    Route::get('/cambiar-estado/{id}/{usuario}', [
        'as'    => 'cambiar-estado',
        'uses'  => 'DiagnosticoController@cambiarEstado'
    ]);


    Route::resource('pdf-usuarios', 'PdfController');
    Route::resource('pdf-insumos', 'PdfInsumosController');
    Route::resource('pdf-proveedores', 'PdfProveedoresController');


    Route::get('perfil',             'UsersController@perfil');
    Route::get('editarPerfil'  ,     'UsersController@editarPerfil');
    Route::resource('userPerfil',    'UserPerfilController');
    Route::get('especialidad',       'EspecialidadController@guardar');

    Route::get('agendar',     'AgendarController@index');
    Route::get('editar-cita', [
        'as'     => 'editar-cita',
        'uses'   => 'AgendarController@editar_cita'
    ]);
    Route::get('horas-agendadas', [
        'as'     => 'horas-agendadas',
        'uses'   => 'AgendarController@ver_horas'
    ]);
    Route::resource('agendar',        'AgendarController');
    Route::resource('consultas',     'ConsultasController');
    Route::resource('intervencion',  'IntervencionController');

    //Route::resource('pagar',         'PagarController');
    Route::resource('intervencion2', 'Intervencion2Controller');
    Route::resource('tratamiento',   'TratamientoController');
    Route::resource('pagar',  'PagarController');
    Route::resource('configurar-forma-de-pago', 'FormaPagoController');


    Route::resource('configurar', 'ConfigurarController');

    Route::resource('diagnostico', 'DiagnosticoController');

    Route::get('/pagos/{id}',  [

        'as'      => 'pagos_usuario',
        'uses'    => 'PagosController@pagos']

    );

    Route::get('/pdfFactura/{id}',   [

        'as'      => 'pdfFactura',
        'uses'    => 'PdfFacturaController@verFactura']
    );

    Route::get('/pdfPEdido/{id}',   [

            'as'      => 'pdfPedido',
            'uses'    => 'PdfPedidoController@verPedido']
    );

    Route::get('/ingresar-pago/{id}',  [

            'as'      => 'ingresar-pago',
            'uses'    => 'PagosController@pagando']

    );

    Route::post('/pagado/{id}', [

        'as'      => 'pagado',
        'uses'    =>'PagosController@pagado'

    ]);

    Route::get('getdays/{id}/{fecha}', 'AgendarController@obtenerHorasAsignadasPDia');



});

