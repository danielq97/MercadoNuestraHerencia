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

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', function () {
    return view('login');
});

Route::get('about', function () {
    return view('about');
});

Route::get('help', function () {
    return view('help');
});

Route::get('signup', function () {
    return view('signup');
});

//Route::get('products', function () {
//    return view('products');
//});

//Route::put('user/{id}', 'ProductoContr@update');

Route::resource('productos', 'ProductoController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
