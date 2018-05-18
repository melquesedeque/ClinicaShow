<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function consultaListar(){
        # code...
    }

    public function consultaEditar(){
        # code...
    }

    public function consultaExcluir(){
        # code...
    }

}
