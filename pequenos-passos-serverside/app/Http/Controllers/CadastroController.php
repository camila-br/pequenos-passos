<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class CadastroController extends Controller
{
    public function index(){
        return view('cadastro');
    }
    public function store(Request $r){
        $r->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
        ]);
        $user= new User;
        $user->name=$r->name;
        $user->email=$r->email;
        $user->password=Hash::make($r->password);
        $user->save();
        return redirect()->back()->with('sucesso','usuario cadastrado com sucesso!');
    }
}
