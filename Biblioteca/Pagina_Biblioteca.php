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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="assets/main.js"></script>
	<link rel="icon" type="text/css" href="../Registro/assets/logo.png">

	<meta name="viewport" content="device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=0.1" >
	<title>FOROUPG: Biblioteca</title>
</head>
<body>
	<div class="contenedor">
		<h1>Biblioteca</h1>
		<div class="encabezado">
			<div class="menu_bar">
			<a href="#" class="bt-menu"><i class="fa-sharp fa-solid fa-bars"></i>Menu</a>
		</div>
		<nav>
			<ul>
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
		<div class="main">
			<div class="frase">
				<strong>
					<p>
						La lectura es como el alimento; el provecho no está en<br>
						proporción de lo que se come, sino de en lo que se digiere.<br>
					</p>
					<h2><i>Jaime Balmaes.</i></h1>
					</strong>
				</div>
				<div class="estanteria">
					<div class="libro">
						<div class="imagen">
							<img src="assets/portada.png" style="">
						</div>
						<div class="informacion">
							<img src="assets/Reseña.png" style="">
						</div>
						<div class="descargarLibro">
							<div class="descargarLibro">
								<a style="text-decoration: none;" href="Libros\Ciencias Espaciales.pdf" download="">Descargar</a>
							</div>
						</div>
					</div>
					<div class="libro">
						<div class="imagen">
							<img src="assets/portada2.png" style="">
						</div>
						<div class="informacion">
							<img src="assets/Reseña2.png" style="">
						</div>
						<div class="descargarLibro">
							<div class="descargarLibro">
								<a style="text-decoration: none;" href="Libros\hp-lovecraft-el-que-susurra-en-la-oscuridad.pdf" download="">Descargar</a>
							</div>
						</div>
					</div>
					<div class="libro">
						<div class="imagen">
							<img src="assets/portada3.png" style="">
						</div>
						<div class="informacion">
							<img src="assets/Reseña3.png" style="">
						</div>
						<div class="descargarLibro">
							<div class="descargarLibro">
								<a style="text-decoration: none;" href="Libros\Metodologia_de_la_programacion_orientada.pdf" download="">Descargar</a>
							</div>
						</div>
					</div>
					<div class="libro">
						<div class="imagen">
							<img src="assets/portada4.png" style="">
						</div>
						<div class="informacion">
							<img src="assets/Reseña4.png" style="">
						</div>
						<div class="descargarLibro">
							<a style="text-decoration: none;" href="Libros\C-C++ Curso de Programación ( PDFDrive ).pdf" download="">Descargar</a>
						</div>
					</div>
				</div>
				<div class="estanteria">
					<div class="libro">
						<div class="imagen">
							<img src="assets/portada5.png" style="">
						</div>
						<div class="informacion">
							<img src="assets/Reseña5.png" style="">
						</div>
						<div class="descargarLibro">
							<div class="descargarLibro">
								<a style="text-decoration: none;" href="Libros\Ingles para Dummies.pdf" download="">Descargar</a>
							</div>
						</div>
					</div>
					<div class="libro">
						<div class="imagen">
							<img src="assets/portada6.png" style="">
						</div>
						<div class="informacion">
							<img src="assets/Reseña6.png" style="">
						</div>
						<div class="descargarLibro">
							<div class="descargarLibro">
								<a style="text-decoration: none;" href="Libros\Probabilidad y estadistica.pdf" download="">Descargar</a>
							</div>
						</div>
					</div>
					<div class="libro">
						<div class="imagen">
							<img src="assets/portada7.png" style="">
						</div>
						<div class="informacion">
							<img src="assets/Reseña7.png" style="">
						</div>
						<div class="descargarLibro">
							<div class="descargarLibro">
								<a style="text-decoration: none;" href="Libros\la-biblia-de-c-sharp-gratis.pdf" download="">Descargar</a>
							</div>
						</div>
					</div>
					<div class="libro">
						<div class="imagen">
							<img src="assets/portada8.png" style="">
						</div>
						<div class="informacion">
							<img src="assets/Reseña8.png" style="">
						</div>
						<div class="descargarLibro">
							<a style="text-decoration: none;" href="Libros\Eloquent_JavaScript.pdf" download="">Descargar</a>
						</div>
					</div>
				</div>
				<div class="estanteria">
					<div class="libro">
						<div class="imagen">
							<img src="assets/portada9.png" style="">
						</div>
						<div class="informacion">
							<img src="assets/Reseña9.png" style="">
						</div>
						<div class="descargarLibro">
							<div class="descargarLibro">
								<a style="text-decoration: none;" href="Libros\El+gran+libro+de+HTML5+CSS3+y+Javascrip.pdf" download="">Descargar</a>
							</div>
						</div>
					</div>
					<div class="libro">
						<div class="imagen">
							<img src="assets/portada10.png" style="">
						</div>
						<div class="informacion">
							<img src="assets/Reseña10.png" style="">
						</div>
						<div class="descargarLibro">
							<div class="descargarLibro">
								<a style="text-decoration: none;" href="Libros\El_arte_de_la_guerra-Sun_Tzu.pdf" download="">Descargar</a>
							</div>
						</div>
					</div>
					<div class="libro">
						<div class="imagen">
							<img src="assets/portada11.png" style="">
						</div>
						<div class="informacion">
							<img src="assets/Reseña11.png" style="">
						</div>
						<div class="descargarLibro">
							<div class="descargarLibro">
								<a style="text-decoration: none;" href="https://drive.google.com/file/d/15t2yxRaoNtBd3Z-8svzBOoX4zd9_4zWu/view?usp=share_link" download="">Descargar</a>
							</div>
						</div>
					</div>
					<div class="libro">
						<div class="imagen">
							<img src="assets/portada12.png" style="">
						</div>
						<div class="informacion">
							<img src="assets/Reseña12.png" style="">
						</div>
						<div class="descargarLibro">
							<a style="text-decoration: none;" href="Libros\Arduino Curso Práctico de formación ( PDFDrive ).pdf" download="">Descargar</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--::::Pie de Pagina::::::-->
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
						a mejorar la pagina web manda un mensaje al correo <a href="mailto:christianalexis0918@gmail.com?subject=ForoUPG%3A%20(%22INGRESE%20EL%20TEMA%20O%20ASUNTO%20AQUI%22)&body=Hola%20quiero%20decir...">christianalexis0918@gmail.com</a>
					</p>
				</div>
				<div class="caja">
					<h2>Contactanos</h2>
					<div class="red-social">
						<a href="https://wa.me/8110482774" class="fa-brands fa-whatsapp"></a>
						<a href="#" class="fa-brands fa-facebook"></a>
						<a href="mailto:christianalexis0918@gmail.com?subject=ForoUPG%3A%20(%22INGRESE%20EL%20TEMA%20O%20ASUNTO%20AQUI%22)&body=Hola%20quiero%20decir..." class="fa-brands fa-telegram"></a>
					</div>
				</div>
			</div>
			<div class="grupo-2">
				<small>&copy; 2022 <b>ForoUPG</b> - Todos los Derechos Reservados.</small>
			</div>
		</footer>
		<div class="alert" >
			<h1>Advertencia!!</h1>
			<p>¿Ya cerraste tu cuenta en el chat principal? Revisa bien antes de salir.</p>
			<a href=/seccion_inicial/Pagina_Inicial.php id="volver">Volver a revisar</a>
			<a href="/Registro/php/cerrar_sesion.php">Cerrar sesión</a>
		</div>
		<script src="..\Registro\assets\alerta.js"></script>
	</body>
	</html>