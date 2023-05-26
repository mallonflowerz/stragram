<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

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
    return view('principal');
});

Route::get('/crearCuenta', [RegisterController::class, "crearUser"])->name("crearCuenta");
Route::post('/crearCuenta', [RegisterController::class, "store"]);

Route::get('/muro', [PostController::class, "index"])->name("posts.index");
