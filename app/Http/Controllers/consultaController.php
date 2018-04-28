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
            'matricula'    => 'required|interge',
            'cpf'     => 'required',
            'rg'    => 'required',
            'telefone'      => 'required'
        ]);

    }

}
