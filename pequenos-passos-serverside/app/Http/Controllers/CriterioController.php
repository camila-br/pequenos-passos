<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Criterio;

class CriterioController extends Controller
{
    public function index(){
        $criterios=Criterio::all();
        return view('diretor/criterio',compact('criterios'));
    }

    public function store(Request $r){
        $r->validate([
            'nome'=>'required'
        ]);
        $criterio=new Criterio;
        $criterio->nome=$r->nome;
        $criterio->save();
        return redirect()->back()->with('sucesso','criterio de avaliação cadastrado com sucesso!');
    }
}
