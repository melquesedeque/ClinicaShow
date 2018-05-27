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

    public function pacienteSalvar(Request $request){ // Salvar no Banco Paciente
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
            'Plano'            => 'required',
            'Inscricao'        => 'required',
            'Validade'         => 'required|date',
            'Peso'             => 'required',
            'Altura'           => 'required',
        ]);

        Paciente::create($request->all()); // para salvar no banco

        return redirect()->route('paciente-listar');
    }

    public function pacienteListar(Request $request){ // Listar Paciente e filtro

        if ($request->filtro)
            $pacientes = Paciente::where('Nome', 'like', '%'.$request->filtro.'%')->get();
        else
            $pacientes = Paciente::all();

        $dados = [
            'menu'       => 6, 
            'pacientes'  => $pacientes
        ];

        return view('listarPaciente', $dados);
    }

    public function pacienteEditar($id){ // Editar Paciente
        $dados = [
            'menu'      => 6,
            'pacientes' => Paciente::find($id)
        ];

        return view('PacienteEditar', $dados);
    }

    public function pacienteExcluir($id){ // Excluir Paciente

        Paciente::destroy($id);
        return redirect()->route('listarPaciente');
    }

    public function pacienteVisualizar($id){ // Visualizar Paciente
        $dados = [
            'menu'      => 6,
            'pacientes' => Paciente::find($id)
        ];

        return view('paciente-visualizar', $dados);
    }

    public function pacienteAtualizar(Request $request, $id){ // Atualizar Paciente
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

        Paciente::where('id', $id)->update($request->all()); // para Update no banco

        return redirect()->route('paciente-listar');
    }

    # ---------------------------------------------------- Funcionario --------------------------------------------------------------------
    public function funcionario(){ // Rota da View Funcionario
        $dados['menu'] = 2;
        return view('cadastrar_funcionario', $dados);
    }

    public function funcionarioSalvar(Request $request){ // Salvar Funcionário
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

        return redirect()->route('funcionario-listar');
    }

    public function funcionarioListar(Request $request){ // Listar Funcionario e filtar

        if ($request->filtro)
            $Funcionarios = Funcionario::where('Nome', 'like', '%'.$request->filtro.'%')->get();
        else
            $Funcionarios = Funcionario::all();

        $dados = [
            'menu'          => 7, 
            'Funcionarios'  => $Funcionarios
        ];

        return view('listarFuncionario', $dados);
    }

    public function funcionarioEditar($id){ // Editar Funcionario
        $dados = [
            'menu'         => 7,
            'Funcionarios' => Funcionario::find($id)
        ];

        return view('FuncionarioEditar', $dados);
    }

    public function funcionarioExcluir($id){ // Excluir Funcionario

        Funcionario::destroy($id);
        return redirect()->route('conta');
    }
    
    public function funcionarioVisualizar($id){ // Visualizar Funcionario
        $dados = [
            'menu'         => 7,
            'Funcionarios' => Funcionario::find($id)
        ];

        return view('FuncionarioVisualizar', $dados);
    }

    public function funcionarioAtualizar(Request $request, $id){ // Atualizar Paciente
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
        
        Funcionario::where('id', $id)->update($request->all()); // para Atulizar o banco

        return redirect()->route('funcionario-listar');
    }
}
