<?php

/* Home */
Route::get('/', 'homeController@home');
Route::get('home', 'homeController@home')->name('home');

/* Login */
Route::get('login', 'LoginController@login')->name('login');
Route::post('entrar', 'LoginController@logar')->name('entrar');
Route::get('deslogar', 'LoginController@logout')->name('deslogar');


Route::group(['middleware' => ['login']], function() {

    /* Cadastrar */
    Route::get('cadastrar-paciente', 'cadastrarController@paciente')->name('cadastrar-paciente');
    Route::get('pacienteSalvar', 'cadastrarController@pacienteSalvar')->name('paciente-salvar');
    Route::get('cadastrar-funcionario', 'cadastrarController@funcionario')->name('cadastrar-funcionario');
    Route::get('funcionarioSalvar', 'cadastrarController@funcionarioSalvar')->name('funcionario-salva');

    /* Consulta */
    Route::get('consulta', 'consultaController@paciente')->name('consuta');
    Route::get('consultaSalvar', 'consultaController@consulSalvar')->name('consultaSalvar');

    /* Conta */
    Route::get('conta', 'contaController@pacienteconta')->name('conta');

});


