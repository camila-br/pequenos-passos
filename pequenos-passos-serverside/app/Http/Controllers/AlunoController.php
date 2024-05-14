<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;
use App\Models\Turma;
use App\Models\Bimestre;
use App\Models\Registro;

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
        $foto_aluno='';
        if($r->hasFile('imagem')){
            $caminho = $r->file('imagem')->store('upload','public');
            $foto_aluno=$caminho;
        }else{
            $foto_aluno='';
        }
        $aluno=new Aluno;
        $aluno->nome=$r->nome;
        $aluno->sobrenome=$r->sobrenome;
        $aluno->data_nascimento=$r->data_nascimento;
        $aluno->nome_responsavel=$r->nome_responsavel;
        $aluno->telefone=$r->telefone;
        $aluno->foto_aluno=$foto_aluno;
        $aluno->turma_id=$r->turma;
        $aluno->save();
        return redirect()->back()->with('sucesso','aluno cadastrado com sucesso!');
    }

    public function show($ano,$id){
        $aluno=Aluno::find($id);
        $registros=Registro::where('aluno_id',$id);
        $bimestre=Bimestre::where('ano_letivo',$ano)->first();
        // $data_formatada=$bimestre->primeiro_bimestre_inicio->format('d/m/Y');
        return view('professor/aluno',compact('aluno','bimestre','registros'));
    }
}
