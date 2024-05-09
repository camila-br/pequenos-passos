<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Professor;
use App\Models\Turma;

class TurmaController extends Controller
{
    public function index(){
        $professores=Professor::all();
        return view('turma',compact('professores'));
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
}
