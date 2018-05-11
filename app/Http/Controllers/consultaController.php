<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class consultaController extends Controller{
    
    public function paciente(){
        $dados['menu'] = 3; // Para acionar o Active do navbar
        return view('consulta', $dados);
    }
    public function consulSalvar(Request $request){
        $request->validate([
            'nome-paciente'      => 'required',
            'Nome-medico'        => 'required',
            'queixa'             => 'required',
            'inicio-durabilidade'=> 'required',
            'tipo-alimento'      => 'required',
            'inspersao'          => 'required',
            'palpacao'           => 'required',
            'percusao'           => 'required',
            'ausculta'           => 'required',
            'materias'           => 'required',
        ]);
        $button = true;
        return redirect()->route('conta');
    }

}
