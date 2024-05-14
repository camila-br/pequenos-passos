<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Turma;
use App\Models\Bimestre;

class HomeController extends Controller
{
    
    public function index(){
        if(session()->has('diretor')){
            $user=Auth::user();
            return view('diretor/home',compact('user'));
        }else if (session()->has('professor')){
            $turmas=Turma::all();
            $bimestres=Bimestre::all();
            return view('professor/home',compact('turmas','bimestres'));
        }else{
            return redirect()->route('login.index');
        }
    }
}
