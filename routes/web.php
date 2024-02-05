<?php

use App\Http\Controllers\CifraDeCesarController;

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

Route::get('/', [CifraDeCesarController::class, 'index']);
Route::post('/encrypt', [CifraDeCesarController::class, 'encrypt'])->name('encrypt');
Route::post('/decrypt', [CifraDeCesarController::class, 'decrypt'])->name('decrypt');