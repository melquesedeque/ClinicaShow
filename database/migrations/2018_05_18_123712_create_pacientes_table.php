<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacientesTable extends Migration{

    public function up(){

        Schema::create('pacientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Nome');
            $table->string('Cpf');
            $table->string('Rg');
            $table->string('Telefone-p');
            $table->string('Data');
            $table->string('Naturalidade');
            $table->string('sexo');
            $table->string('estado');
            $table->string('Email');
            $table->string('escola');
            $table->string('profi');
            $table->string('Cep');
            $table->string('Uf');
            $table->string('cidade');
            $table->string('Endereco');
            $table->string('Bairro');
            $table->integer('Numero');
            $table->string('Complemento');
            $table->string('Parente');
            $table->string('Parentent-tele');
            $table->string('Parente-1');
            $table->string('Parentent-tele-1');
            $table->string('convenio');
            $table->string('Plano');
            $table->string('Inscricao');
            $table->string('Validade');
            $table->string('cor');
            $table->string('Peso');
            $table->string('Altura');
            $table->string('rh');
            $table->string('tipo');
            $table->string('radioH');
            $table->longtext('Chere');
            $table->string('radioD');
            $table->longtext('CDiab');
            $table->string('radioHI');
            $table->longtext('Chiper');
            $table->string('radioT');
            $table->longtext('Cclini');
            $table->string('radioC');
            $table->longtext('Cdoen');
            $table->string('radioN');
            $table->longtext('Cneopla');
            $table->string('radioFA');
            $table->longtext('Cfarma');
            $table->string('radioDRO');
            $table->longtext('Cuso');
            $table->string('radioAL');
            $table->longtext('Calerg');
            $table->string('radioET');
            $table->longtext('Cetili');
            $table->string('radioVA');
            $table->longtext('Cvacina');
            $table->string('radioCI');
            $table->longtext('Ccirur');
            $table->string('radioTRA');
            $table->longtext('Cporta');
            $table->string('radioMAR');
            $table->longtext('Cmarca');
            $table->string('radioEP');
            $table->longtext('Ceplis');
            $table->timestamps();
        });
    }

    public function down(){
        
        Schema::dropIfExists('pacientes');
    }
}
