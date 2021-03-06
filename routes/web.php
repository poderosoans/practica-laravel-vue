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
    return view('dashboard');
});


// Ruta al controlador excepto al método show, que no vamos a utilizar
Route::resource('tasks','TaskController', ['except' => 'show', 'created', 'edit']);