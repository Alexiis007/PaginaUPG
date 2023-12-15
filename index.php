<?php

  session_start();
  if (isset($_SESSION['usuario'])) {
    header("location:seccion_inicial/Pagina_Inicial.php");
  }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="">
	<title>Login/Registro</title>
	<link rel="stylesheet" type="text/css" href="Registro\assets\style.css">
	<link rel="icon" type="text/css" href="../Registro/assets/logo.png">
</head>

<main>

<body>
	<!--Contenedor de todo-->
<div class="Contenedor_Global">

	<!--Zona trasera-->
	<div class="Caja_Trasera">
		<div class="Login">
			<h3>¿Ya tienes cuenta?</h3>
			<p>Inicia sesion para poder entrar a ForoUPG</p>
			<button id="btn_iniciarSesion">Iniciar Sesión</button>
		</div>
		<div class="Registro">
			<h3>¿Aun no tienes cuenta?</h3>
			<p>Registrate para poder entrar a ForoUPG</p>
			<button id="btn_registrar">
			Registrarse
			</button>
		</div>

	</div>
	<!--Fin de la zona trasera-->
	<!--Formularios-->
	<div class="Contenedor_Formularios">
		<form action="Registro/php/login_usuarios.php"class="Form_Login" method="POST">  <!--Se pasa la clase Login a el formulario-->
			<h2>Iniciar Sesión</h2>
			<input type="email" placeholder="Correo Electronico" name="correo">
			<input type="password" placeholder="contraseña" name="clave">
			<button>Entrar</button>
			<!--Se crea el otro formulario el cual sera de registro, se hace un proceso identico al de login-->
		</form>
		<form action="Registro/php/registro_usuarios.php" method="POST" class="Form_Registro">
			<h2>Regístrarse</h2>
			<input type="nombre" placeholder="Nombre Completo" name="nombre_completo">
			<input type="email" placeholder="Correo Electronico" name="correo">
			<input type="usuario" placeholder="Nombre de Usuario" name="usuario">
			<input type="password" placeholder="Contraseña" name="clave">
			<button>Regístrarse</button>
		</form>
	</div>
	<!--Fin de Formularios-->


</div>
	<!--Fin del contenedor global-->
</main>

<script src="Registro\assets\script.js"></script>

</body>
</html>