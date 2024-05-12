<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CadastroController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\TurmaController;
use App\Http\Controllers\BimestreController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\CriterioController;

Route::get('/',[LoginController::class,'index'])->name('login.index');
Route::post('/',[LoginController::class,'auth'])->name('login.auth');
Route::get('/logout',[LoginController::class,'logout'])->name('login.logout');

Route::get('/cadastro',[CadastroController::class,'index'])->name('cadastro.index');
Route::post('/cadastro',[CadastroController::class,'store'])->name('cadastro.store');
Route::get('/home',[HomeController::class,'index'])->name('home.index');

Route::get('/cadastrar-aluno',[AlunoController::class,'index'])->name('aluno.index');
Route::post('/cadastrar-aluno',[AlunoController::class,'store'])->name('aluno.store');
Route::get('/aluno/{id}',[AlunoController::class,'show'])->name('aluno.show');

Route::get('/cadastrar-turma',[TurmaController::class,'index'])->name('turma.index');
Route::post('/cadastrar-turma',[TurmaController::class,'store'])->name('turma.store');
Route::get('/turma/{id}',[TurmaController::class,'show'])->name('turma.show');

Route::get('/cadastrar-Professor',[ProfessorController::class,'index'])->name('professor.index');
Route::post('/cadastrar-Professor',[ProfessorController::class,'store'])->name('professor.store');

Route::get('/cadastrar-criterio-de-avaliacao',[CriterioController::class,'index'])->name('criterio.index');
Route::post('/cadastrar-criterio-de-avaliacao',[CriterioController::class,'store'])->name('criterio.store');

Route::get('/cadastrar-periodo-letivo',[BimestreController::class,'index'])->name('bimestre.index');
Route::post('/cadastrar-periodo-letivo',[BimestreController::class,'store'])->name('bimestre.store');

Route::get('/criar-registro/{id}',[RegistroController::class,'index'])->name('registro.index');
Route::post('/criar-registro/{id}',[RegistroController::class,'store'])->name('registro.store');
