<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;
use App\Models\Funcionario;

class cadastrarController extends Controller{

    public function paciente(){
        $dados['menu'] = 1; // Para acionar o Active do navbar
        return view('cadastrar-p', $dados);
    }
    public function funcionario(){
        $dados['menu'] = 2;
        return view('cadastrar_funcionario', $dados);
    }
    public function pacienteSalvar(Request $request){
        $request->validate([
            'Nome'             => 'required',
            'Matricula'        => 'required',
            'Cpf'              => 'required',
            'Rg'               => 'required',
            'Telefone-p'       => 'required',
            'Data'             => 'required',
            'Email'            => 'required|email',
            'Cep'              => 'required',
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
            'Peso'             => 'required',
            'Altura'           => 'required',
        ]);

        Paciente::create($request->all()); // para salvar no banco

        return redirect()->route('conta');
    }

    public function pacienteListar(){
        # code...
    }

    public function pacienteEditar(){
        # code...
    }

    public function pacienteExcluir(){
        # code...
    }

    public function funcionarioSalvar(Request $request){
        $request->validate([
            'Nome'             => 'required',
            'Matricula'        => 'required',
            'Cpf'              => 'required',
            'Rg'               => 'required',
            'Telefone-p'       => 'required',
            'Data'             => 'required',
            'Email'            => 'required|email',
            'Cep'              => 'required',
            'Uf'               => 'required',
            'Endereco'         => 'required',
            'Bairro'           => 'required',
            'Numero'           => 'required|integer',
            'Complemento'      => 'required',
            'Parente'          => 'required',
            'Parentent-tele'   => 'required',
            'Parente-1'        => 'required',
            'Parentent-tele-1' => 'required',
            'Peso'             => 'required',
            'Altura'           => 'required',
        ]);
        
        Funcionario::create($request->all()); // para salvar no banco

        return redirect()->route('conta');
    }

    public function funcionarioListar(){
        # code...
    }

    public function funcionarioEditar(){
        # code...
    }

    public function funcionarioExcluir(){
        # code...
    }
    
}
