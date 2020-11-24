<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnosController;

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

Route::get('/', function () {return view('home');})->name('home');
Route::get('/alumnos', [AlumnosController::class,'index'])->name('alumnos');
Route::get('/alumnos/{id}', [AlumnosController::class,'show'])->name('alumnos.show');
