<?php

use App\Http\Controllers\CatalogueController;
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

Route::get('/',[CatalogueController::class ,'index'])->name('welcome');

Route::get('/catalogoFilms',[CatalogueController::class,'catalogueFilm'])->name('catalogueFilms');
Route::get('/catalogo/dettagli/{id}',[CatalogueController::class,'show'])->name('show');
Route::get('/catalogoSerie',[CatalogueController::class,'catalogueSeries'])->name('catalogueSeries');
