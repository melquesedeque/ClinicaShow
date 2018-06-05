<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;
use App\Models\Funcionario;

class cadastrarController extends Controller{

    public function paciente(){
        $dados['menu'] = 1; // Para acionar o Active do navbar
        return view('Cadastrar-p', $dados);
    }

    public function pacienteSalvar(Request $request){ // Salvar no Banco Paciente
        $request->validate([
            'Nome'             => 'required',
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

        // if(!empty($_FILES['Foto']['name'])) {
        //     $request->Foto->storeAs('public/fotos', 'foto_paciente.jpg');
        // }

        $dados = Paciente::create($request->all()); // para salvar no banco

        $this->SalvarFoto($dados, $request); //Salva Foto do Paciente

        return redirect()->route('paciente-listar');
    }

    public function pacienteListar(Request $request){ // Listar Paciente e filtro

        //Paginação e Filtro
       $exibirPorPagina = 5;
       $offset = ($exibirPorPagina * ($request->query('page', 1)-1));
       
       if ($request->filtro) {
           $paginacao = Paciente::where('Nome', 'like', '%'.$request->filtro.'%')->paginate($exibirPorPagina); //Exibe 5 elementos por página
           $pacientes = Paciente::where('Nome', 'like', '%'.$request->filtro.'%')->limit($exibirPorPagina) //Quantos valores devem ser exibido 
                       ->offset($offset) //Começa a exibir a apartir de qual valor
                       ->get();
       }  else {
           $paginacao = Paciente::paginate($exibirPorPagina); //Exibe 5 elementos por página
           $pacientes = Paciente::limit($exibirPorPagina) //Quantos valores devem ser exibido 
                           ->offset($offset) //Começa a exibir a apartir de qual valor::all();
                           ->get();
       }

        $dados = [
            'menu'       => 6, 
            'pacientes'  => $pacientes,
            'paginacao'  => $paginacao
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
        return redirect()->route('paciente-listar');
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
            'Validade'         => 'required',
            'Peso'             => 'required',
            'Altura'           => 'required',
        ]);

        Paciente::where('id', $id)->update($request->all()); // para Update no banco

        return redirect()->route('paciente-listar');
    }

    public function Ficha($id){ // Visualizar Paciente teste
        $dados = [
            'menu'  => 6,
            'Ficha' => Paciente::find($id)
        ];

        return view('FichaPaciente', $dados);
    }

    public function SalvarFoto(Paciente $dados, Request $request): void{

        //Salvando imagem da foto com um nome exclusivo
        $ext = $request->Foto->extension();
        $FotoPaciente = 'Paciente_'.$dados->id.'.'.$ext;
        $request->Foto->storeAs('public\fotos', $FotoPaciente);

        //Salvando o nome do arquivo da imagem no banco
        $dados->Foto = $FotoPaciente;
        $dados->save();
    }

    # ---------------------------------------------------- Funcionario --------------------------------------------------------------------
    public function funcionario(){ // Rota da View Funcionario
        $dados['menu'] = 2;
        return view('cadastrar_funcionario', $dados);
    }

    public function funcionarioSalvar(Request $request){ // Salvar Funcionário
        $request->validate([
            'Nome'             => 'required',
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

       //Paginação
       $exibirPorPagina = 5;
       $offset = ($exibirPorPagina * ($request->query('page', 1)-1));
       
       if ($request->filtro) {
           $paginacao = Funcionario::where('Nome', 'like', '%'.$request->filtro.'%')->paginate($exibirPorPagina); //Exibe 5 elementos por página
           $Funcionarios = Funcionario::where('Nome', 'like', '%'.$request->filtro.'%')->limit($exibirPorPagina) //Quantos valores devem ser exibido 
                       ->offset($offset) //Começa a exibir a apartir de qual valor
                       ->get();
       }  else {
           $paginacao = Funcionario::paginate($exibirPorPagina); //Exibe 5 elementos por página
           $Funcionarios = Funcionario::limit($exibirPorPagina) //Quantos valores devem ser exibido 
                           ->offset($offset) //Começa a exibir a apartir de qual valor::all();
                           ->get();
       }

        $dados = [
            'menu'          => 7, 
            'Funcionarios'  => $Funcionarios,
            'paginacao'  => $paginacao
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
        return redirect()->route('funcionario-listar');
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
