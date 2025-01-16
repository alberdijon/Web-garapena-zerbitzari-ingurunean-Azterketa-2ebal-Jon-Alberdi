<?php

use App\Http\Controllers\AlokairuController;
use App\Http\Controllers\EtxeaController;
use App\Models\Etxea;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', 'App\Http\Controllers\EtxeaController@show');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// UPDATE
Route::get('/edit/{id}', [EtxeaController::class, 'edit']);

Route::put('/update/{id}', [EtxeaController::class, 'update']);

Route::get('/alokairuak', 'App\Http\Controllers\AlokairuController@show');

Route::delete('alokairuak/delete/{id}', [AlokairuController::class, 'delete']);

Route::get('alokairuak/edit/{id}', [AlokairuController::class, 'edit']);

Route::put('alokairuak/update/{id}', [AlokairuController::class, 'update']);