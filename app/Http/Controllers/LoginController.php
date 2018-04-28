<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller{

    public function login(){
        return view('login');
    }
    public function logar(Request $req){

        if ($req->nome == 'show' && $req->senha == 'show') {
            session(['usuario' => 'Melque']);
            return redirect()->route('conta');
        }
        return redirect()->route('login')->with('erro', 'Senha ou Login inválido');
    }

    public function logout(Request $request) {
        $request->session()->flush();
        return redirect()->route('home'); 
    }
}
