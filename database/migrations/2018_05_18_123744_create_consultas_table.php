<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsultasTable extends Migration
{
 
    public function up()
    {
        Schema::create('consultas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('NomePaciente');
            $table->string('NomeMedico');
            $table->string('Data');
            $table->string('Queixa');
            $table->string('InicioDurabilidade');
            $table->string('HabitosVida');
            $table->string('TipoAlimento');
            $table->string('Inspersao');
            $table->string('Palpacao');
            $table->string('Percusao');
            $table->string('Ausculta');
            $table->string('Materias');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('consultas');
    }
}
