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
            'email' => 'required',
            'password' => 'required'
        ]);
        $credenciais=$r->only('email','password');
        if(Auth::attempt($credenciais)){
            $user=Auth::user();
            if ($user->role == 'diretor'):
                $r->session()->put('diretor','diretor autenticado');
            else:
                $r->session()->put('professor','professor autenticado');
            endif;
            
            return redirect()->route('home.index');
        }
        else{
            return redirect()->back()->with('erro','email ou senha incorretos');
        }
    }
    public function logout(Request $r){
        Auth::logout();
        // session()->forget('autenticado');
        session()->flush();
        return redirect()->route('login.index');
    }
}
