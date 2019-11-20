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

Route::get('/cart', 'DetalleReservaController@index');

//Route::put('user/{id}', 'ProductoContr@update');

Route::resource('productos', 'ProductoController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'ReservaController@index');

Route::get('/productoDetalle/{producto}','ProductoDetailController@index');


Route::get('/pedidosDisponibles','PedidosDisponiblesController@index');
