<?php

use App\Http\Controllers\FilmController;
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

Route::get('/', [FilmController::class, 'homepage'])->name('welcome');

// Route::get('/', [SerieController::class, 'homepage'])->name('welcome');

Route::get('/lista-film', [FilmController::class, 'elencofilm'])->name('film');

Route::get('/lista-serie', [FilmController::class, 'elencoserie'])->name('serie');

Route::get('/dettaglio-film/{id}', [FilmController::class, 'catalogofilm'])->name('cataloguefilm');

Route::get('/dettaglio-serie/{id}', [FilmController::class, 'catalogoserie'])->name('catalogueserie');