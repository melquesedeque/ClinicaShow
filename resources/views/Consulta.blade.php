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

    <!-- Modal -->
    <div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="modalLabel">Excluir Item</h4>
            </div>
            <div class="modal-body">
                Deseja realmente excluir este item?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Sim</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">N&atilde;o</button>
            </div>
            </div>
        </div>
    </div> <!-- /.modal -->

    <nav class="navbar navbar-default" id="nav">
        <!-- nemu do site -->
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href={{ route( 'conta') }}>Clínica Show</a>
                <!--  bota imagem aqui do tamanho já correto-->
                <button class="navbar-toggle glyphicon glyphicon-menu-hamburger" data-toggle="collapse" data-target="#lista_show"></button>
            </div>

            <ul id="lista_show" class="nav navbar-nav navbar-right collapse navbar-collapse">
                <li><a href={{ route( 'cadastrar-paciente') }}>Cadastrar Paciente</a></li>
                <li><a href={{ route( 'cadastrar-funcionario') }}>Cadastrar Funcionário</a></li>
                <li class="active"><a href={{ route( 'consuta') }}>Consulta</a></li>
                <li><a href={{ route( 'conta') }}>Conta</a></li>
            </ul>
        </div>
    </nav>

    <form action="{{ route('consultaSalvar') }}" style="border:#ccc">

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

</body>

</html>