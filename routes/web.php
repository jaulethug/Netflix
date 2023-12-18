<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsagerController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\ActeurController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::group(['middleware' => ['role:admin']], function () {
    Route::get('/admin', function () {
        
    });
});

Route::resource('usagers', UsagerController::class);

Route::resource('films', FilmController::class);

Route::resource('acteurs', ActeurController::class);

Route::post('/films/{film}/add-actor', [FilmController::class, 'addActor'])->name('films.addActor');
Route::delete('/films/{film}/remove-actor/{acteur}', [FilmController::class, 'removeActor'])->name('films.removeActor');


require __DIR__.'/auth.php';
