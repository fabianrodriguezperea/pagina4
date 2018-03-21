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
    return view('auth.login');
});
Route::get('/holamundo', function () {
    return 'hola mundo';
});
Route::get('/libros', 'LibrosController@index')->name('index');

Route::get('/usa', 'UsuariosController@usa');

Route::post('/Libros/guardar','LibrosController@store')->name('guardarlibro');
Route::post('/libros/listar','LibrosController@listar')->name('listarlibro');
Route::get('/libros/eliminar/{id}','LibrosController@destroy')->name('borrarcliente');
Route::post('/libros/editar{id}','LibrosController@show')->name('editarlibro');
Route::post('/libros/actualizarlibro{id}','LibrosController@update')->name('actualizarlibro');

Route::get('alert/AlertType','sweetalertController@alert')->name('alert');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
