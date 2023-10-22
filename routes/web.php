<?php

use App\Http\Controllers\ComunaController;
use App\Http\Controllers\MunicipioController;
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


Route::get('/', function () {
    return view('welcome');
});

Route::get('/comunas', [ComunaController::class, 'index'])->name('comuna.index');
Route::post('/comunas', [ComunaController::class, 'store'])->name('comuna.store');
route ::get('/comunas/create', [ComunaController::class, 'create']) ->name('comunas.create');
Route::delete('/comunas/{comuna}', [ComunaController::class,'destroy']) ->name('comunas.destroy');
Route::put('/comunas/{comuna}', [ComunaController::class,'update']) ->name('comunas.update');
Route::get('/comunas/{comuna}/edit', [ComunaController::class,'edit']) ->name('comunas.edit');

Route::get('/municipios', [MunicipioController::class, 'index'])->name('municipio.index');
Route::post('/municipios', [MunicipioController::class, 'store'])->name('municipio.store');
route ::get('/municipios/create', [MunicipioController::class, 'create']) ->name('municipios.create');
Route::delete('/municipios/{municipio}', [MunicipioController::class,'destroy']) ->name('municipios.destroy');
Route::put('/municipios/{municipio}', [MunicipioController::class,'update']) ->name('municipios.update');
Route::get('/municipios/{municipio}/edit', [MunicipioController::class,'edit']) ->name('municipios.edit');