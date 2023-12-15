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
	
	<title>FOROUPG: EVENTOS Y ANUNCIOS</title>
</head>
<body>
	<h1>Eventos Y Anuncios</h1>
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
		<div class="anuncios">
			<div class="anuncio">
				<div class="imagen">
					<img src="assets/altar.png" style="">
				</div>
				<div class="texto">
					<h2>Altares Del Dia De Muertos</h2>
					<p>Evento en el cual podras rendir tributo a esos seres queridos que ya habran partido.<br>
						Por medio de un altar de muertos dale una bienvenida a esas personas en su regreso al mundo <br>
						de los vivos y por este dia disfruten y convivan como se debe. <br>
					</p>
					<p style="background-color: black; border-radius: 15px; color: white;">
						<strong>
							Evento Finalizado. Espera hasta el proximo dia de muertos para realizar tu altar.
						</strong>
					</p>
				</div>
			</div>
			<div class="anuncio">
				<div class="imagen">
					<img src="assets/tienda.png">
				</div>
				<div class="texto">
					<h2>Nuevo Tienda !!</h2>
					<p>Ahora podras ver una nueva tienda cerca de la universidad entre medio de el edificio 1 y el edificio 2,<br>
						cerca de los estacionamientos.<br>
						Esta tiendita ofrece de todo tipo de apeitivos como HotDogs, pizzas, Frituras, Tacos y sus famosos Burripizas los cuales<br>
					Los cuales podras acompañar con una refresco o algun agua de tu preferencia todo esto a precios accesibles.</p>
				</div>
			</div>
		</div>
		<div class="anuncios">
			<div class="anuncio">
				<div class="imagen">
					<img src="assets/empleo.png" style="">
				</div>
				<div class="texto">
					<h2>Feria de empleos.</h2>
					<p>Dia en el cual las empresas se ofrecen a dar oportunidad de que los alumnos puedan observar de los empleos.<br>
					En los cuales se pueden desempeñar y que conocimientos necesitan para realizarlo, este se lleva acabo entre la semana 2 del mes de junio</p>
					<p style="background-color: red; border-radius: 15px; color: white;">
						<strong>
							Evento En Proceso De Creacion.
						</strong>
					</p>
				</div>
			</div>
			<div class="anuncio">
				<div class="imagen">
					<img src="assets/navidad.png">
				</div>
				<div class="texto">
					<h2>Posada navideña.</h2>
					<p>A quien no le gustan las posadas, pues en la universidad algunos salones se reunen para realizar la posada <br>
						de navidad en la cual se realizan actividades recreativas como juegos, se prepara una comida y se entrega una bolsa de <br> dulces, esto y mas puedes realizar en la posada navideña.</p>
						<p style="background-image: url(assets/navidad2.png); border-radius: 15px; color: black;">
							<strong>
								Evento en proceso de creacion.
							</strong>
						</p>
					</div>
				</div>
			</div>
			<div class="anuncios">
				<div class="anuncio">
					<div class="imagen">
						<img src="assets/biblioteca.png" style="">
					</div>
					<div class="texto">
						<h2>Bibloteca Fisica.</h2>
						<p>Te informamos que hay una biblioteca en la universidad, esta la puedes encontrar debajo de las escaleras <br>
							cerca de donde estan las maquinas expendedoras.<br>
							En este podras encontrar demaciados libros de teoria y algunos de ficcion o novelas, debes saber que algunas<br>
							estan en ingles.<br>
							Tambien te pedimos que cuando termines de leer pongas de nuevo el libro en su lugar y si te quieres llevar uno primero <br> pregunta en recepcion para que te puedan anotar y te tomen tus datos y cuida los libros.</p>
							<p style="background-color: green; border-radius: 15px; color: black;">
								<strong>
									Si quieres aportar mas libros a la biblioteca reportalo en recepcion y con gusto aceptamos tu aporte.
								</strong>
							</p>
						</div>
					</div>
					<div class="anuncio">
						<div class="imagen">
							<img src="assets/estancias.png">
						</div>
						<div class="texto">
							<h2>Exposicion de estancias.</h2>
							<p>Este proceso de estancias se llevara acabo apartir del ## de noviembre pero puedes agendar tu turno para exponer <br>
								recuerda que los turnos se van acabando conforme se vallan llenando los espacios. <br>
								Esto se hace para demostrar lo que has logrado con tu proyecto de estancia, como lo lograste y que conseguiste.<br>
								Recuerda vestir formal para dar una exposicion mas formal. <br>
							Si no tienes idea de lo se debes realizar puedes preguntar en el chat principal y te contestaremos de la manera mas rapida posible.</p>
							<p style="background-color: skyblue; border-radius: 15px; color: black;">
								<strong>
									Proceso activo.
								</strong>
							</p>
						</div>
					</div>
				</div>
				<div class="anuncios">
					<div class="anuncio">
						<div class="imagen">
							<img src="assets/basquetball.png" style="">
						</div>
						<div class="texto">
							<h2>Convocatoria de Basquetbol</h2>
							<p>Se inicia convocatoria de basquetbol en la cual podras reunir a tus compañeros para jugar el torneo en el cual habra premios<br>
								para los primeros 3 lugares. <br>
								Esto se dara el 2 de diciembre a la 1:50 PM en el paque centenario del ejercito mexicano a un lado de el parque acuatico. <br>
								5 alumnos por equipo.<br>
							Inscripciones en las oficinas del area administrativa.</p>
							<p style="background-color: royalblue; border-radius: 15px; color: black;">
								<strong>
									Registra a tu equipo ya (Evento Activo).
								</strong>
							</p>
						</div>
					</div>
					<div class="anuncio">
						<div class="imagen">
							<img src="assets/Futbol.png">
						</div>
						<div class="texto">
							<h2>Convocatoria de Futbol</h2>
							<p>Se inicia convocatoria de Futbol en la cual podras reunir a tus compañeros para jugar el torneo en el cual habra premios<br>
								para los primeros 3 lugares. <br>
								Esto se dara el # de # a la # PM en las canchas de el parque acuatico. <br>
								5 alumnos por equipo.<br>
								Inscripciones en las oficinas del area administrativa.</p>
							<p style="background-color: seagreen; border-radius: 15px; color: black;">
								<strong>
									Registra a tu equipo ya (Evento Inactivo).
								</strong>
							</p>
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