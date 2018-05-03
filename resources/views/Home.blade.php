<!DOCTYPE html>
<html>

<head>
    <link rel="icon" href="{{asset('assets/img/estero.png')}}" type="image/gif" sizes="16x16">
    <meta charset="UTF-8" />
    <title>Clínica Show</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>

        .navbar-default{
            margin :0;
        }
        #foto {
            margin-top: 2px;
            position: absolute;
        }
    </style>
</head>

<body>


    <nav class="navbar navbar-default" id="nav">
        <!-- menuu do site -->
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href={{ route( 'home') }}>Clínica Show</a>
                <!--  bota imagem aqui do tamanho já correto-->
                <button class="navbar-toggle glyphicon glyphicon-menu-hamburger" data-toggle="collapse" data-target="#lista_show"></button>
            </div>

            <ul id="lista_show" class="nav navbar-nav navbar-right collapse navbar-collapse">
                <li class="active"><a href={{ route( 'home') }}>Home</a></li>
                <li><a href={{ route( 'login') }}>Login</a></li>
            </ul>
        </div>
    </nav>

    <div id="carousel" class="carousel slide" data-ride="carousel">
        <!-- Base para o Carrosel -->

        <ol class="carousel-indicators">
            <!-- Lista ordenada para os slides (indicadores)-->
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner" role="listbox">
            <!-- Base para conteúdos -->

            <div class="item active">
                <img class="d-block w-100" src="https://i.pinimg.com/originals/aa/d8/b3/aad8b364e9e2275ab80b0c5705cb75d8.jpg" alt="First slide" width="100%">
            </div>

            <div class="item">
                <img class="d-block w-100" src="http://www.clinicaleger.com.br/images/2015-03-25-Leger-002.jpg" alt="Second slide" width="100%">
            </div>

            <div class="item">
                <img class="d-block w-100" src="http://www.clinicaazzi.com.br/wp-content/uploads/2016/06/1img_0033.jpg" alt="Third slide" width="100%">
            </div>

        </div>
        <a class="left carousel-control" href="#carousel" data-slide="prev">
            <i class="glyphicon glyphicon-chevron-left"></i>
        </a>

        <a class="right carousel-control" href="#carousel" data-slide="next">
            <i class="glyphicon glyphicon-chevron-right"></i>
        </a>
    </div>
    <script>
        $('#carousel').carousel({
            interval: 3000
        })
    </script>
    <!-- tempo do passador de slides-->

</body>

</html>