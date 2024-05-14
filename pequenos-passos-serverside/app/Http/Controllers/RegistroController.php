<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\Turma;
use App\Models\Aluno;
use App\Models\Criterio;
use App\Models\Registro;
use App\Models\Bimestre;

class RegistroController extends Controller
{
    public function index($ano,$id){
        $aluno=Aluno::find($id);
        $criterios=Criterio::all();
        $aluno_id=$id;
        return view('professor/registro',compact('aluno','criterios','aluno_id'));
    }

    public function store(Request $r,$id){
        $r->validate([
            'texto'=>'required'
        ]);
        $registro=new Registro;
        $aluno=Aluno::find($id);
        // $bimeste=Bimestre::find(1);
        $registro->texto=$r->texto;
        $registro->eixo=$r->eixo;
        $registro->data=Carbon::now()->toDateString();
        $registro->aluno_id=$aluno->id;
        $registro->bimestre_id=1;
        $registro->foto='';
        $registro->save();

        return redirect()->back()->with('sucesso','registro salvo');

        

    }
}
