<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\consulta;
use App\Models\Paciente;
use App\Models\Funcionario;

class consultaController extends Controller{
    
    public function paciente(){ // Rota de consulta
        $dados = [
            'menu'          => 3,
            'pacientes'     => Paciente::all(),
            'funcionarios'  => Funcionario::all()->where('profi', '=', 'MÉDICO')
        ]; 
        return view('consulta', $dados);
    }
    
    public function consultaSalvar(Request $request){ // Cadastar no banco
        $request->validate([
            'NomePaciente'       => 'required',
            'NomeMedico'         => 'required',
            'Queixa'             => 'required',
            'Data'               => 'required',
            'InicioDurabilidade' => 'required',
            'HabitosVida'        => 'required',
            'TipoAlimento'       => 'required',
            'Inspersao'          => 'required',
            'Palpacao'           => 'required',
            'Percusao'           => 'required',
            'Ausculta'           => 'required',
            'Materias'           => 'required',
        ]);

        consulta::create($request->all()); 
        return redirect()->route('consultaListar');
    }

    public function consultaListar(Request $request){ // Listar Consulta e Filtro

            
        //Paginação
        $exibirPorPagina = 5;
        $offset = ($exibirPorPagina * ($request->query('page', 1)-1));
        
        if ($request->filtro) {
            $paginacao = consulta::where('NomePaciente', 'like', '%'.$request->filtro.'%')->orWhere('NomeMedico', 'like', '%'.$request->filtro.'%')->paginate($exibirPorPagina); //Exibe 5 elementos por página
            $consultas = consulta::where('NomePaciente', 'like', '%'.$request->filtro.'%')->orWhere('NomeMedico', 'like', '%'.$request->filtro.'%')->limit($exibirPorPagina) //Quantos valores devem ser exibido 
                        ->offset($offset) //Começa a exibir a apartir de qual valor
                        ->get();
        }  else {
            $paginacao = consulta::paginate($exibirPorPagina); //Exibe 5 elementos por página
            $consultas = consulta::limit($exibirPorPagina) //Quantos valores devem ser exibido 
                            ->offset($offset) //Começa a exibir a apartir de qual valor::all();
                            ->get();
        }
        
        $dados = [
            'menu'       => 4, 
            'consultas'  => $consultas,
            'paginacao'  => $paginacao
        ];

        return view('listar', $dados);
    }

    public function consultaEditar($id){ // Editar Consulta
        $dados = [
            'menu'          => 4,
            'consulta'      => consulta::find($id),
            'pacientes'     => Paciente::all(),
            'funcionarios'  => Funcionario::all()
        ];

        return view('consultaEditar', $dados);
    }

    public function consultaExcluir($id){ // Excluir Consulta

        consulta::destroy($id);
        return redirect()->route('consultaListar');
    }

    public function consultaVisualizar($id){ // Visualizar Consulta
        $dados = [
            'menu'     => 4,
            'consulta' => consulta::find($id)
        ];

        return view('consultaVisualiza', $dados);
    }

    public function consultaAtualizar(Request $request, $id){ // Atualizar Consulta
        $request->validate([
            'NomePaciente'       => 'required',
            'NomeMedico'         => 'required',
            'Queixa'             => 'required',
            'InicioDurabilidade' => 'required',
            'HabitosVida'        => 'required',
            'TipoAlimento'       => 'required',
            'Inspersao'          => 'required',
            'Palpacao'           => 'required',
            'Percusao'           => 'required',
            'Ausculta'           => 'required',
            'Materias'           => 'required',
        ]);

        consulta::where('id', $id)->update($request->all());
        return redirect()->route('consultaListar');
    }
  
}
