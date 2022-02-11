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

Auth::routes();

Route::get('/', function () {
    return view('index');
});

Route::get('/gracias', function () {
    return view('gracias');
});

Route::get('/inicioSesion', function () {
    return view('inicioSesion');
});

Route::get('panelContactos', function () {

    $contactos = DB::table('contactos')->get();

    return view('panelContactos', ['contactos' => $contactos]);
});

Route::post('inicioSesion', 'AdminsController@validar');

Route::resource('panelContactos','ContactosController');

