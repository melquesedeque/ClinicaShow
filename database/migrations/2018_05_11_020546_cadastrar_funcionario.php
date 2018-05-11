<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CadastrarFuncionario extends Migration{

    public function up(){
        
        Schema::create('Cadastratr_funcionario', function (Blueprint $table) {
            $table-string('NOME');
            $table-increments('MATRICULA');
            $table-string('CPF');
            $table-integer('RG');
            $table-string('TELEFONE');
            $table-string('DATA_NASCIMENTO');
            $table-string('NATURALIDADE');
            $table-string('SEXO');
            $table-string('ESTADO_CIVIL');
            $table-string('E-MAIL');
            $table-string('ESCOLARIDADE');
            $table-string('PROFISSAO');
            $table-string('ESPECIALIDADE');
            $table-string('TIPO_PERMISAO');
            $table-string('CEP');
            $table-char('UF',2);
            $table-string('CIDADE');
            $table-string('ENDERECO');
            $table-string('BAIRRO');
            $table-integer('NUMERO');
            $table-string('COMPLEMENTO');
            $table-string('RESPONSAVEL');
            $table-string('TELEFONE');
            $table-string('RESPONSAVEL2');
            $table-string('TELEFONE2');
            $table-string('COR_PELE');
            $table-float('PESO',4,2);
            $table-float('ALTURA',4,2);
            $table-string('FATOR_RH');
            $table-string('SANGUINIO');
            $table-string('DOENCA_HEREDITARIA_OPS');
            $table-string('DH_COMENTE')->default('Campo Não Informado!');
            $table-string('DIABETES_OPS');
            $table-string('DIAB_COMENTE')->default('Campo Não Informado!');
            $table-string('HIPERTENSAO_OPS');
            $table-string('HIPER_COMENTE')->default('Campo Não Informado!');
            $table-string('TABAGISTA_OPS');
            $table-string('TABA_COMENTE')->default('Campo Não Informado!');
            $table-string('DOENCAS_CRONICAS_OPS');
            $table-string('CRONI_COMENTE')->default('Campo Não Informado!');
            $table-string('NEOPLASIA_OPS');
            $table-string('NEOP_COMENTE')->default('Campo Não Informado!');
            $table-string('FARMACO_HABITUAL_OPS');
            $table-string('FARMA_COMENTE')->default('Campo Não Informado!');
            $table-string('USO_DROGAS_OPS');
            $table-string('USO_COMENTE')->default('Campo Não Informado!');
            $table-string('ALERGIAS_OPS');
            $table-string('ALERG_COMENTE')->default('Campo Não Informado!');
            $table-string('ETILISTA_OPS');
            $table-string('ETILI_COMENTE')->default('Campo Não Informado!');
            $table-string('VACINA_OPS');
            $table-string('VACI_COMENTE')->default('Campo Não Informado!');
            $table-string('CIRURGIAS_OPS');
            $table-string('CIRU_COMENTE')->default('Campo Não Informado!');
            $table-string('SEXUALMENTE_TRANSMISSIVEIS_OPS');
            $table-string('TRANS_COMENTE')->default('Campo Não Informado!');
            $table-string('PORTADOR_MARCAPASSO_OPS');
            $table-string('PORTA_COMENTE')->default('Campo Não Informado!');
            $table-string('CONSULÇÃO_OPS');
            $table-string('CONS_COMENTE')->default('Campo Não Informado!');
        });
    }

    public function down(){
        Schema::dropIfExists('Cadastratr_funcionario');
    }
}
