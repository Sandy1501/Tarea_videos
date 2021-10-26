<?php

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

Route::get('Agenda', [controlador1::class, 'index'])->name('datos.index');

Route::get('Agenda/create', [controlador1::class, 'create'])->name('datos.create');

Route::post('Agenda', [controlador1::class, 'store'])->name('datos.store');

Route::get('Agenda/{datos}', [controlador1::class, 'show'])->name('datos.show');

Route::get('Agenda/{datos}/edit', [controlador1::class, 'edit'])->name('datos.edit');

Route::put('Agenda/{datos}', [controlador1::class, 'update'])->name('datos.update');
