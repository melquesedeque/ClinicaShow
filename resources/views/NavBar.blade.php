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
                <a class="navbar-brand" href={{ route('conta') }}>Clínica Show</a>
                <!--  bota imagem aqui do tamanho já correto-->
                <button class="navbar-toggle glyphicon glyphicon-menu-hamburger" data-toggle="collapse" data-target="#lista_show"></button>
            </div>

            <ul id="lista_show" class="nav navbar-nav navbar-right collapse navbar-collapse">
                <li><a href={{ route('cadastrar-paciente') }}>Cadastrar Paciente</a></li>
                <li><a href={{ route('cadastrar-funcionario') }}>Cadastrar Funcionário</a></li>
                <li><a href={{ route('consuta') }}>Consulta</a></li>
                <li><a href={{ route('conta') }}>Conta</a></li>
            </ul>
        </div>
    </nav>

@yield('body')

</body>

</html>