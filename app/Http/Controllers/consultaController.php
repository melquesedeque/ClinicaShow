<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class consultaController extends Controller{
    
    public function paciente(){
        return view('consulta');
    }
    public function consulSalvar(Request $request){
        $request->validate([
            'nome-paciente'      => 'required',
            'Nome-medico'    => 'required',
            'queixa'     => 'required',
            'inicio-durabilidade'    => 'required',
            'tipo-alimento'    => 'required',
            'inspersao'    => 'required',
            'palpacao'    => 'required',
            'percusao'    => 'required',
            'ausculta'    => 'required',
            'materias'    => 'required',
        ]);
        return view('consulta');
    }

}
