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

            <form action="{{ route('paciente-atualizar', ['id' => $pacientes['id']]) }}" style="border:#ccc">

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

                    <label for="nome"><b>NOME</b></label>
                    <input type="text" placeholder="Enter com seu Nome" name="Nome" value="{{old('Nome',$pacientes['Nome'])}}">

                    <label for="matricula"><b>MATRICULA</b></label>
                    <input type="text" placeholder="Enter com sua Matricula" name="Matricula" value=" {{old('Matricula',$pacientes['Matricula'])}} ">

                    <label for="cpf"><b>CPF</b></label>
                    <input type="text" placeholder="XXX.XXX.XXX-XX" name="Cpf" value=" {{old('Cpf',$pacientes['Cpf'])}} " maxlength="14"  class="nao">

                    <label for="rg"><b>RG</b></label>
                    <input type="text" placeholder="Entre com seu RG" name="Rg" value=" {{old('Rg',$pacientes['Rg'])}} ">

                    <label for="telefone"><b>TELEFONE</b></label>
                    <input type="text" placeholder="(XX) X XXXX-XXXX" name="Telefone-p" value=" {{old('Telefone-p',$pacientes['Telefone-p'])}} " maxlength="12"  class="nao">

                    <label class="col-sm-2 control_label" for="Data">Data</label>
                    {{-- <div class="input-group date"> --}}
                        <input type="date" class="form-control" id="Data" name="Data" maxlength="10" value=" {{old('Data',$pacientes['Data'])}} ">
                        {{-- <div class="input-group-addon">
                            <span class="glyphicon glyphicon-th"></span>
                        </div>
                    </div> --}}

                    <label for="naturalidade"><b>NATURALIDADE</b></label>
                    </br>
                    <select class="form-control" id="gender1" name="Naturalidade" value=" {{old('Naturalidade',$pacientes['Naturalidade'])}} ">
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
                    </br>

                    <label for="sexo"><b>SEXO</b></label>
                    <select class="form-control" id="gender1" name="sexo" value=" {{old('sexo',$pacientes['sexo'])}} ">
                        <option value="MASC">MASCULINO</option>
                        <option value="FEMIN">FEMININO</option>
                        <option value="OUTRO">OUTRO</option>
                    </select>
                    </br>

                    <label for="estado"><b>ESTADO CIVIL</b></label>
                    <select class="form-control" id="gender1" name="estado" value="{{old('estado',$pacientes['estado'])}}">
                        <option value="casado">CASADO</option>
                        <option value="solteiro">SOLTEIRO</option>
                        <option value="viuvo">VIUVO</option>
                        <option value="divorciado">DIVORCIADO</option>
                    </select>
                    </br>

                    <label for="Email"><b>E-MAIL</b></label>
                    <input type="text" placeholder="Entre com seu Email@email.com" name="Email" value="{{old('Email',$pacientes['Email'])}}">

                    <label for="escola"><b>ESCOLARIDADE</b></label>
                    <select class="form-control" id="gender1" name="escola" value="{{old('escola',$pacientes['escola'])}}">
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

                    <label for="profi"><b>PROFISSÃO</b></label>
                    <select class="form-control" id="gender1" name="profi" value="{{old('profi',$pacientes['profi'])}}">
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
                </div>

        </div>

        <div id="Endereco" class="tab-pane fade">
            <!-- 2 Aba (aba dos enderço)-->
            <h3>Endereço</h3>
            <label for="Cep"><b>CEP</b></label>
            <input type="text" placeholder="Enter com seu CEP" name="Cep" value="{{old('Cep',$pacientes['Cep'])}}">

            <label for="Uf"><b>UF</b></label>
            <input type="text" placeholder="Entre com seu UF" name="Uf" rvalue="{{old('Uf',$pacientes['Uf'])}}">

            <label for="cidade"><b>CIDADE</b></label>
            <select class="form-control" id="gender1" name="cidade" value="{{old('cidade',$pacientes['cidade'])}}">
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

            <label for="Endereco"><b>ENDEREÇO</b></label>
            <input type="text" placeholder="Entre com seu Endereço" name="Endereco" value="{{old('Endereco',$pacientes['Endereco'])}}">

            <label for="Bairro"><b>BAIRRO</b></label>
            <input type="text" placeholder="Entre com seu Bairro" name="Bairro" value="{{old('Bairro',$pacientes['Bairro'])}}">

            <label for="Numero"><b>NÚMERO</b></label>
            <input type="text" placeholder="Entre com seu Número" name="Numero" value="{{old('Numero',$pacientes['Numero'])}}">

            <label for="Complemento"><b>COMPLEMENTO</b></label>
            <input type="text" placeholder="Entre com seu Complemento" name="Complemento" value="{{old('Complemento',$pacientes['Complemento'])}}">
        </div>

        <div id="Contato" class="tab-pane fade">
            <!-- 3 Aba (aba dos contatos)-->
            <h3>Contatos</h3>
            <label for="Parente"><b>RESPONSAVEL/PARENTE 1 NOME</b></label>
            <input type="text" placeholder="Entre com seu nome" name="Parente" value="{{old('Parente',$pacientes['Parente'])}}">

            <label for="Parentent-tele"><b>RESPONSAVEL/PARENTE  1 TELEFONE</b></label>
            <input type="text" placeholder="Entre com seu Telefone" name="Parentent-tele" value="{{old('Parentent-tele',$pacientes['Parentent-tele'])}}">

            <label for="Parente-1"><b>RESPONSAVEL/PARENTE 2 NOME</b></label>
            <input type="text" placeholder="Entre com seu nome" name="Parente-1" value="{{old('Parente-1',$pacientes['Parente-1'])}}">

            <label for="Parentent-tele-1"><b>RESPONSAVEL/PARENTE 2 TELEFONE</b></label>
            <input type="text" placeholder="Entre com seu Telefone" name="Parentent-tele-1" value="{{old('Parentent-tele-1',$pacientes['Parentent-tele-1'])}}">
        </div>

        <div id="financeiro" class="tab-pane fade">
            <!-- 4 Aba (aba dos financeiro)-->
            <h3>Finânceiro</h3>

            <label for="convenio"><b>CONVÊNIO</b></label>
            <select class="form-control" id="gender1" name="convenio" value="{{old('convenio',$pacientes['convenio'])}}">
                <option value="UNIMED">UNIMED</option>
                <option value="HAPVIDA">HAPVIDA</option>
                <option value="SANDANDER">SANDANDER</option>
                <option value="AMIL">AMIL</option>
            </select>
            </br>

            <label for="Plano"><b>PLANO</b></label>
            <input type="text" placeholder="Entre com seu Plano" name="Plano" value="{{old('Plano',$pacientes['Plano'])}}">

            <label for="Inscricao"><b>INSCRIÇÃO</b></label>
            <input type="text" placeholder="Entre com sua Inscrição" name="Inscricao" value="{{old('Inscricao',$pacientes['Inscricao'])}}">

            <label for="Validade"><b>VALIDADE</b></label>
            <input type="date" placeholder="Entre com sua Validade" name="Validade" value="{{old('Validade',$pacientes['Validade'])}}">
        </div>

        <div id="clinicos1" class="tab-pane fade">
            <!-- 5 Aba (aba dos dados clinicos)-->

            <h3>DADOS CLÍNICOS</h3>
            <label for="cor"><b>COR DA PELE</b></label>
            <select class="form-control" id="gender1" name="cor" value="{{old('cor',$pacientes['cor'])}}">
                <option value="BRANCA">BRANCA</option>
                <option value="PARDA">PARDA</option>
                <option value="PRETA">PRETA</option>
                <option value="AMARELO">AMARELO</option>
                <option value="INDÍGINA">INDÍGINA</option>
            </select>
            </br>

            <label for="Peso"><b>PESO</b></label>
            <input type="text" placeholder="Entre com seu Peso" name="Peso" value="{{old('Peso',$pacientes['Peso'])}}">

            <label for="Altura"><b>ALTURA</b></label>
            <input type="text" placeholder="Entre com sua Altura" name="Altura" value="{{old('Altura',$pacientes['Altura'])}}">

            <label for="rh"><b>FATOR RH</b></label>
            <select class="form-control" id="gender1" name="rh" value="{{old('rh',$pacientes['rh'])}}">
                <option value="RH+">RH+</option>
                <option value="RH-">RH-</option>
            </select>
            </br>

            <label for="tipo"><b>TIPO SANGUINIO</b></label>
            <select class="form-control" id="gender1" name="tipo" value="{{old('tipo',$pacientes['tipo'])}}">
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
                <input type="radio" checked="checked" name="radioH" value="sim">
                <span class="checkmark"></span>
            </label>
            <label class="radio">NÃO
                <input type="radio" name="radioH" value="não" >
                <span class="checkmark"></span>
            </label>
            <input type="text" placeholder="COMENTE" name="Chere" value="{{old('Chere',$pacientes['Chere'])}}">

            <label for="plano"><b>DIABETES?</b></label>
            <label class="radio">SIM
                <input type="radio" checked="checked" name="radioD" value="sim">
                <span class="checkmark"></span>
            </label>
            <label class="radio">NÃO
                <input type="radio" name="radioD" value="nao">
                <span class="checkmark"></span>
            </label>
            <input type="text" placeholder="COMENTE" name="CDiab" value="{{old('CDiab',$pacientes['CDiab'])}}">

            <label for="plano"><b>HIPERTENSÃO?</b></label>
            <label class="radio">SIM
                <input type="radio" checked="checked" name="radioHI" value="sim">
                <span class="checkmark"></span>
            </label>
            <label class="radio">NÃO
                <input type="radio" name="radioHI" value="não">
                <span class="checkmark"></span>
            </label>
            <input type="text" placeholder="COMENTE" name="Chiper" value="{{old('Chiper',$pacientes['Chiper'])}}">

        </div>

        <div id="clinicos2" class="tab-pane fade">
            <!-- 6 Aba (DADODS CLINICOS)-->

            <h3>DADOS CLÍNICOS CONTINUAÇÃO</h3>
            <label for="plano"><b>TABAGISTA?</b></label>
            <label class="radio">SIM
                <input type="radio" checked="checked" name="radioT" value="sim">
                <span class="checkmark"></span>
            </label>
            <label class="radio">NÃO
                <input type="radio" name="radioT" value="não">
                <span class="checkmark"></span>
            </label>
            <input type="text" placeholder="COMENTE" name="Cclini" value="{{old('Cclini',$pacientes['Cclini'])}}">

            <label for="plano"><b>DOÊNÇAS CRONICAS?</b></label>
            <label class="radio">SIM
                <input type="radio" checked="checked" name="radioC" value="sim">
                <span class="checkmark"></span>
            </label>
            <label class="radio">NÃO
                <input type="radio" name="radioC" value="não"
                <span class="checkmark"></span>
            </label>
            <input type="text" placeholder="COMENTE" name="Cdoen" value="{{old('Cdoen',$pacientes['Cdoen'])}}">

            <label for="plano"><b>NEOPLASIA?</b></label>
            <label class="radio">SIM
                <input type="radio" checked="checked" name="radioN" value="sim">
                <span class="checkmark"></span>
            </label>
            <label class="radio">NÃO
                <input type="radio" name="radioN" value="não"
                <span class="checkmark"></span>
            </label>
            <input type="text" placeholder="COMENTE" name="Cneopla" value="{{old('Cneopla',$pacientes['Cneopla'])}}">

            <label for="plano"><b>FÁRMACO HABITUAL?</b></label>
            <label class="radio">SIM
                <input type="radio" checked="checked" name="radioFA" value="sim">
                <span class="checkmark"></span>
            </label>
            <label class="radio">NÃO
                <input type="radio" name="radioFA" value="não">
                <span class="checkmark"></span>
            </label>
            <input type="text" placeholder="COMENTE" name="Cfarma" value="{{old('Cfarma',$pacientes['Cfarma'])}}">
        </div>

        <div id="clinicos3" class="tab-pane fade">
            <!-- 7 Aba (DADODS CLINICOS)-->

            <h3>DADOS CLÍNICOS CONTINUAÇÃO</h3>

            <label for="plano"><b>USO DE DROGAS?</b></label>
            <label class="radio">SIM
                <input type="radio" checked="checked" name="radioDRO" value="sim">
                <span class="checkmark"></span>
            </label>
            <label class="radio">NÃO
                <input type="radio" name="radioDRO" value="não">
                <span class="checkmark"></span>
            </label>
            <input type="text" placeholder="COMENTE" name="Cuso" value="{{old('Cuso',$pacientes['Cuso'])}}">

            <label for="plano"><b>ALERGIAS?</b></label>
            <label class="radio">SIM
                <input type="radio" checked="checked" name="radioAL" value="sim">
                <span class="checkmark"></span>
            </label>
            <label class="radio">NÃO
                <input type="radio" name="radioAL" value="não">
                <span class="checkmark"></span>
            </label>
            <input type="text" placeholder="COMENTE" name="Calerg" value="{{old('Calerg',$pacientes['Calerg'])}}">

            <label for="plano"><b>ETILISTA?</b></label>
            <label class="radio">SIM
                <input type="radio" checked="checked" name="radioET" value="sim">
                <span class="checkmark"></span>
            </label>
            <label class="radio">NÃO
                <input type="radio" name="radioET" value="não">
                <span class="checkmark"></span>
            </label>
            <input type="text" placeholder="COMENTE" name="Cetili" value="{{old('Cetili',$pacientes['Cetili'])}}">

            <label for="plano"><b>VACINA TOMADAS?</b></label>
            <label class="radio">SIM
                <input type="radio" checked="checked" name="radioVA" value="sim">
                <span class="checkmark"></span>
            </label>
            <label class="radio">NÃO
                <input type="radio" name="radioVA" value="não">
                <span class="checkmark"></span>
            </label>
            <input type="text" placeholder="COMENTE" name="Cvacina" value="{{old('Cvacina',$pacientes['Cvacina'])}}">
        </div>

        <div id="clinicos4" class="tab-pane fade">
            <!-- 8 Aba (DADODS CLINICOS)-->
            <h3>DADOS CLÍNICOS CONTINUAÇÃO</h3>

            <label for="plano"><b>CIRURGIAS?</b></label>
            <label class="radio">SIM
                <input type="radio" checked="checked" name="radioCI" value="sim">
                <span class="checkmark"></span>
            </label>
            <label class="radio">NÃO
                <input type="radio" name="radioCI" value="não">
                <span class="checkmark"></span>
            </label>
            <input type="text" placeholder="COMENTE" name="Ccirur" value="{{old('Ccirur',$pacientes['Ccirur'])}}">

            <label for="plano"><b>PORTADOR DE DOÊNÇAS SEXUALMENTE TRANSMISSÍVEIS?</b></label>
            <label class="radio">SIM
                <input type="radio" checked="checked" name="radioTRA" value="sim">
                <span class="checkmark"></span>
            </label>
            <label class="radio">NÃO
                <input type="radio" name="radioTRA" value="não">
                <span class="checkmark"></span>
            </label>
            <input type="text" placeholder="COMENTE" name="Cporta" value="{{old('Cporta',$pacientes['Cporta'])}}">

            <label for="plano"><b>PORTADOR DE MARCAPASSO?</b></label>
            <label class="radio">SIM
                <input type="radio" checked="checked" name="radioMAR" value="sim">
                <span class="checkmark"></span>
            </label>
            <label class="radio">NÃO
                <input type="radio" name="radioMAR" value="não">
                <span class="checkmark"></span>
            </label>
            <input type="text" placeholder="COMENTE" name="Cmarca" value="{{old('Cmarca',$pacientes['Cmarca'])}}">

            <label for="plano"><b>EPLIPSIA - CONSULÇÃO?</b></label>
            <label class="radio">SIM
                <input type="radio" checked="checked" name="radioEP" value="sim">
                <span class="checkmark"></span>
            </label>
            <label class="radio">NÃO
                <input type="radio" name="radioEP" value="não">
                <span class="checkmark"></span>
            </label>
            <input type="text" placeholder="COMENTE" name="Ceplis" value="{{old('Ceplis',$pacientes['Ceplis'])}}"> </br>
        </div>

        <button class="button-ok">Alterar Dados</button>
        </form>
@endsection