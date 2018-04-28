<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cadastrarController extends Controller{

    public function paciente(){
     return view('cadastrar-p');
    }
    public function funcionario(){
        return view('cadastrar_funcionario');
    }
    public function pacienteSalvar(Request $request){
        $request->validate([
            'nome'      => 'required',
            'Nome-medico'    => 'required',
            'queixa'     => 'required',
            'inicio-durabilidade'    => 'required',
        ]);

    }

    
}
