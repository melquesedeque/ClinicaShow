@extends('NavBar')
@section('body')

    <form action="{{ route('consultaSalvar') }}" style="border:#ccc">

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
            <input type="text" name="NomePaciente" required value=" {{old('NomePaciente')}} ">

            <label for="Nome-medico"><b>NOME MÉDICO</b></label>
            <input type="text" name="NomeMedico" required value=" {{old('NomeMedico')}} ">

            <label for="queixa"><b>QUAL A SUA QUEIXA?</b></label>
            <input type="text" name="Queixa" required value=" {{old('Queixa')}} ">

            <label for="inicio-durabilidade"><b>Início, durabilidade, como se deu a evolução, características da dor?</b></label>
            <input type="text" placeholder="" name="InicioDurabilidade" value=" {{old('InicioDurabilidade')}} ">

            <label for="habitos-vida"><b>HÁBITOS DA VIDA</b></label>
            <input type="text" placeholder="" name="HabitosVida" value=" {{old('HabitosVida')}} ">

            <label for="tipo-alimento"><b>TIPO DE ALIMENTAÇÃO</b></label>
            <input type="text" placeholder="" name="TipoAlimento" value=" {{old('TipoAlimento')}} ">

            <label for="inspersao"><b>INSPERÇÃO</b></label>
            <input type="text" placeholder="" name="Inspersao" value=" {{old('Inspersao')}} ">

            <label for="palpacao"><b>PALPAÇÃO</b></label>
            <input type="text" placeholder="" name="Palpacao" value=" {{old('Palpacao')}} ">

            <label for="percusao"><b>PERCUSSÃO</b></label>
            <input type="text" placeholder="" name="Percusao" value=" {{old('Percusao')}} ">

            <label for="ausculta"><b>AUSCULTA</b></label>
            <input type="text" placeholder="" name="Ausculta" value=" {{old('Ausculta')}} ">

            <label for="materias"><b>MATERIAS UTILIZADOS</b></label>
            <input type="text" placeholder="" name="Materias" value=" {{old('Materias')}} ">

            <button class="button-ok" data-toggle="modal" data-target="#exampleModal">CONCLUIR</button>
            
        </div>
    </form>
@endsection