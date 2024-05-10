<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Turma;

class HomeController extends Controller
{
    
    public function index(){
        if(session()->has('diretor')){
            return view('diretor/home');
        }else if (session()->has('professor')){
            $turmas=Turma::all();
            return view('professor/home',compact('turmas'));
        }else{
            return redirect()->route('login.index');
        }
    }
}
