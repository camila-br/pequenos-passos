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
        $bimestre=Bimestre::where('ano_letivo',$ano)->first();
        return view('professor/registro',compact('aluno','criterios','aluno_id','bimestre'));
    }

    public function store(Request $r,$ano,$id){
        $r->validate([
            'texto'=>'required'
        ]);
        $registro=new Registro;
        $aluno=Aluno::find($id);
        $registro->texto=$r->texto;
        $registro->eixo=$r->eixo;
        $registro->data=Carbon::now()->toDateString();
        $registro->aluno_id=$aluno->id;
        $registro->foto='';
        $registro->save();

        return redirect()->route('aluno.show',['ano'=>$ano,'id'=>$aluno->id])->with('sucesso','registro salvo');

        

    }
}
