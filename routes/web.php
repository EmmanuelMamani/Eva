<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\historiaController;
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

Route::get('/', function () { return view('inicio');})->name('inicio');
Route::get('/introduccion',[historiaController::class,'ver_intro'])->name('introdiccion');
Route::post('/registrar_historia',[historiaController::class,'registrar'])->name('Registrar_hisotoria');
