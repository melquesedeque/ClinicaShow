@extends('NavBar')
@section('body')

    <form action="{{ route('consultaListar') }}" style="border:#ccc">

        <div class="container">

            <h2>Visualizar Consulta</h2> 
            
			@if ($errors->any())
				<div class="alert alert-danger">
					<ul>
						@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
            @endif

            {{-- {{$button=false}}

            @if ($button=true)
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Confirmar Cadastro da Consulta</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-primary">Salvar</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endif --}}


            <label for="nome-paciente"><b>NOME PACIENTE</b></label>
            <input type="text" name="NomePaciente" disabled class="form-control" value="{{old('NomePaciente',$consulta['NomePaciente'])}}"> </br>

            <label for="Nome-medico"><b>NOME MÉDICO</b></label>
            <input type="text" name="NomeMedico" disabled class="form-control" value="{{old('NomeMedico',$consulta['NomeMedico'])}}"> </br>

            <label for="Data">Data</label>
            <div class="input-group date">
                <input type="date" disabled class="form-control" id="Data" name="Data" maxlength="10" value="{{old('Data',$consulta['Data'])}}">
                <div class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </div>
            </div>
             </br>
            <label for="queixa"><b>QUAL A SUA QUEIXA?</b></label>
            <input type="text" name="Queixa" disabled class="form-control" value="{{old('Queixa',$consulta['Queixa'])}}"> </br>

            <label for="inicio-durabilidade"><b>Início, durabilidade, como se deu a evolução, características da dor?</b></label>
            <input type="text" disabled class="form-control" name="InicioDurabilidade" value="{{old('InicioDurabilidade',$consulta['InicioDurabilidade'])}}"> </br>

            <label for="habitos-vida"><b>HÁBITOS DA VIDA</b></label>
            <input type="text" disabled class="form-control" name="HabitosVida" value="{{old('HabitosVida',$consulta['HabitosVida'])}}"> </br>

            <label for="tipo-alimento"><b>TIPO DE ALIMENTAÇÃO</b></label>
            <input type="text" disabled class="form-control" name="TipoAlimento" value="{{old('TipoAlimento',$consulta['TipoAlimento'])}}"> </br>

            <label for="inspersao"><b>INSPERÇÃO</b></label>
            <input type="text" disabled class="form-control" name="Inspersao" value="{{old('Inspersao',$consulta['Inspersao'])}}"> </br>

            <label for="palpacao"><b>PALPAÇÃO</b></label>
            <input type="text" disabled class="form-control" name="Palpacao" value="{{old('Palpacao',$consulta['Palpacao'])}}"> </br>

            <label for="percusao"><b>PERCUSSÃO</b></label>
            <input type="text" disabled class="form-control" name="Percusao" value="{{old('Percusao',$consulta['Percusao'])}}"> </br>

            <label for="ausculta"><b>AUSCULTA</b></label>
            <input type="text" disabled class="form-control" name="Ausculta" value="{{old('Ausculta',$consulta['Ausculta'])}}"> </br>

            <label for="materias"><b>MATERIAS UTILIZADOS</b></label>
            <input type="text" disabled class="form-control" name="Materias" value="{{old('Materias',$consulta['Materias'])}}"> </br>
            
            <button class="button-ok" data-toggle="modal" data-target="#exampleModal">Voltar</button>
        </div>
        
    </form>
@endsection