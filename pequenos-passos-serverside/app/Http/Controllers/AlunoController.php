<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;
use App\Models\Turma;

class AlunoController extends Controller
{
    public function index(){
        $turmas=Turma::all();
        return view('diretor/aluno',compact('turmas'));
    }
    public function store(Request $r){
        $r->validate([
            'nome' => 'required|string|max:255',
            'sobrenome'=>'required',
            'data_nascimento' => 'required',
            'nome_responsavel'=>'required',
            'telefone'=>'required',
            'turma'=>'required'
            
        ]);
        $aluno=new Aluno;
        $aluno->nome=$r->nome;
        $aluno->sobrenome=$r->sobrenome;
        $aluno->data_nascimento=$r->data_nascimento;
        $aluno->nome_responsavel=$r->nome_responsavel;
        $aluno->telefone=$r->telefone;
        $aluno->turma_id=$r->turma;
        $aluno->save();
        return redirect()->back()->with('sucesso','aluno cadastrado com sucesso!');
    }
}
