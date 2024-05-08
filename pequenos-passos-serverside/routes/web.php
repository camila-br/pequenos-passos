<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CadastroController;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/',[LoginController::class,'index']);
Route::get('/cadastro',[CadastroController::class,'index'])->name('cadastro.index');
Route::post('/cadastro',[CadastroController::class,'store'])->name('cadastro.store');

