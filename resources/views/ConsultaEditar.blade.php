@extends('NavBar')
@section('body')

    <form action="{{ route('consultaAtualizar', ['id' => $consulta['id']]) }}" style="border:#ccc">

        <div class="container">

            <h2>Cadastrar Consulta</h2> 
            
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
            <select name="NomePaciente" id="NomePaciente" value=" {{old('NomePaciente',$consulta['NomePaciente'])}}" class="form-control"> // bucas Pacientes no Banco
                @foreach ($pacientes as $paci)

                    <option value="{{$paci->Nome}}">{{$paci->Nome}}</option>

                @endforeach      
            </select> 

            <label for="Nome-medico"><b>NOME MÉDICO</b></label>
            <select name="NomeMedico" id="NomeMedico" value=" {{old('NomeMedico',$consulta['NomeMedico'])}}" class="form-control"> // bucas Pacientes no Banco
                @foreach ($funcionarios as $func)

                    <option value="{{$func->Nome}}">{{$func->Nome}}</option>

                @endforeach      
            </select>

            <label for="Data">Data</label>

                    <div class="input-group date">
                        <input type="date" class="form-control" id="Data" name="Data" maxlength="10" value="{{old('Data',$consulta['Data'])}}">
                        <div class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </div>
                    </div>

            <label for="queixa"><b>QUAL A SUA QUEIXA?</b></label>
            <input type="text" name="Queixa" required class="form-control" value=" {{old('Queixa',$consulta['Queixa'])}} ">

            <label for="inicio-durabilidade"><b>Início, durabilidade, como se deu a evolução, características da dor?</b></label>
            <input type="text" placeholder="" name="InicioDurabilidade" class="form-control" value=" {{old('InicioDurabilidade',$consulta['InicioDurabilidade'])}} ">

            <label for="habitos-vida"><b>HÁBITOS DA VIDA</b></label>
            <input type="text" placeholder="" name="HabitosVida" class="form-control" value=" {{old('HabitosVida',$consulta['HabitosVida'])}} ">

            <label for="tipo-alimento"><b>TIPO DE ALIMENTAÇÃO</b></label>
            <input type="text" placeholder="" name="TipoAlimento" class="form-control" value=" {{old('TipoAlimento',$consulta['TipoAlimento'])}} ">

            <label for="inspersao"><b>INSPERÇÃO</b></label>
            <input type="text" placeholder="" name="Inspersao" class="form-control" value=" {{old('Inspersao',$consulta['Inspersao'])}} ">

            <label for="palpacao"><b>PALPAÇÃO</b></label>
            <input type="text" placeholder="" name="Palpacao" class="form-control" value=" {{old('Palpacao',$consulta['Palpacao'])}} ">

            <label for="percusao"><b>PERCUSSÃO</b></label>
            <input type="text" placeholder="" name="Percusao" class="form-control" value=" {{old('Percusao',$consulta['Percusao'])}} ">

            <label for="ausculta"><b>AUSCULTA</b></label>
            <input type="text" placeholder="" name="Ausculta" class="form-control" value=" {{old('Ausculta',$consulta['Ausculta'])}} ">

            <label for="materias"><b>MATERIAS UTILIZADOS</b></label>
            <input type="text" placeholder="" name="Materias" class="form-control" value=" {{old('Materias',$consulta['Materias'])}} ">

            <button class="button-ok" data-toggle="modal" data-target="#exampleModal">Alterar</button>
            
        </div>
    </form>
@endsection