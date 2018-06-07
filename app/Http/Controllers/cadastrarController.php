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
            'Foto'             => 'required',
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
            'Plano'            => 'required',
            'Inscricao'        => 'required',
            'Validade'         => 'required|date',
            'Peso'             => 'required',
            'Altura'           => 'required',
        ]);

        $dados = Paciente::create($request->all());

        if(isset($request->Foto)){
            $this->SalvarFoto($dados, $request); //Salva Foto do Paciente
        }
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
            'Telefonep'        => 'required',
            'Data'             => 'required',
            'Email'            => 'required|email',
            'Cep'              => 'required',
            'Uf'               => 'required',
            'Endereco'         => 'required',
            'Bairro'           => 'required',
            'Numero'           => 'required|integer',
            'Plano'            => 'required',
            'Inscricao'        => 'required',
            'Validade'         => 'required',
            'Peso'             => 'required',
            'Altura'           => 'required',
        ]);

        if(isset($request->Foto)){
             // Início do salvamento da imagem no "/storage/paciente/nomeDaImagem.png"
            $nomeDaImagem = $request->Foto->getClientOriginalName(); // Pega o nome da imagem que foi feita upload
            $caminho = 'storage/paciente/'.$nomeDaImagem; // Define o caminho que será criado com o nome da imagem
            $imagem = $request->Foto;  // Recebe a imagem na variável $imagem
            $imagem->storeAs('paciente',$nomeDaImagem,'public'); // Armazena a imagem na pasta paciente com o nome da imagem
            // Fim do salvamente da imagem
            $dados321 = Paciente::where('id', $id)->update([
                'Foto' => $caminho
                ]);
        }

        $dados123 = Paciente::where('id', $id)->update([
            'Nome'             => $request->Nome,
            'Cpf'              => $request->Cpf,
            'Rg'               => $request->Rg,
            'Telefone-p'       => $request->Telefonep,
            'Data'             => $request->Data,
            'Naturalidade'     => $request->Naturalidade,
            'Sexo'             => $request->sexo,
            'estado'           => $request->estado,
            'escola'           => $request->escola,
            'profi'            => $request->profi,
            'cidade'           => $request->cidade,
            'convenio'         => $request->convenio,
            'cor'              => $request->cor,
            'rh'               => $request->rh,
            'tipo'             => $request->tipo,
            'radioH'           => $request->radioH,
            'Chere'            => $request->Chere,
            'radioD'           => $request->radioD,
            'CDiab'            => $request->CDiab,
            'radioHI'          => $request->radioHI,
            'Chiper'           => $request->Chiper,
            'radioT'           => $request->radioT,
            'Cclini'           => $request->Cclini,
            'radioC'           => $request->radioC,
            'Cdoen'            => $request->Cdoen,
            'radioN'           => $request->radioN,
            'Cneopla'          => $request->Cneopla,
            'radioFA'          => $request->radioFA,
            'Cfarma'           => $request->Cfarma,
            'radioDRO'         => $request->radioDRO,
            'Cuso'             => $request->Cuso,
            'radioAL'          => $request->radioAL,
            'Calerg'           => $request->Calerg,
            'radioET'          => $request->radioET,
            'Cetili'           => $request->Cetili,
            'radioVA'          => $request->radioVA,
            'Cvacina'          => $request->Cvacina,
            'radioCI'          => $request->radioCI,
            'Ccirur'           => $request->Ccirur,
            'radioTRA'         => $request->radioTRA,
            'Cporta'           => $request->Cporta,
            'radioMAR'         => $request->radioMAR,
            'Cmarca'           => $request->Cmarca,
            'radioEP'          => $request->radioEP,
            'Ceplis'           => $request->Ceplis,
            'Email'            => $request->Email,
            'Cep'              => $request->Cep,
            'Uf'               => $request->Uf,
            'Endereco'         => $request->Endereco,
            'Bairro'           => $request->Bairro,
            'Numero'           => $request->Numero,
            'Complemento'      => $request->Complemento,
            'Parente'          => $request->Parente,
            'Parentent-tele'   => $request->Parententtele,
            'Parente-1'        => $request->Parente1,
            'Parentent-tele-1' => $request->Parententtele1,
            'Plano'            => $request->Plano,
            'Inscricao'        => $request->Inscricao,
            'Validade'         => $request->Validade,
            'Peso'             => $request->Peso,
            'Altura'           => $request->Altura,
            ]);

        //$dados = Paciente::where('id', $id)->update($request->except(['_token']),$request->all()); // para Update no banco
        //$this->SalvarFoto($dados, $request);

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

        // Início do salvamento da imagem no "/storage/paciente/nomeDaImagem.png"
        $nomeDaImagem = $request->Foto->getClientOriginalName(); // Pega o nome da imagem que foi feita upload
        $caminho = 'storage/paciente/'.$nomeDaImagem; // Define o caminho que será criado com o nome da imagem
        $imagem = $request->Foto;  // Recebe a imagem na variável $imagem
        $imagem->storeAs('paciente',$nomeDaImagem,'public'); // Armazena a imagem na pasta paciente com o nome da imagem
        // Fim do salvamente da imagem

        $FotoPaciente = $caminho;

        //Salvando o nome do arquivo da imagem no banco
        $dados->Foto = $FotoPaciente;
        $dados->save();
    }

    # ------------------------------------------------------------------ Funcionario --------------------------------------------------------------------
    public function funcionario(){ // Rota da View Funcionario
        $dados['menu'] = 2;
        return view('cadastrar_funcionario', $dados);
    }

    public function funcionarioSalvar(Request $request){ // Salvar Funcionário
        $request->validate([
            'Nome'             => 'required',
            'Cpf'              => 'required',
            'Rg'               => 'required',
            'Foto'             => 'required',
            'Telefone-p'       => 'required',
            'Data'             => 'required',
            'Email'            => 'required|email',
            'Cep'              => 'required',
            'Uf'               => 'required',
            'Endereco'         => 'required',
            'Bairro'           => 'required',
            'Numero'           => 'required|integer',
            'Peso'             => 'required',
            'Altura'           => 'required',
        ]);

        $dados = Funcionario::create($request->all()); // para salvar no banco

        $this->SalvarFotoFuncionario($dados, $request); //Salva Foto do Paciente

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
            'paginacao'     => $paginacao
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
            'Telefonep'        => 'required',
            'Data'             => 'required',
            'Email'            => 'required|email',
            'Cep'              => 'required',
            'Uf'               => 'required',
            'Endereco'         => 'required',
            'Bairro'           => 'required',
            'Numero'           => 'required|integer',
            'Peso'             => 'required',
            'Altura'           => 'required',
        ]);

        // Funcionario::where('id', $id)->update($request->all()); // para Atulizar o banco

       $dados123 = Funcionario::where('id', $id)->update([
           'Nome'             => $request->Nome,
           'Cpf'              => $request->Cpf,
           'Rg'               => $request->Rg,
           'Telefone-p'       => $request->Telefonep,
           'Data'             => $request->Data,
           'Naturalidade'     => $request->Naturalidade,
           'Sexo'             => $request->sexo,
           'estado'           => $request->estado,
           'escola'           => $request->escola,
           'profi'            => $request->profi,
           'cidade'           => $request->cidade,
           'cor'              => $request->cor,
           'rh'               => $request->rh,
           'tipo'             => $request->tipo,
           'radioH'           => $request->radioH,
           'Chere'            => $request->Chere,
           'radioD'           => $request->radioD,
           'CDiab'            => $request->CDiab,
           'radioHI'          => $request->radioHI,
           'Chiper'           => $request->Chiper,
           'radioT'           => $request->radioT,
           'Cclini'           => $request->Cclini,
           'radioC'           => $request->radioC,
           'Cdoen'            => $request->Cdoen,
           'radioN'           => $request->radioN,
           'Cneopla'          => $request->Cneopla,
           'radioFA'          => $request->radioFA,
           'Cfarma'           => $request->Cfarma,
           'radioDRO'         => $request->radioDRO,
           'Cuso'             => $request->Cuso,
           'radioAL'          => $request->radioAL,
           'Calerg'           => $request->Calerg,
           'radioET'          => $request->radioET,
           'Cetili'           => $request->Cetili,
           'radioVA'          => $request->radioVA,
           'Cvacina'          => $request->Cvacina,
           'radioCI'          => $request->radioCI,
           'Ccirur'           => $request->Ccirur,
           'radioTRA'         => $request->radioTRA,
           'Cporta'           => $request->Cporta,
           'radioMAR'         => $request->radioMAR,
           'Cmarca'           => $request->Cmarca,
           'radioEP'          => $request->radioEP,
           'Ceplis'           => $request->Ceplis,
           'Email'            => $request->Email,
           'Cep'              => $request->Cep,
           'Uf'               => $request->Uf,
           'Endereco'         => $request->Endereco,
           'Bairro'           => $request->Bairro,
           'Numero'           => $request->Numero,
           'Complemento'      => $request->Complemento,
           'Parente'          => $request->Parente,
           'Parentent-tele'   => $request->Parententtele,
           'Parente-1'        => $request->Parente1,
           'Parentent-tele-1' => $request->Parententtele1,
           'Peso'             => $request->Peso,
           'Altura'           => $request->Altura,
           'TIPO_PERMISAO'    => $request->TIPO_PERMISAO,
           'Crm'              => $request->Crm,
           ]);

        if(isset($request->Foto)){
        // Início do salvamento da imagem no "/storage/paciente/nomeDaImagem.png"
        $nomeDaImagem = $request->Foto->getClientOriginalName(); // Pega o nome da imagem que foi feita upload
        $caminho = 'storage/Funcionario/'.$nomeDaImagem; // Define o caminho que será criado com o nome da imagem
        $imagem = $request->Foto;  // Recebe a imagem na variável $imagem
        $imagem->storeAs('Funcionario',$nomeDaImagem,'public'); // Armazena a imagem na pasta paciente com o nome da imagem
        // Fim do salvamente da imagem

        $dados321 = Funcionario::where('id', $id)->update([
              'Foto' => $caminho
              ]);   
      }

        return redirect()->route('funcionario-listar');
    }

    public function SalvarFotoFuncionario(Funcionario $dados, Request $request): void{ // salvar Foto Funcionario

        // Início do salvamento da imagem no "/storage/paciente/nomeDaImagem.png"
        $nomeDaImagem = $request->Foto->getClientOriginalName(); // Pega o nome da imagem que foi feita upload
        $caminho = 'storage/Funcionario/'.$nomeDaImagem; // Define o caminho que será criado com o nome da imagem
        $imagem = $request->Foto;  // Recebe a imagem na variável $imagem
        $imagem->storeAs('Funcionario',$nomeDaImagem,'public'); // Armazena a imagem na pasta paciente com o nome da imagem
        // Fim do salvamente da imagem

        $FotoFuncionario = $caminho;

        //Salvando o nome do arquivo da imagem no bancos
        $dados->Foto = $FotoFuncionario;
        $dados->save();
    }
}
