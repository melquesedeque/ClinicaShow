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
            <input type="text" name="nome-paciente" required value=" {{old('nome-paciente')}} ">

            <label for="Nome-medico"><b>NOME MÉDICO</b></label>
            <input type="text" name="Nome-medico" required value=" {{old('Nome-medico')}} ">

            <label for="queixa"><b>QUAL A SUA QUEIXA?</b></label>
            <input type="text" name="queixa" required value=" {{old('queixa')}} ">

            <label for="inicio-durabilidade"><b>Início, durabilidade, como se deu a evolução, características da dor?</b></label>
            <input type="text" placeholder="" name="inicio-durabilidade" value=" {{old('inicio-durabilidade')}} ">

            <label for="habitos-vida"><b>HÁBITOS DA VIDA</b></label>
            <input type="text" placeholder="" name="habitos-vida" value=" {{old('habitos-vida')}} ">

            <label for="tipo-alimento"><b>TIPO DE ALIMENTAÇÃO</b></label>
            <input type="text" placeholder="" name="tipo-alimento" value=" {{old('tipo-alimento')}} ">

            <label for="inspersao"><b>INSPERÇÃO</b></label>
            <input type="text" placeholder="" name="inspersao" value=" {{old('inspersao')}} ">

            <label for="palpacao"><b>PALPAÇÃO</b></label>
            <input type="text" placeholder="" name="palpacao" value=" {{old('palpacao')}} ">

            <label for="percusao"><b>PERCUSSÃO</b></label>
            <input type="text" placeholder="" name="percusao" value=" {{old('percusao')}} ">

            <label for="ausculta"><b>AUSCULTA</b></label>
            <input type="text" placeholder="" name="ausculta" value=" {{old('ausculta')}} ">

            <label for="materias"><b>MATERIAS UTILIZADOS</b></label>
            <input type="text" placeholder="" name="materias" value=" {{old('materias')}} ">

            <button class="button-ok" data-toggle="modal" data-target="#exampleModal">CONCLUIR</button>
            
        </div>
    </form>
@endsection