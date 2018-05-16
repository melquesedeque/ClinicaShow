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

            <form action=" {{ route('paciente-salvar') }} " style="border:#ccc">

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
                    @endifs

                    <label for="nome"><b>NOME</b></label>
                    <input type="text" placeholder="Enter com seu Nome" name="Nome" value=" {{old('Nome')}} ">

                    <label for="matricula"><b>MATRICULA</b></label>
                    <input type="text" placeholder="Enter com sua Matricula" name="Matricula" value=" {{old('Matricula')}} ">

                    <label for="cpf"><b>CPF</b></label>
                    <input type="text" placeholder="XXX.XXX.XXX-XX" name="Cpf" value=" {{old('Cpf')}} " maxlength="14" OnKeyPress="formatar('###.###.###-##', this)" class="nao">

                    <label for="rg"><b>RG</b></label>
                    <input type="text" placeholder="Entre com seu RG" name="Rg" value=" {{old('Rg')}} ">

                    <label for="telefone"><b>TELEFONE</b></label>
                    <input type="text" placeholder="(XX) X XXXX-XXXX" name="Telefone" value=" {{old('Telefone')}} " maxlength="12" OnKeyPress="formatar('##-####-####', this)" class="nao">

                    <label class="col-sm-2 control_label" for="data">Data</label>
                    <div class="input-group date">
                        <input type="text" class="form-control" id="Data" OnKeyPress="formatar('##/##/####', this)" maxlength="10">
                        <div class="input-group-addon">
                            <span class="glyphicon glyphicon-th"></span>
                        </div>
                    </div>

                    <label for="naturalidade"><b>NATURALIDADE</b></label>
                    </br>
                    <select class="form-control" id="gender1" name="natu" value=" {{old('natu')}} ">
                        <option value="0">BRASIL</option>
                        <option value="1">ARGENTINA</option>
                        <option value="2">CHILE</option>
                        <option value="3">COLÔMBIA</option>
                        <option value="4">ESTADOS UNIDOS</option>
                        <option value="5">CANADÁ</option>
                        <option value="6">MÉXICO</option>
                        <option value="7">PORTUGAL</option>
                        <option value="8">FRANÇA</option>
                        <option value="9">ITáLIA</option>
                        <option value="10">RÚSSIA</option>
                        <option value="11">JAPÃO</option>
                        <option value="12">CHINA</option>
                    </select>
                    </br>

                    <label for="sexo"><b>SEXO</b></label>
                    <select class="form-control" id="gender1" name="sexo" value=" {{old('sexo')}} ">
                        <option value="MASC">MASCULINO</option>
                        <option value="FEMIN">FEMININO</option>
                        <option value="OUTRO">OUTRO</option>
                    </select>
                    </br>

                    <label for="estado"><b>ESTADO CIVIL</b></label>
                    <select class="form-control" id="gender1" name="estado" value="{{old('estado')}}">
                        <option value="casado">CASADO</option>
                        <option value="solteiro">SOLTEIRO</option>
                        <option value="viuvo">VIUVO</option>
                        <option value="divorciado">DIVORCIADO</option>
                    </select>
                    </br>

                    <label for="Email"><b>E-MAIL</b></label>
                    <input type="text" placeholder="Entre com seu Email@email.com" name="Email" value="{{old('Email')}}">

                    <label for="escola"><b>ESCOLARIDADE</b></label>
                    <select class="form-control" id="gender1" name="escola" value="{{old('escola')}}">
                        <option value="0">FUNDAMENTAL-INCOMPLETO</option>
                        <option value="1">FUNDAMENTAL-COMPLETO</option>
                        <option value="2">SEGUNDO GRAU-INCOMPLETO</option>
                        <option value="3">SEGUNDO GRAU-COMPLETO</option>
                        <option value="4">SUPERIOR-INCOMPLETO</option>
                        <option value="5">SUPERIOR-COMPLETO</option>
                        <option value="6">MESTRADO-INCOMPLETO</option>
                        <option value="7">MESTRADO-COMPLETO</option>
                    </select>
                    </br>

                    <label for="profi"><b>PROFISSÃO</b></label>
                    <select class="form-control" id="gender1" name="profi" value="{{old('profi')}}">
                        <option value="0">MÉDICO</option>
                        <option value="1">ENFERMEIRO</option>
                        <option value="2">ARQUITETO</option>
                        <option value="3">ENGENHEIRO</option>
                        <option value="4">FISIOTERAPEUTA</option>
                        <option value="5">ANALISTA DE SISTEMAAS</option>
                        <option value="6">PROGRAMADOR</option>
                        <option value="7">DENTISTA</option>
                        <option value="8">PEDREIRO</option>
                        <option value="9">SEGURANÇA</option>
                        <option value="10">ADIMINISTRAÇÃO</option>
                        <option value="11">FARMACIA</option>
                        <option value="12">EDUÇÃO FÍSICA</option>
                    </select>
                    </br>
                </div>

        </div>

        <div id="Endereco" class="tab-pane fade">
            <!-- 2 Aba (aba dos enderço)-->
            <h3>Endereço</h3>
            <label for="Cep"><b>CEP</b></label>
            <input type="text" placeholder="Enter com seu CEP" name="Cep" value="{{old('Cep')}}" maxlength="9" OnKeyPress="formatar('#####-###', this)" class="nao">

            <label for="Uf"><b>UF</b></label>
            <input type="text" placeholder="Entre com seu UF" name="Uf" rvalue="{{old('Uf')}}">

            <label for="cidade"><b>CIDADE</b></label>
            <select class="form-control" id="gender1" name="cidade" value="{{old('cidade')}}">
                <option value="0">MACEIÓ</option>
                <option value="1">CORURIPE</option>
                <option value="2">RIO DE JANEIRO</option>
                <option value="3">SÃO PAULO</option>
                <option value="4">PARANA</option>
                <option value="5">SANTA CATARINA</option>
                <option value="6">RECIFE</option>
                <option value="7">BAHIA</option>
                <option value="8">SERGIPE</option>
                <option value="9">PERNABUCO</option>
                <option value="10">GOIAS</option>
                <option value="11">AMAZONAS</option>
                <option value="12">FLORIPA</option>
            </select>
            </br>

            <label for="Endereco"><b>ENDEREÇO</b></label>
            <input type="text" placeholder="Entre com seu Endereço" name="Endereco" value="{{old('Endereco')}}">

            <label for="Bairro"><b>BAIRRO</b></label>
            <input type="text" placeholder="Entre com seu Bairro" name="Bairro" value="{{old('Bairro')}}">

            <label for="Numero"><b>NÚMERO</b></label>
            <input type="text" placeholder="Entre com seu Número" name="Numero" value="{{old('Numero')}}">

            <label for="Complemento"><b>COMPLEMENTO</b></label>
            <input type="text" placeholder="Entre com seu Complemento" name="Complemento" value="{{old('Complemento')}}">
        </div>

        <div id="Contato" class="tab-pane fade">
            <!-- 3 Aba (aba dos contatos)-->
            <h3>Contatos</h3>
            <label for="Parente"><b>RESPONSAVEL/PARENTE 1 NOME</b></label>
            <input type="text" placeholder="Entre com seu nome" name="Parente" value="{{old('Parente')}}">

            <label for="Parentent-tele"><b>RESPONSAVEL/PARENTE  1 TELEFONE</b></label>
            <input type="text" placeholder="Entre com seu Telefone" name="Parentent-tele" value="{{old('Parentent-tele')}}">

            <label for="Parente-1"><b>RESPONSAVEL/PARENTE 2 NOME</b></label>
            <input type="text" placeholder="Entre com seu nome" name="Parente-1" value="{{old('Parente-1')}}">

            <label for="Parentent-tele-1"><b>RESPONSAVEL/PARENTE 2 TELEFONE</b></label>
            <input type="text" placeholder="Entre com seu Telefone" name="Parentent-tele-1" value="{{old('Parentent-tele-1')}}">
        </div>

        <div id="financeiro" class="tab-pane fade">
            <!-- 4 Aba (aba dos financeiro)-->
            <h3>Finânceiro</h3>

            <label for="convenio"><b>CONVÊNIO</b></label>
            <select class="form-control" id="gender1" name="convenio" value="{{old('convenio')}}">
                <option value="">UNIMED</option>
                <option value="">HAPVIDA</option>
                <option value="">SANDANDER</option>
                <option value="">AMIL</option>
            </select>
            </br>

            <label for="Plano"><b>PLANO</b></label>
            <input type="text" placeholder="Entre com seu Plano" name="Plano" value="{{old('Plano')}}">

            <label for="Inscricao"><b>INSCRIÇÃO</b></label>
            <input type="text" placeholder="Entre com sua Inscrição" name="Inscricao" value="{{old('Inscricao')}}">

            <label for="Validade"><b>VALIDADE</b></label>
            <input type="text" placeholder="Entre com sua Validade" name="Validade" value="{{old('Validade')}}">
        </div>

        <div id="clinicos1" class="tab-pane fade">
            <!-- 5 Aba (aba dos dados clinicos)-->

            <h3>DADOS CLÍNICOS</h3>
            <label for="cor"><b>COR DA PELE</b></label>
            <select class="form-control" id="gender1" name="cor" value="{{old('cor')}}">
                <option value="">BRANCA</option>
                <option value="">PARDA</option>
                <option value="">PRETA</option>
                <option value="">AMARELO</option>
                <option value="">INDÍGINA</option>
            </select>
            </br>

            <label for="Peso"><b>PESO</b></label>
            <input type="text" placeholder="Entre com seu Peso" name="Peso" value="{{old('Peso')}}">

            <label for="Altura"><b>ALTURA</b></label>
            <input type="text" placeholder="Entre com sua Altura" name="Altura" value="{{old('Altura')}}">

            <label for="rh"><b>FATOR RH</b></label>
            <select class="form-control" id="gender1" name="rh" value="{{old('rh')}}">
                <option value="">RH+</option>
                <option value="">RH-</option>
            </select>
            </br>

            <label for="tipo"><b>TIPO SANGUINIO</b></label>
            <select class="form-control" id="gender1" name="tipo" value="{{old('tipo')}}">
                <option value="">A+</option>
                <option value="">A-</option>
                <option value="">B+</option>
                <option value="">B-</option>
                <option value="">AB+</option>
                <option value="">AB-</option>
                <option value="">O+</option>
                <option value="">O-</option>
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
            <input type="text" placeholder="COMENTE" name="Chere" value="{{old('Chere')}}">

            <label for="plano"><b>DIABETES?</b></label>
            <label class="radio">SIM
                <input type="radio" checked="checked" name="radioD">
                <span class="checkmark"></span>
            </label>
            <label class="radio">NÃO
                <input type="radio" name="radioD">
                <span class="checkmark"></span>
            </label>
            <input type="text" placeholder="COMENTE" name="CDiab" value="{{old('CDiab')}}">

            <label for="plano"><b>HIPERTENSÃO?</b></label>
            <label class="radio">SIM
                <input type="radio" checked="checked" name="radioHI">
                <span class="checkmark"></span>
            </label>
            <label class="radio">NÃO
                <input type="radio" name="radioHI">
                <span class="checkmark"></span>
            </label>
            <input type="text" placeholder="COMENTE" name="Chiper" value="{{old('Chiper')}}">

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
            <input type="text" placeholder="COMENTE" name="Cclini" value="{{old('Cclini')}}">

            <label for="plano"><b>DOÊNÇAS CRONICAS?</b></label>
            <label class="radio">SIM
                <input type="radio" checked="checked" name="radioC">
                <span class="checkmark"></span>
            </label>
            <label class="radio">NÃO
                <input type="radio" name="radioC">
                <span class="checkmark"></span>
            </label>
            <input type="text" placeholder="COMENTE" name="Cdoen" value="{{old('Cdoen')}}">

            <label for="plano"><b>NEOPLASIA?</b></label>
            <label class="radio">SIM
                <input type="radio" checked="checked" >
                <span class="checkmark"></span>
            </label>
            <label class="radio">NÃO
                <input type="radio" name="radioN">Z
                <span class="checkmark"></span>
            </label>
            <input type="text" placeholder="COMENTE" name="Cneopla" value="{{old('Cneopla')}}">

            <label for="plano"><b>FÁRMACO HABITUAL?</b></label>
            <label class="radio">SIM
                <input type="radio" checked="checked" name="radioFA">
                <span class="checkmark"></span>
            </label>
            <label class="radio">NÃO
                <input type="radio" name="radioFA">
                <span class="checkmark"></span>
            </label>
            <input type="text" placeholder="COMENTE" name="Cfarma" value="{{old('Cfarma')}}">
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
            <input type="text" placeholder="COMENTE" name="Cuso" value="{{old('Cuso')}}">

            <label for="plano"><b>ALERGIAS?</b></label>
            <label class="radio">SIM
                <input type="radio" checked="checked" name="radioAL">
                <span class="checkmark"></span>
            </label>
            <label class="radio">NÃO
                <input type="radio" name="radioAL">
                <span class="checkmark"></span>
            </label>
            <input type="text" placeholder="COMENTE" name="Calerg" value="{{old('Calerg')}}">

            <label for="plano"><b>ETILISTA?</b></label>
            <label class="radio">SIM
                <input type="radio" checked="checked" name="radioET">
                <span class="checkmark"></span>
            </label>
            <label class="radio">NÃO
                <input type="radio" name="radioET">
                <span class="checkmark"></span>
            </label>
            <input type="text" placeholder="COMENTE" name="Cetili" value="{{old('Cetili')}}">

            <label for="plano"><b>VACINA TOMADAS?</b></label>
            <label class="radio">SIM
                <input type="radio" checked="checked" name="radioVA">
                <span class="checkmark"></span>
            </label>
            <label class="radio">NÃO
                <input type="radio" name="radioVA">
                <span class="checkmark"></span>
            </label>
            <input type="text" placeholder="COMENTE" name="Cvacina" value="{{old('Cvacina')}}">
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
            <input type="text" placeholder="COMENTE" name="Ccirur" value="{{old('Ccirur')}}">

            <label for="plano"><b>PORTADOR DE DOÊNÇAS SEXUALMENTE TRANSMISSÍVEIS?</b></label>
            <label class="radio">SIM
                <input type="radio" checked="checked" name="radioTRA">
                <span class="checkmark"></span>
            </label>
            <label class="radio">NÃO
                <input type="radio" name="radioTRA">
                <span class="checkmark"></span>
            </label>
            <input type="text" placeholder="COMENTE" name="Cporta" value="{{old('Cporta')}}">

            <label for="plano"><b>PORTADOR DE MARCAPASSO?</b></label>
            <label class="radio">SIM
                <input type="radio" checked="checked" name="radioMAR">
                <span class="checkmark"></span>
            </label>
            <label class="radio">NÃO
                <input type="radio" name="radioMAR">
                <span class="checkmark"></span>
            </label>
            <input type="text" placeholder="COMENTE" name="Cmarca" value="{{old('Cmarca')}}">

            <label for="plano"><b>EPLIPSIA - CONSULÇÃO?</b></label>
            <label class="radio">SIM
                <input type="radio" checked="checked" name="radioEP">
                <span class="checkmark"></span>
            </label>
            <label class="radio">NÃO
                <input type="radio" name="radioEP">
                <span class="checkmark"></span>
            </label>
            <input type="text" placeholder="COMENTE" name="Ceplis" value="{{old('Ceplis')}}"> </br>

            <button class="button-ok">CONCLUIR</button>
        </div>
        </form>

        <script>
            $('#Data').datepicker({
                format: 'dd/mm/yyyy',
                language:"pt-BR",
            });
        
            function formatar(mascara, documento){ // Para a Data
                var i = documento.value.length;
                var saida = mascara.substring(0,1);
                var texto = mascara.substring(i)
                
                if (texto.substring(0,1) != saida){
                            documento.value += texto.substring(0,1);
                }
                
            }

            function formatar(mascara, documento){ // Mascara dos campos

                var i = documento.value.length;
                var saida = mascara.substring(0,1);
                var texto = mascara.substring(i)
                
                    if (texto.substring(0,1) != saida){
                        documento.value += texto.substring(0,1);
                    }
                
                }
            
                $(document).ready(function() { // Para Não permitir C,V,X
                    $('.nao').bind('cut copy paste', function(event) {
                        event.preventDefault();
                    }); 
                });
        </script>
@endsection