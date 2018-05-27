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
            $table->text('Queixa');
            $table->text('InicioDurabilidade');
            $table->text('HabitosVida');
            $table->text('TipoAlimento');
            $table->text('Inspersao');
            $table->text('Palpacao');
            $table->text('Percusao');
            $table->text('Ausculta');
            $table->text('Materias');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('consultas');
    }
}
