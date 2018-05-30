@extends('NavBar')
@section('body')

  <div class="container">
      <!-- Cadastrar Paciente -->
      <h2>Cadastrar Paciente</h2>
      <ul class="nav nav-tabs">
          <!-- Abbas do cadastro -->
          <li class="active"><a data-toggle="tab" href="#DadosPessoais">Dados Pessoais</a></li>
          <li><a data-toggle="tab" href="#Endereco">Endereço</a></li>
          <li><a data-toggle="tab" href="#Contato">Familiares para contato</a></li>
          <li><a data-toggle="tab" href="#financeiro">Finânceiro</a></li>
          <li><a data-toggle="tab" href="#clinicos1">Dados Clínicos 1</a></li>
          <li><a data-toggle="tab" href="#clinicos2">Clínicos 2</a></li>
          <li><a data-toggle="tab" href="#clinicos3">Clínicos 3</a></li>
          <li><a data-toggle="tab" href="#clinicos4">Clínicos 4</a></li>
      </ul>

      <div class="tab-content">

        <div id="DadosPessoais" class="tab-pane fade in active">
            <!-- Dados do pacientes-->

            <form action="{{route('paciente-listar')}}" style="border:#ccc">

                <div class="container">

                    <h3>Dados Paciente</h3> 
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                      <label for=""><b>MATRICULA</b></label>
                      <input type="text" placeholder="Entre com sua Matricula" name="id" disabled value="{{old('id',$pacientes['id'])}}">

                      <label for=""><b>NOME</b></label>
                      <input type="text" placeholder="Enter com seu nome" name="Nome" disabled value="{{old('Nome',$pacientes['Nome'])}}">

                      <label for=""><b>CPF</b></label>
                      <input type="text" placeholder="XXX.XXX.XXX-XX" name="Cpf" disabled value="{{old('Cpf',$pacientes['Cpf'])}}">

                      <label for=""><b>RG</b></label>
                      <input type="text" placeholder="Entre com seu RG" name="Rg" disabled value="{{old('Rg',$pacientes['Rg'])}}">

                      <label for=""><b>TELEFONE</b></label>
                      <input type="text" placeholder="(XX) X XXXX-XXXX" name="Telefone-p" disabled value="{{old('Telefone-p',$pacientes['Telefone-p'])}}">

                      <label for="Data">Data</label>
                        <div class="input-group date">
                            <input type="date" class="form-control" id="Data" name="Data" disabled value="{{old('Data',$pacientes['Data'])}}">
                            <div class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </div>
                        </div>

                      <label for=""><b>NATURALIDADE</b></label>
                      <select class="form-control" id="gender1" name="Naturalidade" disabled value="{{old('Naturalidade',$pacientes['Naturalidade'])}}">
                        <option @if(old('Naturalidade',$pacientes['Naturalidade']) == "BRASIL") selected @endif disabled value="BRASIL">BRASIL</option>
                        <option @if(old('Naturalidade',$pacientes['Naturalidade']) == "ARGENTINA") selected @endif disabled value="ARGENTINA">ARGENTINA</option>
                        <option @if(old('Naturalidade',$pacientes['Naturalidade']) == "CHILE") selected @endif disabled value="CHILE">CHILE</option>    
                        <option @if(old('Naturalidade',$pacientes['Naturalidade']) == "COLÔMBIA") selected @endif disabled value="COLÔMBIA">COLÔMBIA</option>
                        <option @if(old('Naturalidade',$pacientes['Naturalidade']) == "ESTADOS") selected @endif disabled value="ESTADOS">ESTADOS UNIDOS</option>
                        <option @if(old('Naturalidade',$pacientes['Naturalidade']) == "CANADA") selected @endif disabled value="CANADA">CANADÁ</option>
                        <option @if(old('Naturalidade',$pacientes['Naturalidade']) == "MEXICO") selected @endif disabled value="MEXICO">MÉXICO</option>
                        <option @if(old('Naturalidade',$pacientes['Naturalidade']) == "PORTUGAL") selected @endif disabled value="PORTUGAL">PORTUGAL</option>
                        <option @if(old('Naturalidade',$pacientes['Naturalidade']) == "FRANÇA") selected @endif disabled value="FRANÇA">FRANÇA</option>
                        <option @if(old('Naturalidade',$pacientes['Naturalidade']) == "FRANÇA") selected @endif disabled value="FRANÇA">ITáLIA</option>
                        <option @if(old('Naturalidade',$pacientes['Naturalidade']) == "FRANÇA") selected @endif disabled value="FRANÇA">RÚSSIA</option>
                        <option @if(old('Naturalidade',$pacientes['Naturalidade']) == "JAPÃO") selected @endif disabled value="JAPÃO">JAPÃO</option>
                        <option @if(old('Naturalidade',$pacientes['Naturalidade']) == "CHINA") selected @endif disabled value="CHINA">CHINA</option>
                      </select>

                      <label for=""><b>SEXO</b></label>
                      <select class="form-control" id="gender1" name="sexo" disabled value="{{old('sexo',$pacientes['sexo'])}}">
                        <option @if(old('sexo',$pacientes['sexo']) == "MASC") selected @endif disabled value="MASC">MASCULINO</option>
                        <option @if(old('sexo',$pacientes['sexo']) == "FEMIN") selected @endif disabled value="FEMIN">FEMININO</option>
                        <option @if(old('sexo',$pacientes['sexo']) == "OUTRO") selected @endif disabled value="OUTRO">OUTRO</option>
                      </select>
                      </br>

                      <label for=""><b>ESTADO CIVIL</b></label>
                      <select class="form-control" id="gender1" name="estado" disabled value="{{old('estado',$pacientes['estado'])}}">
                        <option @if(old('estado',$pacientes['estado']) == "casado") selected @endif disabled value="casado">CASADO</option>
                        <option @if(old('estado',$pacientes['estado']) == "solteiro") selected @endif disabled value="solteiro">SOLTEIRO</option>
                        <option @if(old('estado',$pacientes['estado']) == "viuvo") selected @endif disabled value="viuvo">VIUVO</option>
                        <option @if(old('estado',$pacientes['estado']) == "divorciado") selected @endif disabled value="divorciado">DIVORCIADO</option>
                      </select>
                      </br>

                      <label for=""><b>E-MAIL</b></label>
                      <input type="text" placeholder="Entre com seu Email@email.com" name="Email" disabled value="{{old('Email',$pacientes['Email'])}}">

                      <label for=""><b>ESCOLARIDADE</b></label>
                      <select class="form-control" id="gender1" name="escola" disabled value="{{old('escola',$pacientes['escola'])}}">
                        <option @if(old('escola',$pacientes['escola']) == "FunINCOMPLETO") selected @endif disabled value="FunINCOMPLETO">FUNDAMENTAL-INCOMPLETO</option>
                        <option @if(old('escola',$pacientes['escola']) == "FunCOMPLETO") selected @endif disabled value="FunCOMPLETO">FUNDAMENTAL-COMPLETO</option>
                        <option @if(old('escola',$pacientes['escola']) == "SugSEGUNDO") selected @endif disabled value="SugSEGUNDO">SEGUNDO GRAU-INCOMPLETO</option>
                        <option @if(old('escola',$pacientes['escola']) == "SugCOMPLETO") selected @endif disabled value="SugCOMPLETO">SEGUNDO GRAU-COMPLETO</option>
                        <option @if(old('escola',$pacientes['escola']) == "SupINCOMPLETO") selected @endif disabled value="SupINCOMPLETO">SUPERIOR-INCOMPLETO</option>
                        <option @if(old('escola',$pacientes['escola']) == "SupCOMPLETO") selected @endif disabled value="SupCOMPLETO">SUPERIOR-COMPLETO</option>
                        <option @if(old('escola',$pacientes['escola']) == "MesINCOMPLETO") selected @endif disabled value="MesINCOMPLETO">MESTRADO-INCOMPLETO</option>
                        <option @if(old('escola',$pacientes['escola']) == "MesCOMPLETO") selected @endif disabled value="MesCOMPLETO">MESTRADO-COMPLETO</option>
                      </select>
                      </br>

                      <label for=""><b>PROFISSÃO</b></label>
                      <select class="form-control" id="gender1" name="profi" disabled value="{{old('profi',$pacientes['profi'])}}">
                        <option @if(old('profi',$pacientes['profi']) == "MÉDICO") selected @endif disabled value="MÉDICO">MÉDICO</option>
                        <option @if(old('profi',$pacientes['profi']) == "ENFERMEIRO") selected @endif disabled value="ENFERMEIRO">ENFERMEIRO</option>
                        <option @if(old('profi',$pacientes['profi']) == "ARQUITETO") selected @endif disabled value="ARQUITETO">ARQUITETO</option>
                        <option @if(old('profi',$pacientes['profi']) == "ENGENHEIRO") selected @endif disabled value="ENGENHEIRO">ENGENHEIRO</option>
                        <option @if(old('profi',$pacientes['profi']) == "FISIOTERAPEUTA") selected @endif disabled value="FISIOTERAPEUTA">FISIOTERAPEUTA</option>
                        <option @if(old('profi',$pacientes['profi']) == "ANALISTA") selected @endif disabled value="ANALISTA">ANALISTA DE SISTEMAAS</option>
                        <option @if(old('profi',$pacientes['profi']) == "PROGRAMADOR") selected @endif disabled value="PROGRAMADOR">PROGRAMADOR</option>
                        <option @if(old('profi',$pacientes['profi']) == "DENTISTA") selected @endif disabled value="DENTISTA">DENTISTA</option>
                        <option @if(old('profi',$pacientes['profi']) == "PEDREIRO") selected @endif disabled value="PEDREIRO">PEDREIRO</option>
                        <option @if(old('profi',$pacientes['profi']) == "SEGURANÇA") selected @endif disabled value="SEGURANÇA">SEGURANÇA</option>
                        <option @if(old('profi',$pacientes['profi']) == "ADIMINISTRAÇÃO") selected @endif disabled value="ADIMINISTRAÇÃO">ADIMINISTRAÇÃO</option>
                        <option @if(old('profi',$pacientes['profi']) == "FARMACIA") selected @endif disabled value="FARMACIA">FARMACIA</option>
                        <option @if(old('profi',$pacientes['profi']) == "FÍSICA") selected @endif disabled value="FÍSICA">EDUÇÃO FÍSICA</option>
                      </select>
                      </br>
                    
                </div>
        </div>

        <div id="Endereco" class="tab-pane fade">
            <!-- 2 Aba (aba dos enderço)-->
            <h3>Endereço</h3>
            <label for="CEP"><b>CEP</b></label>
            <input type="text" placeholder="Enter com seu CEP" name="Cep" disabled value="{{old('Cep',$pacientes['Cep'])}}">

            <label for="uf"><b>UF</b></label>
            <input type="text" placeholder="Entre com seu UF" name="Uf" disabled value="{{old('Uf',$pacientes['Uf'])}}">

            <label for="cidade"><b>CIDADE</b></label>
            <select class="form-control" id="gender1" disabled name="cidade">
              <option @if(old('cidade',$pacientes['cidade']) == "MACEIÓ") selected @endif disabled value="MACEIÓ">MACEIÓ</option>
              <option @if(old('cidade',$pacientes['cidade']) == "CORURIPE") selected @endif disabled value="CORURIPE">CORURIPE</option>
              <option @if(old('cidade',$pacientes['cidade']) == "RIO") selected @endif disabled value="RIO">RIO DE JANEIRO</option>
              <option @if(old('cidade',$pacientes['cidade']) == "PAULO") selected @endif disabled value="PAULO">SÃO PAULO</option>
              <option @if(old('cidade',$pacientes['cidade']) == "PARANA") selected @endif disabled value="PARANA">PARANA</option>
              <option @if(old('cidade',$pacientes['cidade']) == "SANTA") selected @endif disabled value="SANTA">SANTA CATARINA</option>
              <option @if(old('cidade',$pacientes['cidade']) == "RECIFE") selected @endif disabled value="RECIFE">RECIFE</option>
              <option @if(old('cidade',$pacientes['cidade']) == "BAHIA") selected @endif disabled value="BAHIA">BAHIA</option>
              <option @if(old('cidade',$pacientes['cidade']) == "SERGIPE") selected @endif disabled value="SERGIPE">SERGIPE</option>
              <option @if(old('cidade',$pacientes['cidade']) == "PERNABUCO") selected @endif disabled value="PERNABUCO">PERNABUCO</option>
              <option @if(old('cidade',$pacientes['cidade']) == "GOIAS") selected @endif disabled value="GOIAS">GOIAS</option>
              <option @if(old('cidade',$pacientes['cidade']) == "AMAZONAS") selected @endif disabled value="AMAZONAS">AMAZONAS</option>
              <option @if(old('cidade',$pacientes['cidade']) == "FLORIPA") selected @endif disabled value="FLORIPA">FLORIPA</option>
            </select>
            </br>

            <label for="endereco"><b>ENDEREÇO</b></label>
            <input type="text" placeholder="Entre com seu Endereço" name="Endereco" disabled value="{{old('Endereco',$pacientes['Endereco'])}}">

            <label for="bairro"><b>BAIRRO</b></label>
            <input type="text" placeholder="Entre com seu Bairro" name="Bairro" disabled value="{{old('Bairro',$pacientes['Bairro'])}}">

            <label for="numero"><b>NÚMERO</b></label>
            <input type="text" placeholder="Entre com seu Número" name="Numero" disabled value="{{old('Numero',$pacientes['Numero'])}}">

            <label for="complemento"><b>COMPLEMENTO</b></label>
            <input type="text" placeholder="Entre com seu Complemento" name="Complemento" disabled value="{{old('Complemento',$pacientes['Complemento'])}}">
        </div>

        <div id="Contato" class="tab-pane fade">
            <!-- 3 Aba (aba dos contatos)-->
            <h3>Contatos</h3>
            <label for="parente"><b>RESPONSAVEL/PARENTE 1 NOME</b></label>
            <input type="text" placeholder="Entre com seu nome" name="Parente" disabled value="{{old('Parente',$pacientes['Parente'])}}">

            <label for="parentent-tele"><b>RESPONSAVEL/PARENTE  1 TELEFONE</b></label>
            <input type="text" placeholder="Entre com seu Telefone" name="Parentent-tele" disabled value="{{old('Parentent-tele',$pacientes['Parentent-tele'])}}">

            <label for="parente-1"><b>RESPONSAVEL/PARENTE 2 NOME</b></label>
            <input type="text" placeholder="Entre com seu nome" name="Parente-1" disabled value="{{old('Parente-1',$pacientes['Parente-1'])}}">

            <label for="parentent-tele-1"><b>RESPONSAVEL/PARENTE 2 TELEFONE</b></label>
            <input type="text" placeholder="Entre com seu Telefone" name="Parentent-tele-1" disabled value="{{old('Parentent-tele-1',$pacientes['Parentent-tele-1'])}}">
        </div>

        <div id="financeiro" class="tab-pane fade">
            <!-- 4 Aba (aba dos financeiro)-->
            <h3>Finânceiro</h3>

            <label for="convenio"><b>CONVÊNIO</b></label>
            <select class="form-control" id="gender1" name="convenio" disabled value="{{old('convenio',$pacientes['convenio'])}}">
                <option @if(old('convenio',$pacientes['convenio']) == "UNIMED") selected @endif disabled value="UNIMED">UNIMED</option>
                <option @if(old('convenio',$pacientes['convenio']) == "HAPVIDA") selected @endif disabled value="HAPVIDA">HAPVIDA</option>
                <option @if(old('convenio',$pacientes['convenio']) == "SANDANDER") selected @endif disabled value="SANDANDER">SANDANDER</option>
                <option @if(old('convenio',$pacientes['convenio']) == "AMIL") selected @endif disabled value="AMIL">AMIL</option>
            </select>
            </br>

            <label for="Plano"><b>PLANO</b></label>
            <input type="text" placeholder="Entre com seu Plano" name="Plano" disabled value="{{old('Plano',$pacientes['Plano'])}}">

            <label for="Inscricao"><b>INSCRIÇÃO</b></label>
            <input type="text" placeholder="Entre com sua Inscrição" name="Inscricao" disabled value="{{old('Inscricao',$pacientes['Inscricao'])}}">

            <label for="Validade"><b>VALIDADE</b></label>
            <div class="input-group date">
                <input type="date" class="form-control" id="Validade" name="Validade" disabled value="{{old('Validade',$pacientes['Validade'])}}">
                <div class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </div>
            </div>

        </div>

        <div id="clinicos1" class="tab-pane fade">
            <!-- 5 Aba (aba dos dados clinicos)-->

            <h3>DADOS CLÍNICOS</h3>
          <label for="cor"><b>COR DA PELE</b></label>
          <select class="form-control" id="gender1" name="cor" disabled value="{{old('cor',$pacientes['cor'])}}">
              <option @if(old('cor',$pacientes['cor']) == "BRANCA") selected @endif disabled value="BRANCA">BRANCA</option>
              <option @if(old('cor',$pacientes['cor']) == "PARDA") selected @endif disabled value="PARDA">PARDA</option>
              <option @if(old('cor',$pacientes['cor']) == "PRETA") selected @endif disabled value="PRETA">PRETA</option>
              <option @if(old('cor',$pacientes['cor']) == "AMARELO") selected @endif disabled value="AMARELO">AMARELO</option>
              <option @if(old('cor',$pacientes['cor']) == "INDÍGINA") selected @endif disabled value="INDÍGINA">INDÍGINA</option>
          </select>
          </br>

          <label for="Peso"><b>PESO</b></label>
          <input type="text" placeholder="Entre com seu Peso" name="Peso" disabled value="{{old('Peso',$pacientes['Peso'])}}">

          <label for="Altura"><b>ALTURA</b></label>
          <input type="text" placeholder="Entre com sua Altura" name="Altura" disabled value="{{old('Altura',$pacientes['Altura'])}}">

          <label for="rh"><b>FATOR RH</b></label>
          <select class="form-control" id="gender1" name="rh" disabled value="{{old('rh',$pacientes['rh'])}}">
              <option @if(old('rh',$pacientes['rh']) == "RH+") selected @endif disabled value="RH+">RH+</option>
              <option @if(old('rh',$pacientes['rh']) == "RH-") selected @endif disabled value="RH-">RH-</option>
          </select>
          </br>

          <label for="tipo"><b>TIPO SANGUINIO</b></label>
          <select class="form-control" id="gender1" name="tipo" disabled value="{{old('tipo',$pacientes['tipo'])}}">
              <option @if(old('tipo',$pacientes['tipo']) == "A+") selected @endif disabled value="A+">A+</option>
              <option @if(old('tipo',$pacientes['tipo']) == "A-") selected @endif disabled value="A-">A-</option>
              <option @if(old('tipo',$pacientes['tipo']) == "B+") selected @endif disabled value="B+">B+</option>
              <option @if(old('tipo',$pacientes['tipo']) == "B-") selected @endif disabled value="B-">B-</option>
              <option @if(old('tipo',$pacientes['tipo']) == "AB+") selected @endif disabled value="AB+">AB+</option>
              <option @if(old('tipo',$pacientes['tipo']) == "AB-") selected @endif disabled value="AB-">AB-</option>
              <option @if(old('tipo',$pacientes['tipo']) == "O+") selected @endif disabled value="O+">O+</option>
              <option @if(old('tipo',$pacientes['tipo']) == "O-") selected @endif disabled value="O-">O-</option>
          </select>
          </br>

          <label for="plano"><b>DOÊNÇAS HEREDITARIAS?</b></label>
          <label class="radio">SIM
              <input type="radio" disabled value="sim" name="radioH" @if(old('radioH',$pacientes['radioH']) == "sim") checked @endif>
              <span class="checkmark"></span>
          </label>
          <label class="radio">NÃO
              <input type="radio" disabled value="não" name="radioH" @if(old('radioH',$pacientes['radioH']) == "não") checked @endif>
              <span class="checkmark"></span>
          </label>
          <input type="text" placeholder="COMENTE" name="Chere" disabled value="{{old('Chere',$pacientes['Chere'])}}">

          <label for="plano"><b>DIABETES?</b></label>
          <label class="radio">SIM
              <input type="radio" disabled value="sim" name="radioD" @if(old('radioD',$pacientes['radioD']) == "sim") checked @endif>
              <span class="checkmark"></span>
          </label>
          <label class="radio">NÃO
              <input type="radio" disabled value="nao" name="radioD" @if(old('radioD',$pacientes['radioD']) == "nao") checked @endif>
              <span class="checkmark"></span>
          </label>
          <input type="text" placeholder="COMENTE" name="CDiab" disabled value="{{old('CDiab',$pacientes['CDiab'])}}">

          <label for="plano"><b>HIPERTENSÃO?</b></label>
          <label class="radio">SIM
              <input type="radio" disabled value="sim" name="radioHI" @if(old('radioHI',$pacientes['radioHI']) == "sim") checked @endif>
              <span class="checkmark"></span>
          </label>
          <label class="radio">NÃO
              <input type="radio" disabled value="não" name="radioHI" @if(old('radioHI',$pacientes['radioHI']) == "não") checked @endif>
              <span class="checkmark"></span>
          </label>
          <input type="text" placeholder="COMENTE" name="Chiper" disabled value="{{old('Chiper',$pacientes['Chiper'])}}">

      </div>

      <div id="clinicos2" class="tab-pane fade">
          <!-- 6 Aba (DADODS CLINICOS)-->

          <h3>DADOS CLÍNICOS CONTINUAÇÃO</h3>
          <label for="plano"><b>TABAGISTA?</b></label>
          <label class="radio">SIM
              <input type="radio" disabled value="sim" name="radioT" @if(old('radioT',$pacientes['radioT']) == "sim") checked @endif>
              <span class="checkmark"></span>
          </label>
          <label class="radio">NÃO
              <input type="radio" disabled value="não" name="radioT" @if(old('radioT',$pacientes['radioT']) == "não") checked @endif>
              <span class="checkmark"></span>
          </label>
          <input type="text" placeholder="COMENTE" name="Cclini" disabled value="{{old('Cclini',$pacientes['Cclini'])}}">

          <label for="plano"><b>DOÊNÇAS CRONICAS?</b></label>
          <label class="radio">SIM
              <input type="radio" disabled value="sim" name="radioC" @if(old('radioC',$pacientes['radioC']) == "sim") checked @endif>
              <span class="checkmark"></span>
          </label>
          <label class="radio">NÃO
              <input type="radio" disabled value="não" name="radioC" @if(old('radioC',$pacientes['radioC']) == "não") checked @endif>
              <span class="checkmark"></span>
          </label>
          <input type="text" placeholder="COMENTE" name="Cdoen" disabled value="{{old('Cdoen',$pacientes['Cdoen'])}}">

          <label for="plano"><b>NEOPLASIA?</b></label>
          <label class="radio">SIM
              <input type="radio" disabled value="sim" name="radioN" @if(old('radioN',$pacientes['radioN']) == "sim") checked @endif>
              <span class="checkmark"></span>
          </label>
          <label class="radio">NÃO
              <input type="radio" disabled value="não" name="radioN" @if(old('radioN',$pacientes['radioN']) == "não") checked @endif>
              <span class="checkmark"></span>
          </label>
          <input type="text" placeholder="COMENTE" name="Cneopla" disabled value="{{old('Cneopla',$pacientes['Cneopla'])}}">

          <label for="plano"><b>FÁRMACO HABITUAL?</b></label>
          <label class="radio">SIM
              <input type="radio" disabled value="sim" name="radioFA" @if(old('radioFA',$pacientes['radioFA']) == "não") checked @endif>
              <span class="checkmark"></span>
          </label>
          <label class="radio">NÃO
              <input type="radio" disabled value="não" name="radioFA" @if(old('radioFA',$pacientes['radioFA']) == "não") checked @endif>
              <span class="checkmark"></span>
          </label>
          <input type="text" placeholder="COMENTE" name="Cfarma" disabled value="{{old('Cfarma',$pacientes['Cfarma'])}}">
      </div>

      <div id="clinicos3" class="tab-pane fade">
          <!-- 7 Aba (DADODS CLINICOS)-->

          <h3>DADOS CLÍNICOS CONTINUAÇÃO</h3>

          <label for="plano"><b>USO DE DROGAS?</b></label>

          <label class="radio">SIM
              <input type="radio" disabled value="sim" disabled value="sim" name="radioDRO" @if(old('radioDRO',$pacientes['radioDRO']) == "sim") checked @endif>
              <span class="checkmark"></span>
          </label>
          <label class="radio">NÃO
              <input type="radio" disabled value="não" name="radioDRO" @if(old('radioDRO',$pacientes['radioDRO']) == "não") checked @endif>
              <span class="checkmark"></span>
          </label>
          <input type="text" placeholder="COMENTE" name="Cuso" disabled value="{{old('Cuso',$pacientes['Cuso'])}}">

          <label for="plano"><b>ALERGIAS?</b></label>
          <label class="radio">SIM
              <input type="radio" disabled value="sim" name="radioAL" @if(old('radioAL',$pacientes['radioAL']) == "sim") checked @endif>
              <span class="checkmark"></span>
          </label>
          <label class="radio">NÃO
              <input type="radio" disabled value="não" name="radioAL" @if(old('radioAL',$pacientes['radioAL']) == "não") checked @endif>
              <span class="checkmark"></span>
          </label>
          <input type="text" placeholder="COMENTE" name="Calerg" disabled value="{{old('Calerg',$pacientes['Calerg'])}}">

          <label for="plano"><b>ETILISTA?</b></label>
          <label class="radio">SIM
              <input type="radio" disabled value="sim" name="radioET" @if(old('radioET',$pacientes['radioET']) == "sim") checked @endif>
              <span class="checkmark"></span>
          </label>
          <label class="radio">NÃO
              <input type="radio" disabled value="não" name="radioET" @if(old('radioET',$pacientes['radioET']) == "não") checked @endif>
              <span class="checkmark"></span>
          </label>
          <input type="text" placeholder="COMENTE" name="Cetili" disabled value="{{old('Cetili',$pacientes['Cetili'])}}">

          <label for="plano"><b>VACINA TOMADAS?</b></label>
          <label class="radio">SIM
              <input type="radio" disabled value="sim" name="radioVA" @if(old('radioET',$pacientes['radioET']) == "sim") checked @endif>
              <span class="checkmark"></span>
          </label>
          <label class="radio">NÃO
              <input type="radio" disabled value="não" name="radioVA" @if(old('radioET',$pacientes['radioET']) == "não") checked @endif>
              <span class="checkmark"></span>
          </label>
          <input type="text" placeholder="COMENTE" name="Cvacina" disabled value="{{old('Cvacina',$pacientes['Cvacina'])}}">
      </div>

      <div id="clinicos4" class="tab-pane fade">
          <!-- 8 Aba (DADODS CLINICOS)-->
          <h3>DADOS CLÍNICOS CONTINUAÇÃO</h3>

          <label for="plano"><b>CIRURGIAS?</b></label>
          <label class="radio">SIM
              <input type="radio" disabled value="sim" name="radioCI" @if(old('radioCI',$pacientes['radioCI']) == "sim") checked @endif>
              <span class="checkmark"></span>
          </label>
          <label class="radio">NÃO
              <input type="radio" disabled value="não" name="radioCI" @if(old('radioCI',$pacientes['radioCI']) == "não") checked @endif>
              <span class="checkmark"></span>
          </label>
          <input type="text" placeholder="COMENTE" name="Ccirur" disabled value="{{old('Ccirur',$pacientes['Ccirur'])}}">

          <label for="plano"><b>PORTADOR DE DOÊNÇAS SEXUALMENTE TRANSMISSÍVEIS?</b></label>
          <label class="radio">SIM
              <input type="radio" disabled value="sim" name="radioTRA" @if(old('radioTRA',$pacientes['radioTRA']) == "sim") checked @endif>
              <span class="checkmark"></span>
          </label>
          <label class="radio">NÃO
              <input type="radio" disabled value="não" name="radioTRA" @if(old('radioTRA',$pacientes['radioTRA']) == "não") checked @endif>
              <span class="checkmark"></span>
          </label>
          <input type="text" placeholder="COMENTE" name="Cporta" disabled value="{{old('Cporta',$pacientes['Cporta'])}}">

          <label for="plano"><b>PORTADOR DE MARCAPASSO?</b></label>
          <label class="radio">SIM
              <input type="radio" disabled value="sim" name="radioMAR" @if(old('radioMAR',$pacientes['radioMAR']) == "sim") checked @endif>
              <span class="checkmark"></span>
          </label>
          <label class="radio">NÃO
              <input type="radio" disabled value="não" name="radioMAR" @if(old('radioMAR',$pacientes['radioMAR']) == "não") checked @endif>
              <span class="checkmark"></span>
          </label>
          <input type="text" placeholder="COMENTE" name="Cmarca" disabled value="{{old('Cmarca',$pacientes['Cmarca'])}}">

          <label for="plano"><b>EPLIPSIA - CONSULÇÃO?</b></label>
          <label class="radio">SIM
              <input type="radio" disabled value="sim" name="radioEP" @if(old('radioEP',$pacientes['radioEP']) == "sim") checked @endif>
              <span class="checkmark"></span>
          </label>
          <label class="radio">NÃO
              <input type="radio" disabled value="não" name="radioEP" @if(old('radioEP',$pacientes['radioEP']) == "não") checked @endif>
              <span class="checkmark"></span>
          </label>
          <input type="text" placeholder="COMENTE" name="Ceplis" disabled value="{{old('Ceplis',$pacientes['Ceplis'])}}"> </br>
        </div>
          <button class="button-ok">Voltar</button>
        </form>
@endsection