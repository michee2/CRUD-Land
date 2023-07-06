<?php

use Illuminate\Support\Facades\Route;
use App\Models\Land;
use App\Http\Controllers\LandController;

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

Route::view('/', 'index');

Route::redirect('/', '/lists');

Route::get('/lists', [LandController::class, 'index'])->name('list');

Route::get('/add', [LandController::class, 'create'])->name('add');

Route::post('/list', [LandController::class, 'store'])->name('users.store');

Route::get('/lands/{id}/edit', [LandController::class, 'edit'])->name('users.edit');

Route::post('/lands/{id}/update', [LandController::class, 'update'])->name('lands.update');

Route::get('/lands/{id}/destroy', [LandController::class, 'destroy'])->name('lands.destroy');
