<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Turma;
use App\Models\Professor;
class ListTurma extends Controller
{
    public function index(){
        $turmas=Turma::all();
        $professor= new Professor;
        return view('diretor/turmas',compact('turmas','professor'));
    }
}
