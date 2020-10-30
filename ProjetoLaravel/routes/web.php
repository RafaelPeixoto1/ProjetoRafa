<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/entrada', function () {
    return view('entrada');
});
Route::get('/playstation', function () {
    return view('playstation');
});

Route::get('/pc', function () {
    return view('pc');
});
Route::get('/xbox', function () {
    return view('xbox');
});
Route::get('/sobrenos', function () {
    return view('sobrenos');
});
Route::get('/contactos', function () {
    return view('contactos');
});
Route::get('/contactos','App\Http\Controllers\FormController@mostrarForm')
    ->name('mostrar.form');

Route::get('/ontactos','App\Http\Controllers\FormController@mostrarForm')
    ->name('mostrar.form');

Route::post('/contactos','App\Http\Controllers\FormController@processarForm')
    ->name('processar.form');






