<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    public function index(){
        return view('login');
    }
    public function auth(request $r){
        $r->validate([
            'password' => 'required|string|max:255',
            'email' => 'required|email',
        ]);
        $credenciais=$r->only('email','password');
        if(Auth::attempt($credenciais)){
            $r->session()->put('sucesso','usuario autenticado');
            return redirect()->route('home.index');
        }
        else{
            return redirect()->back()->with('erro','email ou senha incorretos');
        }
    }
    public function logout(Request $r){
        Auth::logout();
        $r->session()->invalidate();
        $r->session()->regenerateToken();
        return redirect()->route('login.index');
    }
}
