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
            'matricula'    => 'required',
            'cpf'     => 'required',
            'rg'    => 'required',
            'telefone'      => 'required',
            'dataN'    => 'required',
            'email'     => 'required|email',
            'cep'    => 'required',
            'uf'      => 'required',
            'endereco'    => 'required',
            'bairro'     => 'required',
            'numero'    => 'required',
            'complemento'      => 'required',
            'parente'    => 'required',
            'parentent-tele'     => 'required',
            'parente-1'    => 'required',
            'parentent-tele-1'      => 'required',
            'peso'    => 'required',
            'altura'     => 'required|integer',
        ]);
        return view('cadastrar-p');
    }

    
}
