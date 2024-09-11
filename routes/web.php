<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

Route::get('/envivo', function () {
    return view('streaming');
});

//Crea la ruta post llamada 'contact' en el controlador ContactController@enviarCorreoContacto
Route::post('contact', [ContactController::class, 'enviarCorreoContacto'])->name('contact');
