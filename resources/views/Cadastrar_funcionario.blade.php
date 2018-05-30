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

              <form action=" {{ route('funcionario-salva') }}" style="border:#ccc">

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

                    <label for="nome"><b>NOME</b></label>
                    <input type="text" placeholder="Enter com seu Nome" name="Nome" value="{{old('Nome')}}">

                    <label for="cpf"><b>CPF</b></label>
                    <input type="text" placeholder="XXX.XXX.XXX-XX" name="Cpf" value="{{old('Cpf')}}" maxlength="14" OnKeyPress="formatar('###.###.###-##', this); if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;" class="nao">

                    <label for="rg"><b>RG</b></label>
                    <input type="text" placeholder="Entre com seu RG" name="Rg" value="{{old('Rg')}}" maxlength="14" OnKeyPress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;" class="nao">

                    <label for="telefone"><b>TELEFONE</b></label>
                    <input type="text" placeholder="(XX) X XXXX-XXXX" name="Telefone-p" value="{{old('Telefone-p')}}" maxlength="14" OnKeyPress="formatar('## # ####-####', this); if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;" class="nao">

                    <label for="Data">Data</label>
                    <div class="input-group date">
                        <input type="date" class="form-control" id="Data" name="Data" maxlength="10" value="{{old('Data')}}">
                        <div class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </div>
                    </div>

                    <label for="naturalidade"><b>NATURALIDADE</b></label>

                    <select class="form-control" name="Naturalidade" value="{{old('Naturalidade')}}">
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

                    <label for="sexo"><b>SEXO</b></label>
                    <select class="form-control" name="sexo" value="{{old('sexo')}}">
                        <option value="MASC">MASCULINO</option>
                        <option value="FEMIN">FEMININO</option>
                        <option value="OUTRO">OUTRO</option>
                    </select>

                    <label for="estado"><b>ESTADO CIVIL</b></label>
                    <select class="form-control" name="estado" value="{{old('estado')}}">
                        <option value="casado">CASADO</option>
                        <option value="solteiro">SOLTEIRO</option>
                        <option value="viuvo">VIUVO</option>
                        <option value="divorciado">DIVORCIADO</option>
                    </select>

                    <label for="Email"><b>E-MAIL</b></label>
                    <input type="text" placeholder="Entre com seu Email@email.com" name="Email" value="{{old('Email')}}">

                    <label for="escola"><b>ESCOLARIDADE</b></label>
                    <select class="form-control" name="escola" value="{{old('escola')}}">
                        <option value="FunINCOMPLETO">FUNDAMENTAL-INCOMPLETO</option>
                        <option value="FunCOMPLETO">FUNDAMENTAL-COMPLETO</option>
                        <option value="SugSEGUNDO">SEGUNDO GRAU-INCOMPLETO</option>
                        <option value="SugCOMPLETO">SEGUNDO GRAU-COMPLETO</option>
                        <option value="SupINCOMPLETO">SUPERIOR-INCOMPLETO</option>
                        <option value="SupCOMPLETO">SUPERIOR-COMPLETO</option>
                        <option value="MesINCOMPLETO">MESTRADO-INCOMPLETO</option>
                        <option value="MesCOMPLETO">MESTRADO-COMPLETO</option>
                    </select>>

                      <label><b>Cargo</b></label>
                      <select class="form-control" name="profi" value="{{old('profi')}}">
                        <option value="MÉDICO">MÉDICO</option>
                        <option value="ENFERMEIRO">ENFERMEIRO</option>
                        <option value="RH">RH</option>
                        <option value="Atendente">ATENTENDE</option>

                      </select>

                      <label><b>CRM</b></label>
                      <input type="text" name="Crm" value="{{old('Crm')}}" maxlength="8" OnKeyPress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;" class="nao">

                      <label><b>ESPECIALIDADE</b></label>
                      <select class="form-control" name="Especialidade" value="{{old('Especialidade')}}">
                          <option value="NEUROLOGISTA">NEUROLOGISTA</option>
                          <option value="CARDIOVASCULAR">CARDIOVASCULAR</option>
                          <option value="CIRURGIÃO">CIRURGIÃO GERAL</option>
                          <option value="PEDRIATRIA">PEDRIATRIA</option>
                      </select>

                      <label><b>TIPO DE PERMISSÃO</b></label>
                      <select class="form-control" name="TIPO_PERMISAO"  value="{{old('TIPO_PERMISAO')}}">
                          <option value="PMEDICO">MÉDICO</option>
                          <option value="PMEDICOGERENTE">MÉDICO GERENTE</option>
                          <option value="PENFERMEIRO">ENFERMEIRO</option>
                          <option value="PENFERMEIROCHEFE">ENFERMEIRO CHEFE</option>
                          <option value="PATENDIMENTO">ATENDIMENTO</option>
                          <option value="PGERAL">GERENTE GERAL</option>
                          <option value="RH">RH</option>
                      </select>
                  </div>
          </div>

          <div id="Endereco" class="tab-pane fade">
              <!-- 2 Aba (aba dos enderço)-->

              <h3>Endereço</h3>
            <label for="Cep"><b>CEP</b></label>
            <input type="text" placeholder="Enter com seu CEP" id="cep" name="Cep" value="{{old('Cep')}}" maxlength="9" onblur="pesquisacep(this.value);" OnKeyPress="formatar('#####-###', this)" class="nao">

            <label for="Uf"><b>UF</b></label>
            <input type="text" placeholder="Entre com seu UF" id="uf" maxlength="2" name="Uf" value="{{old('Uf')}}">

            <label for="cidade"><b>CIDADE</b></label>
            <select class="form-control" name="cidade" value="{{old('cidade')}}">
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

            <label for="Endereco"><b>ENDEREÇO</b></label>
            <input type="text" placeholder="Entre com seu Endereço" id="rua" name="Endereco" value="{{old('Endereco')}}">

            <label for="Bairro"><b>BAIRRO</b></label>
            <input type="text" placeholder="Entre com seu Bairro" id="bairro" name="Bairro" value="{{old('Bairro')}}">

            <label for="Numero"><b>NÚMERO</b></label>
            <input type="text" placeholder="Entre com seu Número" name="Numero" maxlength="5" value="{{old('Numero')}}">

            <label for="Complemento"><b>COMPLEMENTO</b></label>
            <input type="text" placeholder="Entre com seu Complemento" name="Complemento" value="{{old('Complemento')}}">
        </div>

        <div id="Contato" class="tab-pane fade">
            <!-- 3 Aba (aba dos contatos)-->
            <h3>Contatos</h3>
            <label for="parente"><b>RESPONSAVEL/PARENTE 1 NOME</b></label>
            <input type="text" placeholder="Entre com seu nome" name="Parente" value="{{old('Parente')}}">

            <label for="parentent-tele"><b>RESPONSAVEL/PARENTE 1 TELEFONE</b></label>
            <input type="text" placeholder="Entre com seu Telefone" name="Parentent-tele" value="{{old('Parentent-tele')}}" maxlength="14" OnKeyPress="formatar('## # ####-####', this); if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;">

            <label for="parente-1"><b>RESPONSAVEL/PARENTE 2 NOME</b></label>
            <input type="text" placeholder="Entre com seu nome" name="Parente-1" value="{{old('Parente-1')}}">

            <label for="parentent-tele-1"><b>RESPONSAVEL/PARENTE 2 TELEFONE</b></label>
            <input type="text" placeholder="Entre com seu Telefone" name="Parentent-tele-1" value="{{old('Parentent-tele-1')}}" maxlength="14" OnKeyPress="formatar('## # ####-####', this); if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;">
        </div>

        <div id="clinicos1" class="tab-pane fade">
                <!-- 5 Aba (aba dos dados clinicos)-->
    
                <h3>DADOS CLÍNICOS</h3>
                <label for="cor"><b>COR DA PELE</b></label>
                <select class="form-control" name="cor" value="{{old('cor')}}">
                    <option value="BRANCA">BRANCA</option>
                    <option value="PARDA">PARDA</option>
                    <option value="PRETA">PRETA</option>
                    <option value="AMARELO">AMARELO</option>
                    <option value="INDÍGINA">INDÍGINA</option>
                </select>
                </br>
    
                <label for="Peso"><b>PESO</b></label>
                <input type="text" placeholder="Entre com seu Peso" name="Peso" value="{{old('Peso')}}" maxlength="5" OnKeyPress="formatar('##,##', this); if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;">
    
                <label for="Altura"><b>ALTURA</b></label>
                <input type="text" placeholder="Entre com sua Altura" name="Altura" value="{{old('Altura')}}" maxlength="5" OnKeyPress="formatar('##,##', this); if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;">
    
                <label for="rh"><b>FATOR RH</b></label>
                <select class="form-control" name="rh" value="{{old('rh')}}">
                    <option value="RH+">RH+</option>
                    <option value="RH-">RH-</option>
                </select>
                </br>
    
                <label for="tipo"><b>TIPO SANGUINIO</b></label>
                <select class="form-control" name="tipo" value="{{old('tipo')}}">
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
                <select class="form-control" name="Chere" value="{{old('Chere')}}">
                    <option value="Nenhuma">-Nenhuma-</option>
                    <option value="Câncer">Câncer</option>
                    <option value="Depressão">Depressão</option>
                    <option value="Fibrose">Fibrose Cística</option>
                    <option value="Hemorroidas">Hemorroidas</option>
                    <option value="Daltonismo">Daltonismo</option>
                    <option value="Obesidade">Obesidade</option>
                    <option value="Diabetes">Diabetes</option>
                    <option value="Cardiopatias">Cardiopatias</option>
                    <option value="Hipertensão">Hipertensão arterial</option>
                    <option value="Anemia">Anemia falciforme</option>
                    <option value="Síndrome">Síndrome de Marfan</option>
                    <option value="Hemocromatose">Hemocromatose arterial</option>
                </select>
    
                <label for="plano"><b>DIABETES?</b></label>
                <label class="radio">SIM
                    <input type="radio" checked="checked" name="radioD" value="sim">
                    <span class="checkmark"></span>
                </label>
                <label class="radio">NÃO
                    <input type="radio" name="radioD" value="não">
                    <span class="checkmark"></span>
                </label>
                <input type="text" placeholder="COMENTE" name="CDiab" value="{{old('CDiab')}}">
    
                <label for="plano"><b>HIPERTENSÃO?</b></label>
                <label class="radio">SIM
                    <input type="radio" checked="checked" name="radioHI" value="sim">
                    <span class="checkmark"></span>
                </label>
                <label class="radio">NÃO
                    <input type="radio" name="radioHI" value="não">
                    <span class="checkmark"></span>
                </label>
                <input type="text" placeholder="COMENTE" name="Chiper" value="{{old('Chiper')}}">
    
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
                <input type="text" placeholder="COMENTE" name="Cclini" value="{{old('Cclini')}}">
    
                <label for="plano"><b>DOÊNÇAS CRONICAS?</b></label>
                <label class="radio">SIM
                    <input type="radio" checked="checked" name="radioC" value="sim">
                    <span class="checkmark"></span>
                </label>
                <label class="radio">NÃO
                    <input type="radio" name="radioC" value="não"
                    <span class="checkmark"></span>
                </label>
                <select class="form-control" name="Cdoen" value="{{old('Cdoen')}}">
                    <option value="Nenhuma">-Nenhuma-</option>
                    <option value="Hipertensão">Hipertensão arterial</option>
                    <option value="Colesterol">Colesterol alto</option>
                    <option value="Depressão">Depressão</option>
                    <option value="Diabetes">Diabetes</option>
                    <option value="Artrite">Artrite</option>
                    <option value="Câncer">Câncer</option>
                    <option value="Asma">Asma</option>
                    <option value="Dores na coluna">Dores na coluna</option>
                    <option value="DPOC">DPOC (Doença pulmonar obstrutiva crônica)</option>
                    <option value="Osteoporose">Osteoporose</option>
                    <option value="Parkinson">Parkinson arterial</option>
                    <option value="Alzheimer">Alzheimer</option>
                    <option value="AVC">AVC</option>
                    <option value="Fibrose">Fibrose Cistica</option>
                    <option value="Hepatites">Hepatites</option>
                    <option value="Cirrose">Cirrose</option>
                </select>
    
                <label for="plano"><b>NEOPLASIA?</b></label>
                <label class="radio">SIM
                    <input type="radio" checked="checked" name="radioN" value="sim">
                    <span class="checkmark"></span>
                </label>
                <label class="radio">NÃO
                    <input type="radio" name="radioN" value="não"
                    <span class="checkmark"></span>
                </label>
                <input type="text" placeholder="COMENTE" name="Cneopla" value="{{old('Cneopla')}}">
    
                <label for="plano"><b>FÁRMACO HABITUAL?</b></label>
                <label class="radio">SIM
                    <input type="radio" checked="checked" name="radioFA" value="sim">
                    <span class="checkmark"></span>
                </label>
                <label class="radio">NÃO
                    <input type="radio" name="radioFA" value="não">
                    <span class="checkmark"></span>
                </label>
                <input type="text" placeholder="COMENTE" name="Cfarma" value="{{old('Cfarma')}}">
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
                <input type="text" placeholder="COMENTE" name="Cuso" value="{{old('Cuso')}}">
    
                <label for="plano"><b>ALERGIAS?</b></label>
                <label class="radio">SIM
                    <input type="radio" checked="checked" name="radioAL" value="sim">
                    <span class="checkmark"></span>
                </label>
                <label class="radio">NÃO
                    <input type="radio" name="radioAL" value="não">
                    <span class="checkmark"></span>
                </label>
                <input type="text" placeholder="COMENTE" name="Calerg" value="{{old('Calerg')}}">
    
                <label for="plano"><b>ETILISTA?</b></label>
                <label class="radio">SIM
                    <input type="radio" checked="checked" name="radioET" value="sim">
                    <span class="checkmark"></span>
                </label>
                <label class="radio">NÃO
                    <input type="radio" name="radioET" value="não">
                    <span class="checkmark"></span>
                </label>
                <input type="text" placeholder="COMENTE" name="Cetili" value="{{old('Cetili')}}">
    
                <label for="plano"><b>VACINA TOMADAS?</b></label>
                <label class="radio">SIM
                    <input type="radio" checked="checked" name="radioVA" value="sim">
                    <span class="checkmark"></span>
                </label>
                <label class="radio">NÃO
                    <input type="radio" name="radioVA" value="não">
                    <span class="checkmark"></span>
                </label>
                <input type="text" placeholder="COMENTE" name="Cvacina" value="{{old('Cvacina')}}">
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
                <select class="form-control" name="Ccirur" value="{{old('Ccirur')}}">
                    <option value="Nenhuma">-Nenhuma-</option>
                    <option value="Vasectomia">Vasectomia</option>
                    <option value="Nefrectomia">Nefrectomia</option>
                    <option value="Mastectomia">Mastectomia</option>
                    <option value="Prostectomia">Prostectomia</option>
                    <option value="Pneumonectomia">Pneumonectomia</option>
                    <option value="Histerectomia">Histerectomia</option>
                    <option value="Colecistectomia">Colecistectomia</option>
                    <option value="Ooforectomia">Ooforectomia</option>
                    <option value="Abdominoplastia">Abdominoplastia</option>
                    <option value="Craniotomia">Craniotomia</option>
                    <option value="Blefaroplastia">Blefaroplastia</option>
                    <option value="Rinoplastia">Rinoplastia</option>
                    <option value="Queiloplastia">Queiloplastia</option>
                    <option value="Mamoplastia">Mamoplastia</option>
                    <option value="Ritidoplastia">Ritidoplastia</option>
                </select>
    
                <label for="plano"><b>PORTADOR DE DOÊNÇAS SEXUALMENTE TRANSMISSÍVEIS?</b></label>
                <label class="radio">SIM
                    <input type="radio" checked="checked" name="radioTRA" value="sim">
                    <span class="checkmark"></span>
                </label>
                <label class="radio">NÃO
                    <input type="radio" name="radioTRA" value="não">
                    <span class="checkmark"></span>
                </label>
                <input type="text" placeholder="COMENTE" name="Cporta" value="{{old('Cporta')}}">
    
                <label for="plano"><b>PORTADOR DE MARCAPASSO?</b></label>
                <label class="radio">SIM
                    <input type="radio" checked="checked" name="radioMAR" value="sim">
                    <span class="checkmark"></span>
                </label>
                <label class="radio">NÃO
                    <input type="radio" name="radioMAR" value="não">
                    <span class="checkmark"></span>
                </label>
                <input type="text" placeholder="COMENTE" name="Cmarca" value="{{old('Cmarca')}}">
    
                <label for="plano"><b>EPLIPSIA - CONSULÇÃO?</b></label>
                <label class="radio">SIM
                    <input type="radio" checked="checked" name="radioEP" value="sim">
                    <span class="checkmark"></span>
                </label>
                <label class="radio">NÃO
                    <input type="radio" name="radioEP" value="não">
                    <span class="checkmark"></span>
                </label>
                <input type="text" placeholder="COMENTE" name="Ceplis" value="{{old('Ceplis')}}"> </br>

                <button herf=" {{ route('funcionario-listar') }} " class="btn btn-danger">Voltar</button>
                <button class="btn btn-primary"> <span class="glyphicon glyphicon-floppy-disk"></span> CONCLUIR</button>
          </div>
          </form>

          <script>
            function formatar(mascara, documento) { // Para a Data
                var i = documento.value.length;
                var saida = mascara.substring(0, 1);
                var texto = mascara.substring(i)
    
                if (texto.substring(0, 1) != saida) {
                    documento.value += texto.substring(0, 1);
                }
    
            }
    
            $('#Data').datepicker({
                format: 'dd/mm/yyyy',
                language: "pt-BR",
            });
    
            function formatar(mascara, documento) { // Mascara dos campos
    
                var i = documento.value.length;
                var saida = mascara.substring(0, 1);
                var texto = mascara.substring(i)
    
                if (texto.substring(0, 1) != saida) {
                    documento.value += texto.substring(0, 1);
                }
    
            }
    
            $(document).ready(function() { // Para Não permitir C,V,X
                $('.nao').bind('cut copy paste', function(event) {
                    event.preventDefault();
                });
            });

            function limpa_formulário_cep() {
	            //Limpa valores do formulário de cep.
	            document.getElementById('rua').value=("");
	            document.getElementById('bairro').value=("");
	            document.getElementById('cidade').value=("");
	            document.getElementById('uf').value=("");
	    }

	    function meu_callback(conteudo) {
	        if (!("erro" in conteudo)) {
	            //Atualiza os campos com os valores.
	            document.getElementById('rua').value=(conteudo.logradouro);
	            document.getElementById('bairro').value=(conteudo.bairro);
	            //document.getElementById('cidade').value=(conteudo.localidade);
	            document.getElementById('uf').value=(conteudo.uf);
	        } //end if.
	        else {
	            //CEP não Encontrado.
	            limpa_formulário_cep();
	            alert("CEP não encontrado.");
	        }
	    }
	        
	    function pesquisacep(valor) {

	        //Nova variável "cep" somente com dígitos.
	        var cep = valor.replace(/\D/g, '');

	        //Verifica se campo cep possui valor informado.
	        if (cep != "") {

	            //Expressão regular para validar o CEP.
	            var validacep = /^[0-9]{8}$/;

	            //Valida o formato do CEP.
	            if(validacep.test(cep)) {

	                //Preenche os campos com "..." enquanto consulta webservice.
	                document.getElementById('rua').value="...";
	                document.getElementById('bairro').value="...";
	                //document.getElementById('cidade').value="...";
	                document.getElementById('uf').value="...";
	                //document.getElementById('ibge').value="...";

	                //Cria um elemento javascript.
	                var script = document.createElement('script');

	                //Sincroniza com o callback.
	                script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

	                //Insere script no documento e carrega o conteúdo.
	                document.body.appendChild(script);

	            } //end if.
	            else {
	                //cep é inválido.
	                limpa_formulário_cep();
	                alert("Formato de CEP inválido.");
	            }
	        } //end if.
	        else {
	            //cep sem valor, limpa formulário.
	            limpa_formulário_cep();
	        }
	    };

	    function formatar(mascara, documento){ // Para o CEP
	            var i = documento.value.length;
	            var saida = mascara.substring(0,1);
	            var texto = mascara.substring(i)
	            
	            if (texto.substring(0,1) != saida){
	                        documento.value += texto.substring(0,1);
	            }
	            
	    }
        </script>
@endsection