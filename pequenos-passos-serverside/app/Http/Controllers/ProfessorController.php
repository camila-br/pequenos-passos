<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Professor;
use Illuminate\Support\Facades\Hash;

class ProfessorController extends Controller
{
    public function index(){
        return view('professor');
    }
    public function store(Request $r){
        $r->validate([
            'nome' => 'required|string|max:255',
            'sobrenome'=>'required',
            'email' => 'required|email|unique:users,email',
            'senha'=>'required'
            
        ]);
        $professor=new Professor;
        $professor->nome=$r->nome;
        $professor->sobrenome=$r->sobrenome;
        $professor->email=$r->email;
        $professor->senha=Hash::make($r->senha);
        $professor->save();
        return redirect()->back()->with('sucesso','professor cadastrado com sucesso!');
    }
}
