<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InscriptionController;

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

Route::get('/', [InscriptionController::class, 'index'])->name('home');
Route::post('/add-inscription', [InscriptionController::class, 'save'])->name('store');
Route::get('/list-inscription', [InscriptionController::class, 'getList'])->name('list');
