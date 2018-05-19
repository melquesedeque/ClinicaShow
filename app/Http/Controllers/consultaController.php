<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\consulta;

class consultaController extends Controller{
    
    public function paciente(){
        $dados['menu'] = 3; // Para acionar o Active do navbar
        return view('consulta', $dados);
    }
    public function consultaSalvar(Request $request){
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

        consulta::create($request->all());

        return redirect()->route('conta');
    }

    public function consultaListar(){ // Listar
        $dados = [
            'menu'      => 4, 
            'consultas'  => consulta::all()
        ];

        return view('listar', $dados);
    }

    public function consultaEditar($id){ // Editar
        $dados = [
            'menu'      => 4,
            'consulta' => consulta::find($id)
        ];

        return view('consultaEditar', $dados);

    }

    public function consultaExcluir(){ // Excluir
        # code...
    }

    public function consultaVisualizar($id){ // Visualizar
        $dados = [
            'menu'      => 4,
            'consulta' => consulta::find($id)
        ];

        return view('consultaVisualiza', $dados);
    }

    public function consultaAtualizar(Request $request, $id){ // Atualizar
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
        return redirect()->route('conta');
    }

}
