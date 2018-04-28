<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contaController extends Controller
{
    public function pacienteconta(){
        return view('conta');
    }
}
