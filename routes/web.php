<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('about', function () {
    return view('about');
});

Route::get('help', function () {
    return view('help');
});

Route::get('boletinprecios', function () {
    return view('boletines/boletinprecios');
});

Route::get('/cart', 'ReservaController@index');

//Route::put('user/{id}', 'ProductoContr@update');

Route::resource('productos', 'ProductoController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'ReservaController@showHome');

Route::get('/productoDetalle/{producto}','ProductoDetailController@index');


Route::get('/pedidosDisponibles','PedidosDisponiblesController@index');


//Ruta para crear la reserva con el primer producto añadido
Route::post('/reserva/{id}','ReservaController@store' );

Route::get('/datosContacto','ReservaController@goDatos');

//ruta para crear los datos de contacto en la reserva
Route::post('/datosContactoSave','ReservaController@saveDatos');

Route::get('/mispedidos','PedidosUserController@index');

Route::get('/pedidosusuario/{id}','PedidosUserController@show');

Route::get('/detallereserva/{id}','PedidosDisponiblesController@show');

Route::post('/detallereserva/{id}','PedidosDisponiblesController@update');




//rutas para el formulario de contacto
Route::get('contact-us', 'ContactUSController@contactUS');
Route::post('contact-us', ['as'=>'contactus.store','uses'=>'ContactUSController@contactSaveData']);
