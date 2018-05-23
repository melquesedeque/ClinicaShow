<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacientesTable extends Migration{

    public function up(){

        Schema::create('pacientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Nome');
            $table->integer('Matricula');
            $table->string('Cpf');
            $table->integer('Rg');
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
            $table->integer('Inscricao');
            $table->string('Validade');
            $table->string('cor');
            $table->string('Peso');
            $table->string('Altura');
            $table->string('rh');
            $table->string('tipo');
            $table->string('radioH');
            $table->string('Chere')->default('Campo Não Informado!');
            $table->string('radioD');
            $table->string('CDiab')->default('Campo Não Informado!');
            $table->string('radioHI');
            $table->string('Chiper')->default('Campo Não Informado!');
            $table->string('radioT');
            $table->string('Cclini')->default('Campo Não Informado!');
            $table->string('radioC');
            $table->string('Cdoen')->default('Campo Não Informado!');
            $table->string('radioN');
            $table->string('Cneopla')->default('Campo Não Informado!');
            $table->string('radioFA');
            $table->string('Cfarma')->default('Campo Não Informado!');
            $table->string('radioDRO');
            $table->string('Cuso')->default('Campo Não Informado!');
            $table->string('radioAL');
            $table->string('Calerg')->default('Campo Não Informado!');
            $table->string('radioET');
            $table->string('Cetili')->default('Campo Não Informado!');
            $table->string('radioVA');
            $table->string('Cvacina')->default('Campo Não Informado!');
            $table->string('radioCI');
            $table->string('Ccirur')->default('Campo Não Informado!');
            $table->string('radioTRA');
            $table->string('Cporta')->default('Campo Não Informado!');
            $table->string('radioMAR');
            $table->string('Cmarca')->default('Campo Não Informado!');
            $table->string('radioEP');
            $table->string('Ceplis')->default('Campo Não Informado!');
            $table->timestamps();
        });
    }

    public function down(){
        
        Schema::dropIfExists('pacientes');
    }
}
