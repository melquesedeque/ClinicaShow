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
    Route::get('pacienteListar', 'cadastrarController@pacienteListar')->name('paciente-listar');
    Route::get('pacienteEditar', 'cadastrarController@pacienteEditar')->name('paciente-editar');
    Route::get('pacienteExcluir', 'cadastrarController@pacienteExcluir')->name('paciente-excluir');

    Route::get('cadastrar-funcionario', 'cadastrarController@funcionario')->name('cadastrar-funcionario');
    Route::get('funcionarioSalvar', 'cadastrarController@funcionarioSalvar')->name('funcionario-salva');
    Route::get('funcionarioListar', 'cadastrarController@funcionarioListar')->name('funcionario-listar');
    Route::get('funcionarioEditar', 'cadastrarController@funcionarioEditar')->name('funcionario-editar');
    Route::get('funcionarioExcluir', 'cadastrarController@funcionarioExcluir')->name('funcionario-excluir');

    /* Consulta */
    Route::get('cadastrar-consulta', 'consultaController@paciente')->name('consuta');
    Route::get('consultaSalvar', 'consultaController@consultaSalvar')->name('consultaSalvar');
    Route::get('consultaListar', 'consultaController@consultaListar')->name('consultaListar');
    Route::get('consultaEditar', 'consultaController@consultaEditar')->name('consultaEditar');
    Route::get('consultaExcluir', 'consultaController@consultaExcluir')->name('consultaExcluir');

    /* Conta */
    Route::get('conta', 'contaController@pacienteconta')->name('conta');

});


