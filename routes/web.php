<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IdentitasController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::resource('identitas', IdentitasController::class);
Route::get('/identitas', [IdentitasController::class, 'index'])->name('identitas.index');
Route::get('/identitas/create', [IdentitasController::class, 'create'])->name('identitas.create');
Route::post('/identitas', [IdentitasController::class, 'store'])->name('identitas.store');
Route::get('/identitas/{id}', [IdentitasController::class, 'show'])->name('identitas.show');
Route::get('/identitas/{id}/edit', [IdentitasController::class, 'edit'])->name('identitas.edit');
Route::put('/identitas/{id}', [IdentitasController::class, 'update'])->name('identitas.update');
Route::delete('/identitas/{id}', [IdentitasController::class, 'destroy'])->name('identitas.destroy');
