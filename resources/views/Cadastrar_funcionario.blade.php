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

                      <label for=""><b>NOME</b></label>
                      <input type="text" placeholder="Enter com seu nome" name="Nome" required>

                      <label for=""><b>MATRICULA</b></label>
                      <input type="text" placeholder="Entre com sua Matricula" name="Matricula" required>

                      <label for=""><b>CPF</b></label>
                      <input type="text" placeholder="XXX.XXX.XXX-XX" name="Cpf" required>

                      <label for=""><b>RG</b></label>
                      <input type="text" placeholder="Entre com seu RG" name="Rg" required>

                      <label for=""><b>TELEFONE</b></label>
                      <input type="text" placeholder="(XX) X XXXX-XXXX" name="Telefone" required>

                      <label for=""><b>DATA NASCIMENTO</b></label>
                      <input type="text" placeholder="DD/MM/YYYY" name="Data" required>

                      <label for=""><b>NATURALIDADE</b></label>
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

                      <label for=""><b>SEXO</b></label>
                      <select class="form-control" id="gender1">
                          <option value="MASC-funcionario">MASCULINO</option>
                          <option value="FEMIN-funcionario">FEMININO</option>
                          <option value="OUTRO-funcionario">OUTRO</option>
                      </select>
                      </br>

                      <label for=""><b>ESTADO CIVIL</b></label>
                      <select class="form-control" id="gender1">
                          <option value="casado-funcionario">CASADO</option>
                          <option value="solteiro-funcionario">SOLTEIRO</option>
                          <option value="viuvo-funcionario">VIUVO</option>
                          <option value="divorciado-funcionario">DIVORCIADO</option>
                      </select>
                      </br>

                      <label for=""><b>E-MAIL</b></label>
                      <input type="text" placeholder="Entre com seu Email@email.com" name="Email" required>

                      <label for=""><b>ESCOLARIDADE</b></label>
                      <select class="form-control" id="gender1">
                          <option value="FUND-INCO">FUNDAMENTAL-INCOMPLETO</option>
                          <option value="FUND-COMP">FUNDAMENTAL-COMPLETO</option>
                          <option value="SEGUN-INCO">SEGUNDO GRAU-INCOMPLETO</option>
                          <option value="SEGUN-COMPL">SEGUNDO GRAU-COMPLETO</option>
                          <option value="SUPE-INCO">SUPERIOR-INCOMPLETO</option>
                          <option value="SUPE-COMPL">SUPERIOR-COMPLETO</option>
                          <option value="MEST-INCO">MESTRADO-INCOMPLETO</option>
                          <option value="MEST-COMPL">MESTRADO-COMPLETO</option>
                      </select>
                      </br>

                      <label for=""><b>PROFISSÃO</b></label>
                      <select class="form-control" id="gender1">
                          <option value="MEDICO">MÉDICO</option>
                          <option value="ENFERMEIRO">ENFERMEIRO</option>
                          <option value="ARQUITETO">ARQUITETO</option>
                          <option value="ENGENHEIRO">ENGENHEIRO</option>
                          <option value="FISIOTERAPEUTA">FISIOTERAPEUTA</option>
                          <option value="ANALISTA">ANALISTA DE SISTEMAAS</option>
                          <option value="PROGRAMADOR">PROGRAMADOR</option>
                          <option value="DENTISTA">DENTISTA</option>
                          <option value="PEDREIRO">PEDREIRO</option>
                          <option value="SEGURANÇA">SEGURANÇA</option>
                          <option value="ADIMINISTRACAO">ADIMINISTRAÇÃO</option>
                          <option value="FARMACIA">FARMACIA</option>
                          <option value="EDUCAO">EDUÇÃO FÍSICA</option>
                      </select>
                      </br>

                      <label for="profissao"><b>ESPECIALIDADE</b></label>
                      <select class="form-control" id="gender1">
                          <option value="NEUROLOGISTA">NEUROLOGISTA</option>
                          <option value="CARDIOVASCULAR">CARDIOVASCULAR</option>
                          <option value="CIRURGIÃO">CIRURGIÃO GERAL</option>
                          <option value="PEDRIATRIA">PEDRIATRIA</option>
                      </select>
                      </br>

                      <label for="profissao"><b>TIPO DE PERMISSÃO</b></label>
                      <select class="form-control" id="gender1">
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

              <label for=""><b>PESO</b></label>
              <input type="text" placeholder="Entre com seu Peso" name="Peso" required>

              <label for=""><b>ALTURA</b></label>
              <input type="text" placeholder="Entre com sua altura" name="Altura" required>

              <label for=""><b>FATOR RH</b></label>
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
@endsection