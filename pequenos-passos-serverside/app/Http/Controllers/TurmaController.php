<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Professor;
use App\Models\Turma;
use App\Models\Aluno;
use App\Models\Bimestre;

class TurmaController extends Controller
{
    public function index(){
        $professores=Professor::all();
        return view('diretor/turma',compact('professores'));
    }
    public function store(Request $r){
        $r->validate([
            'nome' => 'required|string|max:255',
            'professor_id'=>'required'
            
        ]);
        
        $turma=new Turma;
        $turma->nome=$r->nome;
        $turma->professor_id=$r->professor_id;
        $turma->save();
        return redirect()->back()->with('sucesso','turma cadastrado com sucesso!');
    }
   
    public function show($ano,$id){
        $bimestre=Bimestre::where('ano_letivo',$ano)->first();
        $turma=Turma::find($id);
        $professor=Professor::find($turma->professor_id);
        $alunos=Aluno::where('turma_id',$turma->id)->get();
        return view('professor/turma',compact('turma','professor','alunos','bimestre'));
    }
}
