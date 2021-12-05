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

Route::get('/',[\App\Http\Controllers\Txtcontrolador::class, 'mform']);

Route::get('/prueba',function() {
    return view('prueba');
});

Route::post('/recepcion', [\App\Http\Controllers\Txtcontrolador::class, 'mguardar']);

Route::get('/index2',function() {
    return view('index2');
});