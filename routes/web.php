<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmsController;
use views\layouts\app;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',
[FilmsController::class,'index']
)->name('films.index');
Route::get('films.create',
[FilmsController::class,'films.create']);
Route::get('films.create',
[FilmsController::class,'films.create']);
Route::get('films.create',
[FilmsController::class,'films.create']);
Route::get('films.create',
[FilmsController::class,'films.create']);