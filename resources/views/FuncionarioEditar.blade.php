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

                      <label for=""><b>NOME</b></label>
                      <input type="text" placeholder="Enter com seu nome" name="Nome" value="{{old('Nome',$Funcionarios['Nome'])}}">

                      <label for=""><b>MATRICULA</b></label>
                      <input type="text" placeholder="Entre com sua Matricula" name="Matricula" value="{{old('Matricula',$Funcionarios['Matricula'])}}">

                      <label for=""><b>CPF</b></label>
                      <input type="text" placeholder="XXX.XXX.XXX-XX" name="Cpf" value="{{old('Cpf',$Funcionarios['Cpf'])}}">

                      <label for=""><b>RG</b></label>
                      <input type="text" placeholder="Entre com seu RG" name="Rg" value="{{old('Rg',$Funcionarios['Rg'])}}">

                      <label for=""><b>TELEFONE</b></label>
                      <input type="text" placeholder="(XX) X XXXX-XXXX" name="Telefone-p" value="{{old('Telefone-p',$Funcionarios['Telefone-p'])}}">

                      <label for=""><b>DATA NASCIMENTO</b></label>
                      <input type="date" placeholder="DD/MM/YYYY" name="Data" value="{{old('Data',$Funcionarios['Data'])}}">

                      <label for=""><b>NATURALIDADE</b></label>
                      <select class="form-control" id="gender1" name="Naturalidade" value="{{old('Naturalidade',$Funcionarios['Naturalidade'])}}">
                        <option value="BRASIL">BRASIL</option>
                        <option value="ARGENTINA">ARGENTINA</option>
                        <option value="CHILE">CHILE</option>    
                        <option value="COLÔMBIA">COLÔMBIA</option>
                        <option value="ESTADOS">ESTADOS UNIDOS</option>
                        <option value="CANADa">CANADÁ</option>
                        <option value="MeXICO">MÉXICO</option>
                        <option value="PORTUGAL">PORTUGAL</option>
                        <option value="FRANcA">FRANÇA</option>
                        <option value="ITáLIA">ITáLIA</option>
                        <option value="RÚSSIA">RÚSSIA</option>
                        <option value="JAPÃO">JAPÃO</option>
                        <option value="CHINA">CHINA</option>
                      </select>

                      <label for=""><b>SEXO</b></label>
                      <select class="form-control" id="gender1" name="sexo" value="{{old('sexo',$Funcionarios['sexo'])}}">
                        <option value="MASC">MASCULINO</option>
                        <option value="FEMIN">FEMININO</option>
                        <option value="OUTRO">OUTRO</option>
                      </select>
                      </br>

                      <label for=""><b>ESTADO CIVIL</b></label>
                      <select class="form-control" id="gender1" name="estado" value="{{old('estado',$Funcionarios['estado'])}}">
                        <option value="casado">CASADO</option>
                        <option value="solteiro">SOLTEIRO</option>
                        <option value="viuvo">VIUVO</option>
                        <option value="divorciado">DIVORCIADO</option>
                      </select>
                      </br>

                      <label for=""><b>E-MAIL</b></label>
                      <input type="text" placeholder="Entre com seu Email@email.com" name="Email" value="{{old('Email',$Funcionarios['Email'])}}">

                      <label for=""><b>ESCOLARIDADE</b></label>
                      <select class="form-control" id="gender1" name="escola" value="{{old('escola',$Funcionarios['escola'])}}">
                        <option value="FunINCOMPLETO">FUNDAMENTAL-INCOMPLETO</option>
                        <option value="FunCOMPLETO">FUNDAMENTAL-COMPLETO</option>
                        <option value="SugSEGUNDO">SEGUNDO GRAU-INCOMPLETO</option>
                        <option value="SugCOMPLETO">SEGUNDO GRAU-COMPLETO</option>
                        <option value="SupINCOMPLETO">SUPERIOR-INCOMPLETO</option>
                        <option value="SupCOMPLETO">SUPERIOR-COMPLETO</option>
                        <option value="MesINCOMPLETO">MESTRADO-INCOMPLETO</option>
                        <option value="MesCOMPLETO">MESTRADO-COMPLETO</option>
                      </select>
                      </br>

                      <label for=""><b>PROFISSÃO</b></label>
                      <select class="form-control" id="gender1" name="profi" value="{{old('profi',$Funcionarios['profi'])}}">
                        <option value="MÉDICO">MÉDICO</option>
                        <option value="ENFERMEIRO">ENFERMEIRO</option>
                        <option value="ARQUITETO">ARQUITETO</option>
                        <option value="ENGENHEIRO">ENGENHEIRO</option>
                        <option value="FISIOTERAPEUTA">FISIOTERAPEUTA</option>
                        <option value="ANALISTA">ANALISTA DE SISTEMAAS</option>
                        <option value="PROGRAMADOR">PROGRAMADOR</option>
                        <option value="DENTISTA">DENTISTA</option>
                        <option value="PEDREIRO">PEDREIRO</option>
                        <option value="SEGURANÇA">SEGURANÇA</option>
                        <option value="ADIMINISTRAÇÃO">ADIMINISTRAÇÃO</option>
                        <option value="FARMACIA">FARMACIA</option>
                        <option value="FÍSICA">EDUÇÃO FÍSICA</option>
                      </select>
                      </br>

                      <label for="profissao"><b>ESPECIALIDADE</b></label>
                      <select class="form-control" id="gender1" name="Especialidade" value="{{old('Especialidade',$Funcionarios['Especialidade'])}}">
                          <option value="NEUROLOGISTA">NEUROLOGISTA</option>
                          <option value="CARDIOVASCULAR">CARDIOVASCULAR</option>
                          <option value="CIRURGIÃO">CIRURGIÃO GERAL</option>
                          <option value="PEDRIATRIA">PEDRIATRIA</option>
                      </select>
                      </br>

                      <label for="profissao"><b>TIPO DE PERMISSÃO</b></label>
                      <select class="form-control" id="gender1" name="TIPO_PERMISAO"  value="{{old('TIPO_PERMISAO',$Funcionarios['TIPO_PERMISAO'])}}">
                          <option value="PMEDICO">MÉDICO</option>
                          <option value="PMEDICOGERENTE">MÉDICO GERENTE</option>
                          <option value="PENFERMEIRO">ENFERMEIRO</option>
                          <option value="PENFERMEIROCHEFE">ENFERMEIRO CHEFE</option>
                          <option value="PATENDIMENTO">ATENDIMENTO</option>
                          <option value="PGERAL">GERENTE GERAL</option>
                          <option value="RH">RH</option>
                      </select>
                      </br>
                  </div>
          </div>

          <div id="Endereco" class="tab-pane fade">
              <!-- 2 Aba (aba dos enderço)-->
              <h3>Endereço</h3>
              <label for="CEP"><b>CEP</b></label>
              <input type="text" placeholder="Enter com seu CEP" name="Cep" value="{{old('Cep',$Funcionarios['Cep'])}}">

              <label for="uf"><b>UF</b></label>
              <input type="text" placeholder="Entre com seu UF" name="Uf" value="{{old('Uf',$Funcionarios['Uf'])}}">

              <label for="cidade"><b>CIDADE</b></label>
              <select class="form-control" id="gender1" name="cidade" value="{{old('cidade',$Funcionarios['cidade'])}}">
                <option value="MACEIÓ">MACEIÓ</option>
                <option value="CORURIPE">CORURIPE</option>
                <option value="RIO">RIO DE JANEIRO</option>
                <option value="PAULO">SÃO PAULO</option>
                <option value="PARANA">PARANA</option>
                <option value="SANTA">SANTA CATARINA</option>
                <option value="RECIFE">RECIFE</option>
                <option value="BAHIA">BAHIA</option>
                <option value="SERGIPE">SERGIPE</option>
                <option value="PERNABUCO">PERNABUCO</option>
                <option value="GOIAS">GOIAS</option>
                <option value="AMAZONAS">AMAZONAS</option>
                <option value="FLORIPA">FLORIPA</option>
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
                <option value="BRANCA">BRANCA</option>
                <option value="PARDA">PARDA</option>
                <option value="PRETA">PRETA</option>
                <option value="AMARELO">AMARELO</option>
                <option value="INDÍGINA">INDÍGINA</option>
            </select>
            </br>

            <label for="Peso"><b>PESO</b></label>
            <input type="text" placeholder="Entre com seu Peso" name="Peso" value="{{old('Peso',$Funcionarios['Peso'])}}">

            <label for="Altura"><b>ALTURA</b></label>
            <input type="text" placeholder="Entre com sua Altura" name="Altura" value="{{old('Altura',$Funcionarios['Altura'])}}">

            <label for="rh"><b>FATOR RH</b></label>
            <select class="form-control" id="gender1" name="rh" value="{{old('rh',$Funcionarios['rh'])}}">
                <option value="RH+">RH+</option>
                <option value="RH-">RH-</option>
            </select>
            </br>

            <label for="tipo"><b>TIPO SANGUINIO</b></label>
            <select class="form-control" id="gender1" name="tipo" value="{{old('tipo',$Funcionarios['tipo'])}}">
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
            </select>
            </br>

            <label for="plano"><b>DOÊNÇAS HEREDITARIAS?</b></label>
            <label class="radio">SIM
                <input type="radio" checked="checked" name="radioH">
                <span class="checkmark"></span>
            </label>
            <label class="radio">NÃO
                <input type="radio" name="radioH">
                <span class="checkmark"></span>
            </label>
            <input type="text" placeholder="COMENTE" name="Chere" value="{{old('Chere',$Funcionarios['Chere'])}}">

            <label for="plano"><b>DIABETES?</b></label>
            <label class="radio">SIM
                <input type="radio" checked="checked" name="radioD">
                <span class="checkmark"></span>
            </label>
            <label class="radio">NÃO
                <input type="radio" name="radioD">
                <span class="checkmark"></span>
            </label>
            <input type="text" placeholder="COMENTE" name="CDiab" value="{{old('CDiab',$Funcionarios['CDiab'])}}">

            <label for="plano"><b>HIPERTENSÃO?</b></label>
            <label class="radio">SIM
                <input type="radio" checked="checked" name="radioHI">
                <span class="checkmark"></span>
            </label>
            <label class="radio">NÃO
                <input type="radio" name="radioHI">
                <span class="checkmark"></span>
            </label>
            <input type="text" placeholder="COMENTE" name="Chiper" value="{{old('Chiper',$Funcionarios['Chiper'])}}">

        </div>

        <div id="clinicos2" class="tab-pane fade">
            <!-- 6 Aba (DADODS CLINICOS)-->

            <h3>DADOS CLÍNICOS CONTINUAÇÃO</h3>
            <label for="plano"><b>TABAGISTA?</b></label>
            <label class="radio">SIM
                <input type="radio" checked="checked" name="radioT">
                <span class="checkmark"></span>
            </label>
            <label class="radio">NÃO
                <input type="radio" name="radioT">
                <span class="checkmark"></span>
            </label>
            <input type="text" placeholder="COMENTE" name="Cclini" value="{{old('Cclini',$Funcionarios['Cclini'])}}">

            <label for="plano"><b>DOÊNÇAS CRONICAS?</b></label>
            <label class="radio">SIM
                <input type="radio" checked="checked" name="radioC">
                <span class="checkmark"></span>
            </label>
            <label class="radio">NÃO
                <input type="radio" name="radioC">
                <span class="checkmark"></span>
            </label>
            <input type="text" placeholder="COMENTE" name="Cdoen" value="{{old('Cdoen',$Funcionarios['Cdoen'])}}">

            <label for="plano"><b>NEOPLASIA?</b></label>
            <label class="radio">SIM
                <input type="radio" checked="checked" name="radioN">
                <span class="checkmark"></span>
            </label>
            <label class="radio">NÃO
                <input type="radio" name="radioN">
                <span class="checkmark"></span>
            </label>
            <input type="text" placeholder="COMENTE" name="Cneopla" value="{{old('Cneopla',$Funcionarios['Cneopla'])}}">

            <label for="plano"><b>FÁRMACO HABITUAL?</b></label>
            <label class="radio">SIM
                <input type="radio" checked="checked" name="radioFA">
                <span class="checkmark"></span>
            </label>
            <label class="radio">NÃO
                <input type="radio" name="radioFA">
                <span class="checkmark"></span>
            </label>
            <input type="text" placeholder="COMENTE" name="Cfarma" value="{{old('Cfarma',$Funcionarios['Cfarma'])}}">
        </div>

        <div id="clinicos3" class="tab-pane fade">
            <!-- 7 Aba (DADODS CLINICOS)-->

            <h3>DADOS CLÍNICOS CONTINUAÇÃO</h3>

            <label for="plano"><b>USO DE DROGAS?</b></label>
            <label class="radio">SIM
                <input type="radio" checked="checked" name="radioDRO">
                <span class="checkmark"></span>
            </label>
            <label class="radio">NÃO
                <input type="radio" name="radioDRO">
                <span class="checkmark"></span>
            </label>
            <input type="text" placeholder="COMENTE" name="Cuso" value="{{old('Cuso',$Funcionarios['Cuso'])}}">

            <label for="plano"><b>ALERGIAS?</b></label>
            <label class="radio">SIM
                <input type="radio" checked="checked" name="radioAL">
                <span class="checkmark"></span>
            </label>
            <label class="radio">NÃO
                <input type="radio" name="radioAL">
                <span class="checkmark"></span>
            </label>
            <input type="text" placeholder="COMENTE" name="Calerg" value="{{old('Calerg',$Funcionarios['Calerg'])}}">

            <label for="plano"><b>ETILISTA?</b></label>
            <label class="radio">SIM
                <input type="radio" checked="checked" name="radioET">
                <span class="checkmark"></span>
            </label>
            <label class="radio">NÃO
                <input type="radio" name="radioET">
                <span class="checkmark"></span>
            </label>
            <input type="text" placeholder="COMENTE" name="Cetili" value="{{old('Cetili',$Funcionarios['Cetili'])}}">

            <label for="plano"><b>VACINA TOMADAS?</b></label>
            <label class="radio">SIM
                <input type="radio" checked="checked" name="radioVA">
                <span class="checkmark"></span>
            </label>
            <label class="radio">NÃO
                <input type="radio" name="radioVA">
                <span class="checkmark"></span>
            </label>
            <input type="text" placeholder="COMENTE" name="Cvacina" value="{{old('Cvacina',$Funcionarios['Cvacina'])}}">
        </div>

        <div id="clinicos4" class="tab-pane fade">
            <!-- 8 Aba (DADODS CLINICOS)-->
            <h3>DADOS CLÍNICOS CONTINUAÇÃO</h3>

            <label for="plano"><b>CIRURGIAS?</b></label>
            <label class="radio">SIM
                <input type="radio" checked="checked" name="radioCI">
                <span class="checkmark"></span>
            </label>
            <label class="radio">NÃO
                <input type="radio" name="radioCI">
                <span class="checkmark"></span>
            </label>
            <input type="text" placeholder="COMENTE" name="Ccirur" value="{{old('Ccirur',$Funcionarios['Ccirur'])}}">

            <label for="plano"><b>PORTADOR DE DOÊNÇAS SEXUALMENTE TRANSMISSÍVEIS?</b></label>
            <label class="radio">SIM
                <input type="radio" checked="checked" name="radioTRA">
                <span class="checkmark"></span>
            </label>
            <label class="radio">NÃO
                <input type="radio" name="radioTRA">
                <span class="checkmark"></span>
            </label>
            <input type="text" placeholder="COMENTE" name="Cporta" value="{{old('Cporta',$Funcionarios['Cporta'])}}">

            <label for="plano"><b>PORTADOR DE MARCAPASSO?</b></label>
            <label class="radio">SIM
                <input type="radio" checked="checked" name="radioMAR">
                <span class="checkmark"></span>
            </label>
            <label class="radio">NÃO
                <input type="radio" name="radioMAR">
                <span class="checkmark"></span>
            </label>
            <input type="text" placeholder="COMENTE" name="Cmarca" value="{{old('Cmarca',$Funcionarios['Cmarca'])}}">

            <label for="plano"><b>EPLIPSIA - CONSULÇÃO?</b></label>
            <label class="radio">SIM
                <input type="radio" checked="checked" name="radioEP">
                <span class="checkmark"></span>
            </label>
            <label class="radio">NÃO
                <input type="radio" name="radioEP">
                <span class="checkmark"></span>
            </label>
            <input type="text" placeholder="COMENTE" name="Ceplis" value="{{old('Ceplis',$Funcionarios['Ceplis'])}}"> </br>
        </div>

            <button class="button-ok">Atualizar Dados</button>

          </form>
@endsection