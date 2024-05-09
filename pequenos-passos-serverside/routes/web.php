<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CadastroController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\TurmaController;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/',[LoginController::class,'index'])->name('login.index');
Route::post('/',[LoginController::class,'auth'])->name('login.auth');
Route::post('/logout',[LoginController::class,'logout'])->name('login.logout');

Route::get('/cadastro',[CadastroController::class,'index'])->name('cadastro.index');
Route::post('/cadastro',[CadastroController::class,'store'])->name('cadastro.store');
Route::get('/home',[HomeController::class,'index'])->name('home.index');

Route::get('/cadastrar-aluno',[AlunoController::class,'index'])->name('aluno.index');
Route::post('/cadastrar-aluno',[AlunoController::class,'store'])->name('aluno.store');

Route::get('/cadastrar-turma',[TurmaController::class,'index'])->name('turma.index');
Route::post('/cadastrar-turma',[TurmaController::class,'store'])->name('turma.store');

Route::get('/cadastrar-Professor',[ProfessorController::class,'index'])->name('professor.index');
Route::post('/cadastrar-Professor',[ProfessorController::class,'store'])->name('professor.store');
