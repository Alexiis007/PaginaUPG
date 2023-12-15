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
	
<title>FOROUPG: Galeria De Arte</title>
</head>
<body>
	<h1>Galeria UPG</h1>
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
<div class="Galeria">
		<div class="Foto">
			<div class="imagen">
						<img src="assets/Fotografias/Fotografia (1).jpeg" style="">
			</div>
			<div class="texto">
				<h2>Tormenta En Garcia</h2>
				<p>Fotografia tomada por: Ricardo Vazques Mariscal.</p>
				<p><i>"Dudar y no creer es algo muy distinto y si dudo de Dios es porque no lo he visto..."</i></p>
			</div>
		</div>
		<div class="Foto">
			<div class="imagen">
						<img src="assets/Fotografias/Fotografia (2).jpeg" style="">
			</div>
			<div class="texto">
				<h2>Sol a la lejanía.</h2>
				<p>Fotografia tomada por: Ricardo Vazques Mariscal.</p>
				<p><i>"El 80% del exito se basa simplemente en insistir."</i></p>
			</div>
		</div>
		<div class="Foto">
			<div class="imagen">
						<img src="assets/Fotografias/Fotografia (3).jpeg" style="">
			</div>
			<div class="texto">
				<h2>Amanecer 1.</h2>
				<p>Fotografia tomada por: Ricardo Vazques Mariscal.</p>
				<p><i>"El camino al exito es la actitud."</i></p>
			</div>
		</div>
		<div class="Foto">
			<div class="imagen">
						<img src="assets/Fotografias/Fotografia (4).jpeg" style="">
			</div>
			<div class="texto">
				<h2>Amanecer 2.</h2>
				<p>Fotografia tomada por: Ricardo Vazques Mariscal.</p>
				<p><i>"Haz de tu vida una obra de arte sin límites."</i></p>
			</div>
		</div>
		<div class="Foto">
			<div class="imagen">
						<img src="assets/Fotografias/Fotografia (5).jpeg" style="">
			</div>
			<div class="texto">
				<h2>Nada</h2>
				<p>Fotografia tomada por: Ricardo Vazques Mariscal.</p>
				<p><i>"Sé el cambio que quieres ver en el mundo"</i></p>
			</div>
		</div>
		<div class="Foto">
			<div class="imagen">
						<img src="assets/Fotografias/Fotografia (6).jpeg" style="">
			</div>
			<div class="texto">
				<h2>Nubla triste</h2>
				<p>Fotografia tomada por: Ricardo Vazques Mariscal.</p>
				<p><i>"La invito a bailar, señora soledad, sobre el planeta. Y perdón si la piso, pero es que este corazón me aprieta."</i></p>
			</div>
		</div>
		<div class="Foto">
			<div class="imagen">
						<img src="assets/Fotografias/Fotografia (7).jpeg" style="">
			</div>
			<div class="texto">
				<h2>El Dorado</h2>
				<p>Fotografia tomada por: Ricardo Vazques Mariscal.</p>
				<p><i>"Muchos piensan en cambiar el mundo, pero casi nadie piensa en cambiarse a sí mismo"</i></p>
			</div>
		</div>
		<div class="Foto">
			<div class="imagen">
						<img src="assets/Fotografias/Fotografia (8).jpeg" style="">
			</div>
			<div class="texto">
				<h2>Montañas Nubosas.</h2>
				<p>Fotografia tomada por: Ricardo Vazques Mariscal.</p>
				<p><i>"Si estás trabajando en algo que te importa de verdad, nadie tiene que empujarte: tu visión te empuja"</i></p>
			</div>
		</div>
		<div class="Foto">
			<div class="imagen">
						<img src="assets/Fotografias/Fotografia (9).jpeg" style="">
			</div>
			<div class="texto">
				<h2>Cielo Nublado</h2>
				<p>Fotografia tomada por: Ricardo Vazques Mariscal.</p>
				<p><i>"No esperes. Nunca va a ser el momento adecuado"</i></p>
			</div>
		</div>
		<div class="Foto">
			<div class="imagen">
						<img src="assets/Fotografias/Fotografia (10).jpeg" style="">
			</div>
			<div class="texto">
				<h2>Dia En La UPG</h2>
				<p>Fotografia tomada por: Ricardo Vazques Mariscal.</p>
				<p><i>"La creatividad es la inteligencia divirtiéndose"</i></p>
			</div>
		</div>
			<div class="Foto">
			<div class="imagen">
						<img src="assets/Fotografias/Fotografia (11).jpeg" style="">
			</div>
			<div class="texto">
				<h2>Cielo De Algodon</h2>
				<p>Fotografia tomada por: Ricardo Vazques Mariscal.</p>
				<p><i>"No tienes que ser grande para empezar. Pero tienes que empezar para poder ser grande"</i></p>
			</div>
		</div>
		<div class="caja_texto">
				<h2 style="color: yellow;">Aporta Fotografías A La Galería.</h2>
				<p>La fotografía es un arte que busca reinterpretar la realidad y transformarla en imágenes. Como un pintor sobre un lienzo,<br>
				 el fotógrafo es capaz de expresarse creativamente por medio de la cámara y crear sus obras a través de la luz y su imaginación.</p>
				 <p>Cualquiera puede desarrollar esta habilidad con la practica y la belleza del arte esta en compartir lo que logramos apreciar en el <br>
				 	escenario que nos toca captar ya sea de la naturaleza, la ciudad, las calles, abstractas, etc.</p>
				 	<p>Si quieres aportar fotografias manda un mensaje al correo <a style="text-decoration:none ; color: white;" href="mailto:christianalexis0918@gmail.com?subject=ForoUPG%3A%20(%22INGRESE%20EL%20TEMA%20O%20ASUNTO%20AQUI%22)&body=Hola%20quiero%20decir...">christianalexis0918@gmail.com</a>.</p>
				<p style="color: #6076e5;"><i>"Lo importante es ver aquello que resulta invisible para los demas."</i></p>
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