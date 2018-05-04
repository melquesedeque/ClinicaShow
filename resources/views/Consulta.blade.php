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

            <label for=""><b>NOME PACIENTE</b></label>
            <input type="text" name="nome-paciente" required>

            <label for=""><b>NOME MÉDICO</b></label>
            <input type="text" name="Nome-medico" required>

            <label for=""><b>QUAL A SUA QUEIXA?</b></label>
            <input type="text" name="queixa" required>

            <label for=""><b>Início, durabilidade, como se deu a evolução, características da dor?</b></label>
            <input type="text" placeholder="" name="inicio-durabilidade" required>

            <label for=""><b>HÁBITOS DA VIDA</b></label>
            <input type="text" placeholder="" name="habitos-vida" required>

            <label for=""><b>TIPO DE ALIMENTAÇÃO</b></label>
            <input type="text" placeholder="" name="tipo-alimento" required>

            <label for=""><b>INSPERÇÃO</b></label>
            <input type="text" placeholder="" name="inspersao" required>

            <label for=""><b>PALPAÇÃO</b></label>
            <input type="text" placeholder="" name="palpacao" required>

            <label for=""><b>PERCUSSÃO</b></label>
            <input type="text" placeholder="" name="percusao" required>

            <label for=""><b>AUSCULTA</b></label>
            <input type="text" placeholder="" name="ausculta" required>

            <label for=""><b>MATERIAS UTILIZADOS</b></label>
            <input type="text" placeholder="" name="materias" required>

            <button class="button-ok">CONCLUIR</button>
            
        </div>
    </form>
@endsection