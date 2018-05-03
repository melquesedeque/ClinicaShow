<!DOCTYPE html>
<html>

<head>
    <link rel="icon" href="{{asset('assets/img/estero.png')}}" type="image/gif" sizes="16x16">
    <title>Clínica Show</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href=" {{asset('assets/css/cadastrar.css')}} ">
</head>

<body>

  <nav class="navbar navbar-default" id="nav">
    <!-- nemu do site -->
    <div class="container">
        <div class="navbar-header">    
            <a class="navbar-brand" href={ { route( 'conta') }}>Clínica Show</a>
            <!--  bota imagem aqui do tamanho já correto-->
            <button class="navbar-toggle glyphicon glyphicon-menu-hamburger" data-toggle="collapse" data-target="#lista_show"></button>
        </div>

        <ul id="lista_show" class="nav navbar-nav navbar-right collapse navbar-collapse">
            <li class="active"><a href={{route( 'cadastrar-paciente')}}>Cadastrar Paciente</a></li>
            <li><a href={{ route( 'cadastrar-funcionario') }}>Cadastrar Funcionário</a></li>
            <li><a href={{ route( 'consuta') }}>Consulta</a></li>
            <li><a href={{ route( 'conta') }}>Conta</a></li>
        </ul>
    </div>
  </nav>

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

                    <h1>Dados Paciente</h1> 
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
                    <input type="text" placeholder="Enter com seu Nome" name="Nome" required>

                    <label for="matricula"><b>MATRICULA</b></label>
                    <input type="text" placeholder="Enter com sua Matricula" name="Matricula" required>

                    <label for="cpf"><b>CPF</b></label>
                    <input type="text" placeholder="XXX.XXX.XXX-XX" name="Cpf" required>

                    <label for="rg"><b>RG</b></label>
                    <input type="text" placeholder="Entre com seu RG" name="Rg" required>

                    <label for="telefone"><b>TELEFONE</b></label>
                    <input type="text" placeholder="(XX) X XXXX-XXXX" name="Telefone" required>

                    <label for="dataN"><b>DATA NASCIMENTO</b></label>
                    <input type="text" placeholder="DD/MM/YYYY" name="Data" required>

                    <label for="naturalidade"><b>NATURALIDADE</b></label>
                    </br>
                    <select class="form-control" id="gender1">
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
                    <select class="form-control" id="gender1">
                        <option value="MASC">MASCULINO</option>
                        <option value="FEMIN">FEMININO</option>
                        <option value="OUTRO">OUTRO</option>
                    </select>
                    </br>

                    <label for="civil"><b>ESTADO CIVIL</b></label>
                    <select class="form-control" id="gender1">
                        <option value="casado">CASADO</option>
                        <option value="solteiro">SOLTEIRO</option>
                        <option value="viuvo">VIUVO</option>
                        <option value="divorciado">DIVORCIADO</option>
                    </select>
                    </br>

                    <label for="e-mail"><b>E-MAIL</b></label>
                    <input type="text" placeholder="Entre com seu Email@email.com" name="Email" required>

                    <label for="escolaridade"><b>ESCOLARIDADE</b></label>
                    <select class="form-control" id="gender1">
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

                    <label for="profissao"><b>PROFISSÃO</b></label>
                    <select class="form-control" id="gender1">
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
            <label for="CEP"><b>CEP</b></label>
            <input type="text" placeholder="Enter com seu CEP" name="Cep" required>

            <label for="uf"><b>UF</b></label>
            <input type="text" placeholder="Entre com seu UF" name="Uf" required>

            <label for="cidade"><b>CIDADE</b></label>
            <select class="form-control" id="gender1">
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

            <label for="endereco"><b>ENDEREÇO</b></label>
            <input type="text" placeholder="Entre com seu Endereço" name="Endereco" required>

            <label for="bairro"><b>BAIRRO</b></label>
            <input type="text" placeholder="Entre com seu Bairro" name="Bairro" required>

            <label for="numero"><b>NÚMERO</b></label>
            <input type="text" placeholder="Entre com seu Número" name="Numero" required>

            <label for="complemento"><b>COMPLEMENTO</b></label>
            <input type="text" placeholder="Entre com seu Complemento" name="Complemento" required>
        </div>

        <div id="Contato" class="tab-pane fade">
            <!-- 3 Aba (aba dos contatos)-->
            <h3>Contatos</h3>
            <label for="parente"><b>RESPONSAVEL/PARENTE 1 NOME</b></label>
            <input type="text" placeholder="Entre com seu nome" name="Parente" required>

            <label for="parentent-tele"><b>RESPONSAVEL/PARENTE  1 TELEFONE</b></label>
            <input type="text" placeholder="Entre com seu Telefone" name="Parentent-tele" required>

            <label for="parente-1"><b>RESPONSAVEL/PARENTE 2 NOME</b></label>
            <input type="text" placeholder="Entre com seu nome" name="Parente-1" required>

            <label for="parentent-tele-1"><b>RESPONSAVEL/PARENTE 2 TELEFONE</b></label>
            <input type="text" placeholder="Entre com seu Telefone" name="Parentent-tele-1" required>
        </div>

        <div id="financeiro" class="tab-pane fade">
            <!-- 4 Aba (aba dos financeiro)-->
            <h3>Finânceiro</h3>

            <label for="parente"><b>CONVÊNIO</b></label>

            <select class="form-control" id="gender1">
                <option value="">UNIMED</option>
                <option value="">HAPVIDA</option>
                <option value="">SANDANDER</option>
                <option value="">AMIL</option>
            </select>
            </br>

            <label for="plano"><b>PLANO</b></label>
            <input type="text" placeholder="Entre com seu Plano" name="Plano" required>

            <label for="inscricao"><b>INSCRIÇÃO</b></label>
            <input type="text" placeholder="Entre com sua Inscrição" name="Inscricao" required>

            <label for="validade"><b>VALIDADE</b></label>
            <input type="text" placeholder="Entre com sua Validade" name="Validade" required>
        </div>

        <div id="clinicos1" class="tab-pane fade">
            <!-- 5 Aba (aba dos dados clinicos)-->
            <h3>DADOS CLÍNICOS</h3>
            <label for="parente"><b>COR DA PELE</b></label>
            <select class="form-control" id="gender1">
                <option value="">BRANCA</option>
                <option value="">PARDA</option>
                <option value="">PRETA</option>
                <option value="">AMARELO</option>
                <option value="">INDÍGINA</option>
            </select>
            </br>

            <label for="plano"><b>PESO</b></label>
            <input type="text" placeholder="Entre com seu Peso" name="Peso" required>

            <label for="inscricao"><b>ALTURA</b></label>
            <input type="text" placeholder="Entre com sua Altura" name="Altura" required>

            <label for="parente"><b>FATOR RH</b></label>
            <select class="form-control" id="gender1">
                <option value="">RH+</option>
                <option value="">RH-</option>
            </select>
            </br>

            <label for="parente"><b>TIPO SANGUINIO</b></label>
            <select class="form-control" id="gender1">
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
            <input type="text" placeholder="COMENTE" name="">

            <label for="plano"><b>DIABETES?</b></label>
            <label class="radio">SIM
                <input type="radio" checked="checked" name="radioD">
                <span class="checkmark"></span>
            </label>
            <label class="radio">NÃO
                <input type="radio" name="radioD">
                <span class="checkmark"></span>
            </label>
            <input type="text" placeholder="COMENTE" name="">

            <label for="plano"><b>HIPERTENSÃO?</b></label>
            <label class="radio">SIM
                <input type="radio" checked="checked" name="radioHI">
                <span class="checkmark"></span>
            </label>
            <label class="radio">NÃO
                <input type="radio" name="radioHI">
                <span class="checkmark"></span>
            </label>
            <input type="text" placeholder="COMENTE" name="">

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
            <input type="text" placeholder="COMENTE" name="">

            <label for="plano"><b>DOÊNÇAS CRONICAS?</b></label>
            <label class="radio">SIM
                <input type="radio" checked="checked" name="radioC">
                <span class="checkmark"></span>
            </label>
            <label class="radio">NÃO
                <input type="radio" name="radioC">
                <span class="checkmark"></span>
            </label>
            <input type="text" placeholder="COMENTE" name="">

            <label for="plano"><b>NEOPLASIA?</b></label>
            <label class="radio">SIM
                <input type="radio" checked="checked" name="radioN">
                <span class="checkmark"></span>
            </label>
            <label class="radio">NÃO
                <input type="radio" name="radioN">
                <span class="checkmark"></span>
            </label>
            <input type="text" placeholder="COMENTE" name="">

            <label for="plano"><b>FÁRMACO HABITUAL?</b></label>
            <label class="radio">SIM
                <input type="radio" checked="checked" name="radioFA">
                <span class="checkmark"></span>
            </label>
            <label class="radio">NÃO
                <input type="radio" name="radioFA">
                <span class="checkmark"></span>
            </label>
            <input type="text" placeholder="COMENTE" name="">
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
            <input type="text" placeholder="COMENTE" name="">

            <label for="plano"><b>ALERGIAS?</b></label>
            <label class="radio">SIM
                <input type="radio" checked="checked" name="radioAL">
                <span class="checkmark"></span>
            </label>
            <label class="radio">NÃO
                <input type="radio" name="radioAL">
                <span class="checkmark"></span>
            </label>
            <input type="text" placeholder="COMENTE" name="">

            <label for="plano"><b>ETILISTA?</b></label>
            <label class="radio">SIM
                <input type="radio" checked="checked" name="radioET">
                <span class="checkmark"></span>
            </label>
            <label class="radio">NÃO
                <input type="radio" name="radioET">
                <span class="checkmark"></span>
            </label>
            <input type="text" placeholder="COMENTE" name="">

            <label for="plano"><b>VACINA TOMADAS?</b></label>
            <label class="radio">SIM
                <input type="radio" checked="checked" name="radioVA">
                <span class="checkmark"></span>
            </label>
            <label class="radio">NÃO
                <input type="radio" name="radioVA">
                <span class="checkmark"></span>
            </label>
            <input type="text" placeholder="COMENTE" name="">
        </div>

        <div id="clinicos4" class="tab-pane fade">
            <!-- 8 Aba (DADODS CLINICOS)-->
            <h3>DADOS CLÍNICOS CONTINUAÇÃO</h3>

            <label for="plano"><b>JÁ PASSOU POR CIRURGIAS?</b></label>
            <label class="radio">SIM
                <input type="radio" checked="checked" name="radioCI">
                <span class="checkmark"></span>
            </label>
            <label class="radio">NÃO
                <input type="radio" name="radioCI">
                <span class="checkmark"></span>
            </label>
            <input type="text" placeholder="COMENTE" name="">

            <label for="plano"><b>PORTADOR DE DOÊNÇAS SEXUALMENTE TRANSMISSÍVEIS?</b></label>
            <label class="radio">SIM
                <input type="radio" checked="checked" name="radioTRA">
                <span class="checkmark"></span>
            </label>
            <label class="radio">NÃO
                <input type="radio" name="radioTRA">
                <span class="checkmark"></span>
            </label>
            <input type="text" placeholder="COMENTE" name="">

            <label for="plano"><b>PORTADOR DE MARCAPASSO?</b></label>
            <label class="radio">SIM
                <input type="radio" checked="checked" name="radioMAR">
                <span class="checkmark"></span>
            </label>
            <label class="radio">NÃO
                <input type="radio" name="radioMAR">
                <span class="checkmark"></span>
            </label>
            <input type="text" placeholder="COMENTE" name="">

            <label for="plano"><b>EPLIPSIA - CONSULÇÃO??</b></label>
            <label class="radio">SIM
                <input type="radio" checked="checked" name="radioEP">
                <span class="checkmark"></span>
            </label>
            <label class="radio">NÃO
                <input type="radio" name="radioEP">
                <span class="checkmark"></span>
            </label>
            <input type="text" placeholder="COMENTE" name=""> </br>

            <button class="button-ok">CONCLUIR</button>
        </div>
        </form>
    </div>

  </div>

</body>

</html>