<?php

use App\Http\Controllers\ComunaController;
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