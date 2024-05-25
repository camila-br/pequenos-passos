<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Professor;

class ListProfessor extends Controller
{
    public function index(){
        $professores=Professor::all();
        return view('diretor/professores',compact('professores'));
    }
}
