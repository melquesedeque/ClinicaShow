<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class consulta extends Model
{
    protected $fillable = ['NomePaciente','NomeMedico','Queixa','InicioDurabilidade','HabitosVida','TipoAlimento','Inspersao','Palpacao','Percusao','Ausculta','Materias'];
}
