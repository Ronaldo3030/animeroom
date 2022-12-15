<?php

use App\Http\Controllers\animesController;
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

Route::get('/', [animesController::class, 'index']);
Route::get('/animes/register', [animesController::class, 'create']);
Route::post('/animes/register', [animesController::class, 'store']);
Route::get('/animes/edit/{id}', [animesController::class, 'edit']);
Route::post('/animes/edit/{id}', [animesController::class, 'update']);
Route::get('/animes/delete/{id}', [animesController::class, 'destroy']);
Route::get('/api/anime/{id}', [animesController::class, 'getOneAnime']);
