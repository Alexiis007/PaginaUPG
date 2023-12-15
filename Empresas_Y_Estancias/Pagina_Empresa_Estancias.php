<?php
session_start();
if (!isset($_SESSION['usuario'])) {
	echo '
	<script>
	alert("Por favor inicia sesión primero");
	window.location="http://foroupg.260mb.net/";
	</script>
	';
	session_destroy();
	die();
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Courgette&family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="assets/Estilos.css">
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
	<link rel="icon" type="text/css" href="../Registro/assets/logo.png">
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script src="assets/main.js"></script>

	<title>FOROUPG: EMPRESAS Y ESTANCIAS</title>
</head>
<body>
	<div class="encabezado">
		<h1>Empresas Y Estancias</h1>
		<div class="menu_bar">
			<a href="#" class="bt-menu"><i class="fa-sharp fa-solid fa-bars"></i>Menu</a>
		</div>
		<nav>
			<ul style="padding: 0px; margin: 0px;">
				<li><a href="/Arte/Arte.php"><i class="fa-regular fa-comments"></i>Galeria UPG</a></li>
				<li><a href="/seccion_inicial/Pagina_Inicial.php"><i class="fa-regular fa-comments"></i>Chat Principal</a></li>
				<li><a href="/Chat_Anonimo"><i class="fa-solid fa-user-secret"></i>Chat Anonimo</a></li>
				<li><a href="/Empresas_Y_Estancias/Pagina_Empresa_Estancias.php"><i class="fa-sharp fa-solid fa-briefcase"></i>Empresas Y Estancias</a></li>
				<li><a href="/Eventos_Y_Anuncios/Pagina_Eventos_Y_Anuncios.php"><i class="fa-regular fa-calendar-days"></i>Anuncios Y Eventos</a></li>
				<li><a href="/Biblioteca/Pagina_Biblioteca.php"><i class="fa-solid fa-book-atlas"></i>Bliblioteca</a></li>
				<li><a href="https://www.upgarcia.edu.mx">UPG OFICIAL</a></li>
				<li><a id="cerrar_sesion" style="cursor: pointer;">Cerrar Sesion<i class="fa-solid fa-arrow-right-from-bracket"></i></a></li>
			</ul>
		</nav>
	</div>
</div> 
<div class="main">
	<!------------------------------Caja 1------------------------------->
	<div class="Galeria">
		<h3>Estancias</h3>
		<div class="Foto">
			<div class="imagen">
				<img src="assets/proyecto.jpg" style="">
				<center><a style="text-decoration: none;" href="Libros\Manual para el llenado de reporte de estancias.pdf" download="">Descargar</a></center>
			</div>
			<div class="texto">
				<h2>Estancia 1</h2>
				<p>La estancia 1 consiste en un proyecto elaborado en base a tus conocimientos que adquiristes en tu primer cliclo escolar</p>
			</div>
		</div>
	</div>
	<div class="CAJA">
		<div class="OBJETO">

			<div class="imagen">
				<img src="assets/Estancia1(ISC).jpg" style="">
			</div>
			<div class="texto">
				<h2>Estancia 1 ISC Ejemplo:</h2>
				
				<p>
					Autor: Emmanuel Matamoros Lopez <br>
					N. del Proyecto: Soporte y limpieza de equipos de cómputo sala 2 UPGARCIA<br>
					Ejemplo descargable de lo que puedes hacer en tu estancia 1 siendo estudiante de sistemas:<br>
					<center><a style="text-decoration: none;" href="Libros\Reporte_Final_Eml.pdf" download="">Descargar</a></center>
				</p>


			</div>
		</div>
		<div class="OBJETO">
			<div class="imagen">
				<img src="assets/Estancia 1 II.jpg" style="">
			</div>
			<div class="texto">
				<h2>Estancia 1 II Ejemplo:</h2>
				<p>
					Autor: Fransisco Alejandro Martinez Arriaga <br>
					N. del Proyecto: 5's UPGARCIA<br>
					Ejemplo descargable de lo que puedes hacer en tu estancia 1 siendo estudiante de Industrial:<br>
					<center><a style="text-decoration: none;" href="Libros\PROYECTO.pdf" download="">Descargar</a></center>
				</p>
			</div>
		</div>
	</div>

	<!------------------------------Caja 2------------------------------->
	<div class="Galeria">
		<h3>Empresas</h3>
	</div>
	<div class="CAJA">
		<div class="OBJETO">

			<div class="imagen">
				<img src="assets/Anuncio-1.jpg" style="">
			</div>
			<div class="texto">
				<h2>Datos de la Empresa</h2>
				
				<p> Correo: <a href="ihernandez1@methode.com">ihernandez1@methode.com</a></p>
				<p> Tel: <a href="tel:+52 8110600166">8110600166</a></p>
			</div>
		</div>
		<div class="OBJETO">
			<div class="imagen">
				<img src="assets/Anuncio-2.jpg" style="">
			</div>
			<div class="texto">
				<h2>Datos de la Empresa</h2>
				
				<p> Correo: <a href="ihernandez1@methode.com">ihernandez1@methode.com</a></p>
				<p> Tel: <a href="tel:+52 8110600166">8110600166</a></p>
			</div>
		</div>
	</div>

	<!------------------------------Caja 3------------------------------->
	<div class="CAJA">
		<div class="OBJETO">
			<div class="imagen">
				<img src="assets/Anuncio-3.jpg" style="">
			</div>
			<div class="texto">
				<h2>Datos de la Empresa</h2>
				<p> Correo: <a href="ihernandez1@methode.com">ihernandez1@methode.com</a></p>
				<p> Tel: <a href="tel:+52 8110600166">8110600166</a></p>
			</div>
		</div>
		<div class="OBJETO">
			<div class="imagen">
				<img src="assets/Anuncio-4.jpg" style="">
			</div>
			<div class="texto">
				<h2>Datos de la Empresa</h2>
				<p> Correo: <a href="ihernandez1@methode.com">ihernandez1@methode.com</a></p>
				<p> Tel: <a href="tel:+52 8110600166">8110600166</a></p>
			</div>
		</div>
	</div>
</div>



<!--:::::::::::::::Pie de Pagina::::::::::::::::::::::::-->
<footer class="pie-pagina">
	<div class="grupo-1">
		<div class="caja">
			<h2>ForoUPG.</h2>
			<p>Intentamos que este sitio te ayude a resolver tus dudas aparte de intentar brindarte <br>
				la mayor cantidad de materiales e informacion que podamos para enriquecer tu conocimiento. <br>
			</p>
		</div>
		<div class="caja">
			<h2>Informacion.</h2>
			<p>Esta pagina fue realizada por Christian Juarez y Emmanuel Matamoros en busca de generar <br>
				una herramienta para los alumnos. Si es que se te ocurre una idea para la pagina o quieres contribuir <br>
				a mejorar la pagina web manda un mensaje al correo <a href="christianalexis0918@gmail.com">christianalexis0918@gmail.com</a>
			</p>
		</div>
		<div class="caja">
			<h2>Contactanos</h2>
			<div class="red-social">
				<a href="https://wa.me/8110482774" class="fa-brands fa-whatsapp"></a>
				<a href="#" class="fa-brands fa-facebook"></a>
				<a href="christianalexis0918@gmail.com" class="fa-brands fa-telegram"></a>
			</div>
		</div>
	</div>
	<div class="grupo-2">
		<small>&copy; 2022 <b>ForoUPG</b> - Todos los Derechos Reservados.</small>
	</div>
</footer>
<!--::::Alerta::::::-->
<div class="alert" >
	<h1>Advertencia!!</h1>
	<p>¿Ya cerraste tu cuenta en el chat principal? Revisa bien antes de salir.</p>
	<a href=/seccion_inicial/Pagina_Inicial.php id="volver">Volver a revisar</a>
	<a href="/Registro/php/cerrar_sesion.php">Cerrar sesión</a>
</div>
<script src="..\Registro\assets\alerta.js"></script>
</body>
</html>