<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bimestre;

class BimestreController extends Controller
{
    public function index(){
        return view('diretor/bimestre');
    }
    public function store(Request $r){
        $r->validate([
            'ano_letivo'=>'required',
            'primeiro_bimestre_inicio'=>'required',
            'primeiro_bimestre_fim'=>'required',
            'segundo_bimestre_inicio'=>'required',
            'segundo_bimestre_fim'=>'required',
            'terceiro_bimestre_inicio'=>'required',
            'terceiro_bimestre_fim'=>'required',
            'quarto_bimestre_inicio'=>'required',
            'quarto_bimestre_fim'=>'required'
        ]);

        $bimestre=new Bimestre;
        $bimestre->ano_letivo=$r->ano_letivo;

        $bimestre->primeiro_bimestre_inicio=$r->primeiro_bimestre_inicio;
        $bimestre->primeiro_bimestre_fim=$r->primeiro_bimestre_fim;

        $bimestre->segundo_bimestre_inicio=$r->segundo_bimestre_inicio;
        $bimestre->segundo_bimestre_fim=$r->segundo_bimestre_fim;

        $bimestre->terceiro_bimestre_inicio=$r->terceiro_bimestre_inicio;
        $bimestre->terceiro_bimestre_fim=$r->terceiro_bimestre_fim;

        $bimestre->quarto_bimestre_inicio=$r->quarto_bimestre_inicio;
        $bimestre->quarto_bimestre_fim=$r->quarto_bimestre_fim;

        $bimestre->save();
        return redirect()->back()->with('sucesso','periodo-letivo cadastrado com sucesso!');


    }
}
