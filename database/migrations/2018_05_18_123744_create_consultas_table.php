<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsultasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultas', function (Blueprint $table) {
            $table->string('nome-paciente');
            $table->string('nome-medico');
            $table->string('queixa');
            $table->integer('inicio-durabilidade');
            $table->string('habitos-vida');
            $table->string('tipo-alimento');
            $table->string('inspersao');
            $table->string('palpacao');
            $table->string('percusao');
            $table->string('ausculta');
            $table->string('materias');
        });
    }

    public function down()
    {
        Schema::dropIfExists('consultas');
    }
}
