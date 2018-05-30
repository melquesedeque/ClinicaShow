@extends('NavBar')
@section('body')

  <div class="container">
      <!-- Cadastrar Paciente -->
      <h2>Cadastrar Funcinário</h2>
      <ul class="nav nav-tabs">
          <!-- Abbas do cadastro -->
          <li class="active"><a data-toggle="tab" href="#DadosPessoais">Dados Pessoais</a></li>
          <li><a data-toggle="tab" href="#Endereco">Endereço</a></li>
          <li><a data-toggle="tab" href="#Contato">Familiares para contato</a></li>
          <li><a data-toggle="tab" href="#clinicos1">Dados Clínicos 1</a></li>
          <li><a data-toggle="tab" href="#clinicos2">Clínicos 2</a></li>
          <li><a data-toggle="tab" href="#clinicos3">Clínicos 3</a></li>
          <li><a data-toggle="tab" href="#clinicos4">Clínicos 4</a></li>
      </ul>

      <div class="tab-content">

          <div id="DadosPessoais" class="tab-pane fade in active">
              <!-- Dados do pacientes-->

              <form action=" {{ route('funcionario-Atualizar', ['id' => $Funcionarios['id']]) }}" style="border:#ccc">

                  <div class="container">
                    <h3>Dados Funcionário</h3>
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
                      <input type="text" name="id" disabled value="{{old('id',$Funcionarios['id'])}}">

                      <label for=""><b>NOME</b></label>
                      <input type="text" placeholder="Enter com seu nome" name="Nome" value="{{old('Nome',$Funcionarios['Nome'])}}">

                      <label for=""><b>CPF</b></label>
                      <input type="text" placeholder="XXX.XXX.XXX-XX" name="Cpf" value="{{old('Cpf',$Funcionarios['Cpf'])}}" maxlength="14" OnKeyPress="formatar('###.###.###-##', this); if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;">

                      <label for=""><b>RG</b></label>
                      <input type="text" placeholder="Entre com seu RG" name="Rg" value="{{old('Rg',$Funcionarios['Rg'])}}" maxlength="14" OnKeyPress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;">

                      <label for=""><b>TELEFONE</b></label>
                      <input type="text" placeholder="(XX) X XXXX-XXXX" name="Telefone-p" value="{{old('Telefone-p',$Funcionarios['Telefone-p'])}}">

                      <label for=""><b>DATA NASCIMENTO</b></label>
                      <input type="date" placeholder="DD/MM/YYYY" name="Data" value="{{old('Data',$Funcionarios['Data'])}}" maxlength="14" OnKeyPress="formatar('## # ####-####', this); if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;">

                      <label for=""><b>NATURALIDADE</b></label>
                      <select class="form-control" id="gender1" name="Naturalidade" value="{{old('Naturalidade',$Funcionarios['Naturalidade'])}}">
                        <option @if(old('Naturalidade',$Funcionarios['Naturalidade']) == "BRASIL") selected @endif value="BRASIL">BRASIL</option>
                        <option @if(old('Naturalidade',$Funcionarios['Naturalidade']) == "ARGENTINA") selected @endif value="ARGENTINA">ARGENTINA</option>
                        <option @if(old('Naturalidade',$Funcionarios['Naturalidade']) == "CHILE") selected @endif value="CHILE">CHILE</option>    
                        <option @if(old('Naturalidade',$Funcionarios['Naturalidade']) == "COLÔMBIA") selected @endif value="COLÔMBIA">COLÔMBIA</option>
                        <option @if(old('Naturalidade',$Funcionarios['Naturalidade']) == "ESTADOS") selected @endif value="ESTADOS">ESTADOS UNIDOS</option>
                        <option @if(old('Naturalidade',$Funcionarios['Naturalidade']) == "CANADA") selected @endif value="CANADA">CANADÁ</option>
                        <option @if(old('Naturalidade',$Funcionarios['Naturalidade']) == "MEXICO") selected @endif value="MEXICO">MÉXICO</option>
                        <option @if(old('Naturalidade',$Funcionarios['Naturalidade']) == "PORTUGAL") selected @endif value="PORTUGAL">PORTUGAL</option>
                        <option @if(old('Naturalidade',$Funcionarios['Naturalidade']) == "FRANÇA") selected @endif value="FRANÇA">FRANÇA</option>
                        <option @if(old('Naturalidade',$Funcionarios['Naturalidade']) == "FRANÇA") selected @endif value="FRANÇA">ITáLIA</option>
                        <option @if(old('Naturalidade',$Funcionarios['Naturalidade']) == "FRANÇA") selected @endif value="FRANÇA">RÚSSIA</option>
                        <option @if(old('Naturalidade',$Funcionarios['Naturalidade']) == "JAPÃO") selected @endif value="JAPÃO">JAPÃO</option>
                        <option @if(old('Naturalidade',$Funcionarios['Naturalidade']) == "CHINA") selected @endif value="CHINA">CHINA</option>
                      </select>

                      <label for=""><b>SEXO</b></label>
                      <select class="form-control" id="gender1" name="sexo" value="{{old('sexo',$Funcionarios['sexo'])}}">
                        <option @if(old('sexo',$Funcionarios['sexo']) == "MASC") selected @endif value="MASC">MASCULINO</option>
                        <option @if(old('sexo',$Funcionarios['sexo']) == "FEMIN") selected @endif value="FEMIN">FEMININO</option>
                        <option @if(old('sexo',$Funcionarios['sexo']) == "OUTRO") selected @endif value="OUTRO">OUTRO</option>
                      </select>
                      </br>

                      <label for=""><b>ESTADO CIVIL</b></label>
                      <select class="form-control" id="gender1" name="estado" value="{{old('estado',$Funcionarios['estado'])}}">
                        <option @if(old('estado',$Funcionarios['estado']) == "casado") selected @endif value="casado">CASADO</option>
                        <option @if(old('estado',$Funcionarios['estado']) == "solteiro") selected @endif value="solteiro">SOLTEIRO</option>
                        <option @if(old('estado',$Funcionarios['estado']) == "viuvo") selected @endif value="viuvo">VIUVO</option>
                        <option @if(old('estado',$Funcionarios['estado']) == "divorciado") selected @endif value="divorciado">DIVORCIADO</option>
                      </select>
                      </br>

                      <label for=""><b>E-MAIL</b></label>
                      <input type="text" placeholder="Entre com seu Email@email.com" name="Email" value="{{old('Email',$Funcionarios['Email'])}}">

                      <label for=""><b>ESCOLARIDADE</b></label>
                      <select class="form-control" id="gender1" name="escola" value="{{old('escola',$Funcionarios['escola'])}}">
                        <option @if(old('escola',$Funcionarios['escola']) == "FunINCOMPLETO") selected @endif value="FunINCOMPLETO">FUNDAMENTAL-INCOMPLETO</option>
                        <option @if(old('escola',$Funcionarios['escola']) == "FunCOMPLETO") selected @endif value="FunCOMPLETO">FUNDAMENTAL-COMPLETO</option>
                        <option @if(old('escola',$Funcionarios['escola']) == "SugSEGUNDO") selected @endif value="SugSEGUNDO">SEGUNDO GRAU-INCOMPLETO</option>
                        <option @if(old('escola',$Funcionarios['escola']) == "SugCOMPLETO") selected @endif value="SugCOMPLETO">SEGUNDO GRAU-COMPLETO</option>
                        <option @if(old('escola',$Funcionarios['escola']) == "SupINCOMPLETO") selected @endif value="SupINCOMPLETO">SUPERIOR-INCOMPLETO</option>
                        <option @if(old('escola',$Funcionarios['escola']) == "SupCOMPLETO") selected @endif value="SupCOMPLETO">SUPERIOR-COMPLETO</option>
                        <option @if(old('escola',$Funcionarios['escola']) == "MesINCOMPLETO") selected @endif value="MesINCOMPLETO">MESTRADO-INCOMPLETO</option>
                        <option @if(old('escola',$Funcionarios['escola']) == "MesCOMPLETO") selected @endif value="MesCOMPLETO">MESTRADO-COMPLETO</option>
                      </select>
                      </br>

                      <label for=""><b>PROFISSÃO</b></label>
                      <select class="form-control" id="gender1" name="profi" value="{{old('profi',$Funcionarios['profi'])}}">
                        <option @if(old('profi',$Funcionarios['profi']) == "MÉDICO") selected @endif value="MÉDICO">MÉDICO</option>
                        <option @if(old('profi',$Funcionarios['profi']) == "ENFERMEIRO") selected @endif value="ENFERMEIRO">ENFERMEIRO</option>
                        <option @if(old('profi',$Funcionarios['profi']) == "ARQUITETO") selected @endif value="ARQUITETO">ARQUITETO</option>
                        <option @if(old('profi',$Funcionarios['profi']) == "ENGENHEIRO") selected @endif value="ENGENHEIRO">ENGENHEIRO</option>
                        <option @if(old('profi',$Funcionarios['profi']) == "FISIOTERAPEUTA") selected @endif value="FISIOTERAPEUTA">FISIOTERAPEUTA</option>
                        <option @if(old('profi',$Funcionarios['profi']) == "ANALISTA") selected @endif value="ANALISTA">ANALISTA DE SISTEMAS</option>
                        <option @if(old('profi',$Funcionarios['profi']) == "PROGRAMADOR") selected @endif value="PROGRAMADOR">PROGRAMADOR</option>
                        <option @if(old('profi',$Funcionarios['profi']) == "DENTISTA") selected @endif value="DENTISTA">DENTISTA</option>
                        <option @if(old('profi',$Funcionarios['profi']) == "PEDREIRO") selected @endif value="PEDREIRO">PEDREIRO</option>
                        <option @if(old('profi',$Funcionarios['profi']) == "SEGURANÇA") selected @endif value="SEGURANÇA">SEGURANÇA</option>
                        <option @if(old('profi',$Funcionarios['profi']) == "ADIMINISTRAÇÃO") selected @endif value="ADIMINISTRAÇÃO">ADIMINISTRAÇÃO</option>
                        <option @if(old('profi',$Funcionarios['profi']) == "FARMACIA") selected @endif value="FARMACIA">FARMACIA</option>
                        <option @if(old('profi',$Funcionarios['profi']) == "FÍSICA") selected @endif value="FÍSICA">EDUÇÃO FÍSICA</option>
                      </select>
                      </br>

                      <label for="profissao"><b>ESPECIALIDADE</b></label>
                      <select class="form-control" id="gender1" name="Especialidade" value="{{old('Especialidade',$Funcionarios['Especialidade'])}}">
                          <option @if(old('Especialidade',$Funcionarios['Especialidade']) == "NEUROLOGISTA") selected @endif value="NEUROLOGISTA">NEUROLOGISTA</option>
                          <option @if(old('Especialidade',$Funcionarios['Especialidade']) == "CARDIOVASCULAR") selected @endif value="CARDIOVASCULAR">CARDIOVASCULAR</option>
                          <option @if(old('Especialidade',$Funcionarios['Especialidade']) == "CIRURGIÃO") selected @endif value="CIRURGIÃO">CIRURGIÃO GERAL</option>
                          <option @if(old('Especialidade',$Funcionarios['Especialidade']) == "PEDRIATRIA") selected @endif value="PEDRIATRIA">PEDRIATRIA</option>
                      </select>
                      </br>

                      <label for="profissao"><b>TIPO DE PERMISSÃO</b></label>
                      <select class="form-control" id="gender1" name="TIPO_PERMISAO"  value="{{old('TIPO_PERMISAO',$Funcionarios['TIPO_PERMISAO'])}}">
                          <option @if(old('TIPO_PERMISAO',$Funcionarios['TIPO_PERMISAO']) == "PMEDICO") selected @endif value="PMEDICO">MÉDICO</option>
                          <option @if(old('TIPO_PERMISAO',$Funcionarios['TIPO_PERMISAO']) == "PMEDICOGERENTE") selected @endif value="PMEDICOGERENTE">MÉDICO GERENTE</option>
                          <option @if(old('TIPO_PERMISAO',$Funcionarios['TIPO_PERMISAO']) == "PENFERMEIRO") selected @endif value="PENFERMEIRO">ENFERMEIRO</option>
                          <option @if(old('TIPO_PERMISAO',$Funcionarios['TIPO_PERMISAO']) == "PENFERMEIROCHEFE") selected @endif value="PENFERMEIROCHEFE">ENFERMEIRO CHEFE</option>
                          <option @if(old('TIPO_PERMISAO',$Funcionarios['TIPO_PERMISAO']) == "PATENDIMENTO") selected @endif value="PATENDIMENTO">ATENDIMENTO</option>
                          <option @if(old('TIPO_PERMISAO',$Funcionarios['TIPO_PERMISAO']) == "PGERAL") selected @endif value="PGERAL">GERENTE GERAL</option>
                          <option @if(old('TIPO_PERMISAO',$Funcionarios['TIPO_PERMISAO']) == "RH") selected @endif value="RH">RH</option>
                      </select>
                      </br>
                  </div>
          </div>

          <div id="Endereco" class="tab-pane fade">
              <!-- 2 Aba (aba dos enderço)-->
              <h3>Endereço</h3>
              <label for="CEP"><b>CEP</b></label>
              <input type="text" placeholder="Enter com seu CEP" name="Cep" value="{{old('Cep',$Funcionarios['Cep'])}}" maxlength="9" onblur="pesquisacep(this.value);" OnKeyPress="formatar('#####-###', this)">

              <label for="uf"><b>UF</b></label>
              <input type="text" placeholder="Entre com seu UF" name="Uf" maxlength="2" value="{{old('Uf',$Funcionarios['Uf'])}}" OnKeyPress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;">

              <label for="cidade"><b>CIDADE</b></label>
              <select class="form-control" id="gender1" name="cidade">
                <option @if(old('cidade',$Funcionarios['cidade']) == "MACEIÓ") selected @endif value="MACEIÓ">MACEIÓ</option>
                <option @if(old('cidade',$Funcionarios['cidade']) == "CORURIPE") selected @endif value="CORURIPE">CORURIPE</option>
                <option @if(old('cidade',$Funcionarios['cidade']) == "RIO") selected @endif value="RIO">RIO DE JANEIRO</option>
                <option @if(old('cidade',$Funcionarios['cidade']) == "PAULO") selected @endif value="PAULO">SÃO PAULO</option>
                <option @if(old('cidade',$Funcionarios['cidade']) == "PARANA") selected @endif value="PARANA">PARANA</option>
                <option @if(old('cidade',$Funcionarios['cidade']) == "SANTA") selected @endif value="SANTA">SANTA CATARINA</option>
                <option @if(old('cidade',$Funcionarios['cidade']) == "RECIFE") selected @endif value="RECIFE">RECIFE</option>
                <option @if(old('cidade',$Funcionarios['cidade']) == "BAHIA") selected @endif value="BAHIA">BAHIA</option>
                <option @if(old('cidade',$Funcionarios['cidade']) == "SERGIPE") selected @endif value="SERGIPE">SERGIPE</option>
                <option @if(old('cidade',$Funcionarios['cidade']) == "PERNABUCO") selected @endif value="PERNABUCO">PERNABUCO</option>
                <option @if(old('cidade',$Funcionarios['cidade']) == "GOIAS") selected @endif value="GOIAS">GOIAS</option>
                <option @if(old('cidade',$Funcionarios['cidade']) == "AMAZONAS") selected @endif value="AMAZONAS">AMAZONAS</option>
                <option @if(old('cidade',$Funcionarios['cidade']) == "FLORIPA") selected @endif value="FLORIPA">FLORIPA</option>
              </select>
              </br>

              <label for="endereco"><b>ENDEREÇO</b></label>
              <input type="text" placeholder="Entre com seu Endereço" name="Endereco" value="{{old('Endereco',$Funcionarios['Endereco'])}}">

              <label for="bairro"><b>BAIRRO</b></label>
              <input type="text" placeholder="Entre com seu Bairro" name="Bairro" value="{{old('Bairro',$Funcionarios['Bairro'])}}">

              <label for="numero"><b>NÚMERO</b></label>
              <input type="text" placeholder="Entre com seu Número" name="Numero" value="{{old('Numero',$Funcionarios['Numero'])}}">

              <label for="complemento"><b>COMPLEMENTO</b></label>
              <input type="text" placeholder="Entre com seu Complemento" name="Complemento" value="{{old('Complemento',$Funcionarios['Complemento'])}}">
          </div>

          <div id="Contato" class="tab-pane fade">
              <!-- 3 Aba (aba dos contatos)-->
              <h3>Contatos</h3>
              <label for="parente"><b>RESPONSAVEL/PARENTE 1 NOME</b></label>
              <input type="text" placeholder="Entre com seu nome" name="Parente" value="{{old('Parente',$Funcionarios['Parente'])}}">

              <label for="parentent-tele"><b>RESPONSAVEL/PARENTE  1 TELEFONE</b></label>
              <input type="text" placeholder="Entre com seu Telefone" name="Parentent-tele" value="{{old('Parentent-tele',$Funcionarios['Parentent-tele'])}}">

              <label for="parente-1"><b>RESPONSAVEL/PARENTE 2 NOME</b></label>
              <input type="text" placeholder="Entre com seu nome" name="Parente-1" value="{{old('Parente-1',$Funcionarios['Parente-1'])}}">

              <label for="parentent-tele-1"><b>RESPONSAVEL/PARENTE 2 TELEFONE</b></label>
              <input type="text" placeholder="Entre com seu Telefone" name="Parentent-tele-1" value="{{old('Parentent-tele-1',$Funcionarios['Parentent-tele-1'])}}">
          </div>

          <div id="clinicos1" class="tab-pane fade">
              <!-- 5 Aba (aba dos dados clinicos)-->

              <h3>DADOS CLÍNICOS</h3>
            <label for="cor"><b>COR DA PELE</b></label>
            <select class="form-control" id="gender1" name="cor" value="{{old('cor',$Funcionarios['cor'])}}">
                <option @if(old('cor',$Funcionarios['cor']) == "BRANCA") selected @endif value="BRANCA">BRANCA</option>
                <option @if(old('cor',$Funcionarios['cor']) == "PARDA") selected @endif value="PARDA">PARDA</option>
                <option @if(old('cor',$Funcionarios['cor']) == "PRETA") selected @endif value="PRETA">PRETA</option>
                <option @if(old('cor',$Funcionarios['cor']) == "AMARELO") selected @endif value="AMARELO">AMARELO</option>
                <option @if(old('cor',$Funcionarios['cor']) == "INDÍGINA") selected @endif value="INDÍGINA">INDÍGINA</option>
            </select>
            </br>

            <label for="Peso"><b>PESO</b></label>
            <input type="text" placeholder="Entre com seu Peso" name="Peso" value="{{old('Peso',$Funcionarios['Peso'])}}">

            <label for="Altura"><b>ALTURA</b></label>
            <input type="text" placeholder="Entre com sua Altura" name="Altura" value="{{old('Altura',$Funcionarios['Altura'])}}">

            <label for="rh"><b>FATOR RH</b></label>
            <select class="form-control" id="gender1" name="rh" value="{{old('rh',$Funcionarios['rh'])}}">
                <option @if(old('rh',$Funcionarios['rh']) == "RH+") selected @endif value="RH+">RH+</option>
                <option @if(old('rh',$Funcionarios['rh']) == "RH-") selected @endif value="RH-">RH-</option>
            </select>
            </br>

            <label for="tipo"><b>TIPO SANGUINIO</b></label>
            <select class="form-control" id="gender1" name="tipo" value="{{old('tipo',$Funcionarios['tipo'])}}">
                <option @if(old('tipo',$Funcionarios['tipo']) == "A+") selected @endif value="A+">A+</option>
                <option @if(old('tipo',$Funcionarios['tipo']) == "A-") selected @endif value="A-">A-</option>
                <option @if(old('tipo',$Funcionarios['tipo']) == "B+") selected @endif value="B+">B+</option>
                <option @if(old('tipo',$Funcionarios['tipo']) == "B-") selected @endif value="B-">B-</option>
                <option @if(old('tipo',$Funcionarios['tipo']) == "AB+") selected @endif value="AB+">AB+</option>
                <option @if(old('tipo',$Funcionarios['tipo']) == "AB-") selected @endif value="AB-">AB-</option>
                <option @if(old('tipo',$Funcionarios['tipo']) == "O+") selected @endif value="O+">O+</option>
                <option @if(old('tipo',$Funcionarios['tipo']) == "O-") selected @endif value="O-">O-</option>
            </select>
            </br>

            <label for="plano"><b>DOÊNÇAS HEREDITARIAS?</b></label>
            <label class="radio">SIM
                <input type="radio" value="sim" name="radioH" @if(old('radioH',$Funcionarios['radioH']) == "sim") checked @endif>
                <span class="checkmark"></span>
            </label>
            <label class="radio">NÃO
                <input type="radio" value="não" name="radioH" @if(old('radioH',$Funcionarios['radioH']) == "não") checked @endif>
                <span class="checkmark"></span>
            </label>
            <input type="text" placeholder="COMENTE" name="Chere" value="{{old('Chere',$Funcionarios['Chere'])}}">

            <label for="plano"><b>DIABETES?</b></label>
            <label class="radio">SIM
                <input type="radio" value="sim" name="radioD" @if(old('radioD',$Funcionarios['radioD']) == "sim") checked @endif  >
                <span class="checkmark"></span>
            </label>
            <label class="radio">NÃO
                <input type="radio" value="não" name="radioD" @if(old('radioD',$Funcionarios['radioD']) == "não") checked @endif >
                <span class="checkmark"></span>
            </label>
            <input type="text" placeholder="COMENTE" name="CDiab" value="{{old('CDiab',$Funcionarios['CDiab'])}}">

            <label for="plano"><b>HIPERTENSÃO?</b></label>
            <label class="radio">SIM
                <input type="radio" value="sim" name="radioHI" @if(old('radioHI',$Funcionarios['radioHI']) == "sim") checked @endif>
                <span class="checkmark"></span>
            </label>
            <label class="radio">NÃO
                <input type="radio" value="não" name="radioHI" @if(old('radioHI',$Funcionarios['radioHI']) == "não") checked @endif>
                <span class="checkmark"></span>
            </label>
            <input type="text" placeholder="COMENTE" name="Chiper" value="{{old('Chiper',$Funcionarios['Chiper'])}}">

        </div>

        <div id="clinicos2" class="tab-pane fade">
            <!-- 6 Aba (DADODS CLINICOS)-->

            <h3>DADOS CLÍNICOS CONTINUAÇÃO</h3>
            <label for="plano"><b>TABAGISTA?</b></label>
            <label class="radio">SIM
                <input type="radio" value="sim" name="radioT" @if(old('radioT',$Funcionarios['radioT']) == "sim") checked @endif>
                <span class="checkmark"></span>
            </label>
            <label class="radio">NÃO
                <input type="radio" value="não" name="radioT" @if(old('radioT',$Funcionarios['radioT']) == "não") checked @endif>
                <span class="checkmark"></span>
            </label>
            <input type="text" placeholder="COMENTE" name="Cclini" value="{{old('Cclini',$Funcionarios['Cclini'])}}">

            <label for="plano"><b>DOÊNÇAS CRONICAS?</b></label>
            <label class="radio">SIM
                <input type="radio" value="sim" name="radioC" @if(old('radioC',$Funcionarios['radioC']) == "sim") checked @endif >
                <span class="checkmark"></span>
            </label>
            <label class="radio">NÃO
                <input type="radio" value="não" name="radioC" @if(old('radioC',$Funcionarios['radioC']) == "não") checked @endif >
                <span class="checkmark"></span>
            </label>
            <input type="text" placeholder="COMENTE" name="Cdoen" value="{{old('Cdoen',$Funcionarios['Cdoen'])}}">

            <label for="plano"><b>NEOPLASIA?</b></label>
            <label class="radio">SIM
                <input type="radio" value="sim" name="radioN" @if(old('radioN',$Funcionarios['radioN']) == "sim") checked @endif>
                <span class="checkmark"></span>
            </label>
            <label class="radio">NÃO
                <input type="radio" value="não" name="radioN" @if(old('radioN',$Funcionarios['radioN']) == "não") checked @endif>
                <span class="checkmark"></span>
            </label>
            <input type="text" placeholder="COMENTE" name="Cneopla" value="{{old('Cneopla',$Funcionarios['Cneopla'])}}">

            <label for="plano"><b>FÁRMACO HABITUAL?</b></label>
            <label class="radio">SIM
                <input type="radio" value="sim" name="radioFA" @if(old('radioFA',$Funcionarios['radioFA']) == "sim") checked @endif>
                <span class="checkmark"></span>
            </label>
            <label class="radio">NÃO
                <input type="radio" value="não" name="radioFA" @if(old('radioFA',$Funcionarios['radioFA']) == "não") checked @endif>
                <span class="checkmark"></span>
            </label>
            <input type="text" placeholder="COMENTE" name="Cfarma" value="{{old('Cfarma',$Funcionarios['Cfarma'])}}">
        </div>

        <div id="clinicos3" class="tab-pane fade">
            <!-- 7 Aba (DADODS CLINICOS)-->

            <h3>DADOS CLÍNICOS CONTINUAÇÃO</h3>

            <label for="plano"><b>USO DE DROGAS?</b></label>

            <label class="radio">SIM
                <input type="radio" value="sim" value="sim" name="radioDRO" @if(old('radioDRO',$Funcionarios['radioDRO']) == "sim") checked @endif>
                <span class="checkmark"></span>
            </label>
            <label class="radio">NÃO
                <input type="radio" value="não" name="radioDRO" @if(old('radioDRO',$Funcionarios['radioDRO']) == "não") checked @endif>
                <span class="checkmark"></span>
            </label>
            <input type="text" placeholder="COMENTE" name="Cuso" value="{{old('Cuso',$Funcionarios['Cuso'])}}">

            <label for="plano"><b>ALERGIAS?</b></label>
            <label class="radio">SIM
                <input type="radio" value="sim" name="radioAL" @if(old('radioAL',$Funcionarios['radioAL']) == "sim") checked @endif>
                <span class="checkmark"></span>
            </label>
            <label class="radio">NÃO
                <input type="radio" value="não" name="radioAL" @if(old('radioAL',$Funcionarios['radioAL']) == "não") checked @endif>
                <span class="checkmark"></span>
            </label>
            <input type="text" placeholder="COMENTE" name="Calerg" value="{{old('Calerg',$Funcionarios['Calerg'])}}">

            <label for="plano"><b>ETILISTA?</b></label>
            <label class="radio">SIM
                <input type="radio" value="sim" name="radioET" @if(old('radioET',$Funcionarios['radioET']) == "sim") checked @endif>
                <span class="checkmark"></span>
            </label>
            <label class="radio">NÃO
                <input type="radio" value="não" name="radioET" @if(old('radioET',$Funcionarios['radioET']) == "não") checked @endif>
                <span class="checkmark"></span>
            </label>
            <input type="text" placeholder="COMENTE" name="Cetili" value="{{old('Cetili',$Funcionarios['Cetili'])}}">

            <label for="plano"><b>VACINA TOMADAS?</b></label>
            <label class="radio">SIM
                <input type="radio" value="sim" name="radioVA" @if(old('radioET',$Funcionarios['radioET']) == "sim") checked @endif>
                <span class="checkmark"></span>
            </label>
            <label class="radio">NÃO
                <input type="radio" value="não" name="radioVA" @if(old('radioET',$Funcionarios['radioET']) == "não") checked @endif>
                <span class="checkmark"></span>
            </label>
            <input type="text" placeholder="COMENTE" name="Cvacina" value="{{old('Cvacina',$Funcionarios['Cvacina'])}}">
        </div>

        <div id="clinicos4" class="tab-pane fade">
            <!-- 8 Aba (DADODS CLINICOS)-->
            <h3>DADOS CLÍNICOS CONTINUAÇÃO</h3>

            <label for="plano"><b>CIRURGIAS?</b></label>
            <label class="radio">SIM
                <input type="radio" value="sim" name="radioCI" @if(old('radioCI',$Funcionarios['radioCI']) == "sim") checked @endif>
                <span class="checkmark"></span>
            </label>
            <label class="radio">NÃO
                <input type="radio" value="não" name="radioCI" @if(old('radioCI',$Funcionarios['radioCI']) == "não") checked @endif>
                <span class="checkmark"></span>
            </label>
            <input type="text" placeholder="COMENTE" name="Ccirur" value="{{old('Ccirur',$Funcionarios['Ccirur'])}}">

            <label for="plano"><b>PORTADOR DE DOÊNÇAS SEXUALMENTE TRANSMISSÍVEIS?</b></label>
            <label class="radio">SIM
                <input type="radio" value="sim" name="radioTRA" @if(old('radioTRA',$Funcionarios['radioTRA']) == "sim") checked @endif>
                <span class="checkmark"></span>
            </label>
            <label class="radio">NÃO
                <input type="radio" value="não" name="radioTRA" @if(old('radioTRA',$Funcionarios['radioTRA']) == "não") checked @endif>
                <span class="checkmark"></span>
            </label>
            <input type="text" placeholder="COMENTE" name="Cporta" value="{{old('Cporta',$Funcionarios['Cporta'])}}">

            <label for="plano"><b>PORTADOR DE MARCAPASSO?</b></label>
            <label class="radio">SIM
                <input type="radio" value="sim" name="radioMAR" @if(old('radioMAR',$Funcionarios['radioMAR']) == "sim") checked @endif>
                <span class="checkmark"></span>
            </label>
            <label class="radio">NÃO
                <input type="radio" value="não" name="radioMAR" @if(old('radioMAR',$Funcionarios['radioMAR']) == "não") checked @endif>
                <span class="checkmark"></span>
            </label>
            <input type="text" placeholder="COMENTE" name="Cmarca" value="{{old('Cmarca',$Funcionarios['Cmarca'])}}">

            <label for="plano"><b>EPLIPSIA - CONSULÇÃO?</b></label>
            <label class="radio">SIM
                <input type="radio" value="sim" name="radioEP" @if(old('radioEP',$Funcionarios['radioEP']) == "sim") checked @endif>
                <span class="checkmark"></span>
            </label>
            <label class="radio">NÃO
                <input type="radio" value="não" name="radioEP" @if(old('radioEP',$Funcionarios['radioEP']) == "não") checked @endif>
                <span class="checkmark"></span>
            </label>
            <input type="text" placeholder="COMENTE" name="Ceplis" value="{{old('Ceplis',$Funcionarios['Ceplis'])}}"> </br>
          </div>
            <button herf=" {{ route('funcionario-listar') }} " class="btn btn-danger">Voltar</button>
            <button class="btn btn-primary button-ok">Alterar Dados</button>
        </form>
@endsection