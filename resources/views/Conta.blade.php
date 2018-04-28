<!DOCTYPE html>
<html>
<head>
  <link rel="icon" href="estero.png" type="image/gif" sizes="16x16">	
  <title>Clínica Show</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="conta.css">

  <style>
  	th, .hora{
  		text-align:center;
  	}
  </style>
</head>
<body>
	<nav class="navbar navbar-default" id="nav"><!-- nemu do site -->
		<img src="estero.png" width="50px" height="50px" id="foto">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand" href= {{ route('conta') }} >Clínica Show</a> <!--  bota imagem aqui do tamanho já correto-->
        <button class="navbar-toggle glyphicon glyphicon-menu-hamburger" data-toggle="collapse" data-target="#lista_show"></button>
      </div>
      
      <ul id="lista_show" class="nav navbar-nav navbar-right collapse navbar-collapse">
        <li><a href= {{route('cadastrar-paciente')}} >Cadastrar Paciente</a></li>
        <li><a href= {{ route('cadastrar-funcionario') }} >Cadastrar Funcionário</a></li>
        <li><a href= {{ route('consuta') }} >Consulta</a></li>
        <li class="active"><a href= {{ route('conta') }} >Conta</a></li>
        <li><a href= {{ route('deslogar') }} >Deslogar</a></li>
      </ul>
    </div>
   </nav>

<form action="" style="border:#ccc">
   <div class="container">

	   <h2>Agenda</h2> <!--  -->

			<table>
			  <tr>
			  	<th>HORÁRIOS</th>
			    <th>SEGUNDA-FEIRA</th>
			    <th>TERÇA-FEIRA</th>
			    <th>QUARTA-FEIRA</th>
			    <th>QUINTA-FEIRA</th>
			    <th>SEXTA-FEIRA</th>
			    <th>SÁBADO</th>
			  </tr>
			  <tr>
			    <td class="hora">8H00 ás 10H00</td>
			    <td></td>
			    <td></td>
			    <td></td>
			    <td></td>
			    <td></td>
			    <td></td>
			  </tr>
			  <tr>
			    <td class="hora">10H00 ás 12H00</td>
			    <td></td>
			    <td></td>
			    <td></td>
			    <td></td>
			    <td></td>
			    <td></td>
			  </tr>
			  <tr>
			    <td class="hora">14H00 ás 16H00</td>
			    <td></td>
			    <td></td>
			    <td></td>
			    <td></td>
			    <td></td>
			    <td></td>
			  </tr>
			  <tr>
			    <td class="hora">16H00 ás 18H00</td>
			    <td></td>
			    <td></td>
			    <td></td>
			    <td></td>
			    <td></td>
			    <td></td>
			  </tr>
			  <tr>
			    <td class="hora">18H00 ás 20H00</td>
			    <td></td>
			    <td></td>
			    <td></td>
			    <td></td>
			    <td></td>
			    <td></td>
			  </tr>
			  <tr>
			    <td class="hora">20H00 ás 22H00</td>
			    <td></td>
			    <td></td>
			    <td></td>
			    <td></td>
			    <td></td>
			    <td></td>
			  </tr>
			</table>
	</div>		
</form>

</body>
</html>