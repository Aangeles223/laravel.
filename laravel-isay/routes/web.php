<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;

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

Route::get('/', [userController::class, 'inicio'])->name('usuario.inicio');

Route::post('/addUser', [userController::class, 'store'])->name('usuario.store');

Route::get('/usuarios', [userController::class, 'index'])->name('usuario.index');