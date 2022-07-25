<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\livewire;
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
Route::get('report', [PresidentController::class, 'download'])->name('download');
Route::get('reporte', [EquiposController::class, 'download'])->name('download');
Route::get('reportes', [JUgadoresController::class, 'download'])->name('download');
