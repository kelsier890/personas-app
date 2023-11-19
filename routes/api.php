<?php

use Illuminate\Http\Request;
use App\Models\Comuna;
use Illuminate\Support\Facades\BD;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/comunas' [ComunaController::class, 'store'])->name('comunas.store');
Route::get('/comunas', [ComunaController::class, 'index'])->name('comunas');
Route::delete('/comunas/{comuna}', [ComunaController::class, 'destroy'])->name('comunas.destroy');
Route::get('/comunas/{comuna}', [ComunaController::class, 'show'])-name('comunas.show');
Route::put('/comunas/{comuna}', [ComunaController::class, 'show'])->name('comunas.update');

Route::get('/municipios', [MunicipioController::class, 'index'])->name('municipios');
