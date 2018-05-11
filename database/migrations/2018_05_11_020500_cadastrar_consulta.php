<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CadastrarConsulta extends Migration{

    public function up(){
        Schema::create('Cadastratr_consulta', function (Blueprint $table) {
            $table-string('NOME_PACIENTE');
            $table-string('NOME_MEDICO');
            $table-string('QUEIXA');
            $table-integer('CARAC_DOR');
            $table-string('HABITOS');
            $table-string('ALIMENTACAO');
            $table-string('INSPERCAO');
            $table-string('PALPACAO');
            $table-string('PERCUSSAO');
            $table-string('AUSCULTA');
            $table-string('MATERIAL_UTILIZADO');
        });
    }

    public function down(){
        Schema::dropIfExists('Cadastratr_consulta');
    }
}
