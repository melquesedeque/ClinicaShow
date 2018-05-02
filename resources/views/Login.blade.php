<!DOCTYPE html>
<html>
<head>
	 <link rel="icon" href="estero.png" type="image/gif" sizes="16x16">
     <meta charset="UTF-8"/>
     <title>Clínica Show</title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	 <script href="{{asset('assets/css/Login.css')}}"></script>
 </head>
 <body>

   <nav class="navbar navbar-default" id="nav"><!-- nemu do site -->
	<!--  <img src="{{asset('img/estero.png')}}" width="50px" height="50px" id="foto"> --> 
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href= {{ route('home') }} >Clínica Show</a> <!--  bota imagem aqui do tamanho já correto-->
				<button class="navbar-toggle glyphicon glyphicon-menu-hamburger" data-toggle="collapse" data-target="#lista_show"></button>
			</div>
			
			<ul id="lista_show" class="nav navbar-nav navbar-right collapse navbar-collapse">
				<li><a href={{ route('home') }}>Home</a></li>
				<li class="active"><a href= {{ route('login') }} >Login</a></li>
			</ul>
		</div>
	 </nav>

	 {{session('erro')}}
	 
	<form action= "{{ route('entrar') }}" method="post" > <!-- Formulário de login-->
		{{ csrf_field() }}

	    <dir id="login">
		  <div class="imgcontainer">
		    <img src="https://icon-icons.com/icons2/979/PNG/256/Doctor_Male_icon-icons.com_75051.png" alt="Avatar" class="avatar">
		  </div>

		  <div class="container-forn">
		    <label for="name"><b>Login</b></label>
		    <input type="text" placeholder="Entre com seu nome" name="nome" required>

		    <label for="senha"><b>Senha</b></label>
		    <input type="password" placeholder="Enter com sua senha" name="senha" required>

		    <button id="button-login" type="submit" class="entralbtn"><a>Entrar</a></button>
		    <button id="button-cancelar" type="button" class="cancelbtn"><a href= {{ route('home') }} >Cancel</a></button>

		    <label>
		      <p> <input type="checkbox" checked="checked" name="remember"> Lembre-me <p/> 
		  	</label>
		  </div>
		</dir>
	</form>

 </body>
 </html>