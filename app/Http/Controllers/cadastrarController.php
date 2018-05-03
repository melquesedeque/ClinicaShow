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
            'Nome'             => 'required',
            'Matricula'        => 'required',
            'Cpf'              => 'required|integer',
            'Rg'               => 'required|integer',
            'Telefone'         => 'required|integer',
            'Data'             => 'required|date',
            'Email'            => 'required|email',
            'Cep'              => 'required|integer',
            'Uf'               => 'required',
            'Endereco'         => 'required',
            'Bairro'           => 'required',
            'Numero'           => 'required|integer',
            'Complemento'      => 'required',
            'Parente'          => 'required',
            'Parentent-tele'   => 'required',
            'Parente-1'        => 'required',
            'Parentent-tele-1' => 'required',
            'Plano'            => 'required|integer',
            'Inscricao'        => 'required|integer',
            'Validade'         => 'required|date',
            'Peso'             => 'required|integer',
            'Altura'           => 'required|integer',
        ]);
        return redirect()->route('conta');
    }

    public function funcionarioSalvar(Request $request){
        $request->validate([
            'Nome'             => 'required',
            'Matricula'        => 'required',
            'Cpf'              => 'required|integer',
            'Rg'               => 'required|integer',
            'Telefone'         => 'required|integer',
            'Data'             => 'required|date',
            'Email'            => 'required|email',
            'Cep'              => 'required|integer',
            'Uf'               => 'required',
            'Endereco'         => 'required',
            'Bairro'           => 'required',
            'Numero'           => 'required|integer',
            'Complemento'      => 'required',
            'Parente'          => 'required',
            'Parentent-tele'   => 'required',
            'Parente-1'        => 'required',
            'Parentent-tele-1' => 'required',
            'Peso'             => 'required|integer',
            'Altura'           => 'required|integer',
        ]);
        return redirect()->route('conta');
    }
    
}
