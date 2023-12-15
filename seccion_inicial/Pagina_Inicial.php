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
	<title>Foro UPG</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Courgette&family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <meta http-equiv='cache-control' content='no-cache'>
  <meta http-equiv='expires' content='0'>
  <meta http-equiv='pragma' content='no-cache'>
  
  <link rel="stylesheet" type="text/css" href="assets/Estilo.css">
  <link rel="stylesheet" href="assets/style.css">
  <link rel="icon" type="text/css" href="../Registro/assets/logo.png">
  <script src="assets/main.js"></script>
  
</head>
<body>
  
	<h1>Chat Principal</h1>
    <div class="encabezado">
        <div class="menu_bar">
            <a href="#" class="bt-menu"><i class="fa-sharp fa-solid fa-bars"></i>Menu</a>
        </div>
        <nav class="navegacion">
            <ul class="menu">
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



  <div class="Caja_comentarios">
    <div id="disqus_thread"></div>
    <script>
    /**
    *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
    *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
    /*
    var disqus_config = function () {
    this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
    this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
    };
    */
    (function() { // DON'T EDIT BELOW THIS LINE
      var d = document, s = d.createElement('script');
      s.src = 'https://foroupg.disqus.com/embed.js';
      s.setAttribute('data-timestamp', +new Date());
      (d.head || d.body).appendChild(s);
    })();
  </script>
  <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
</div>
</body>
<script id="dsq-count-scr" src="//foroupg.disqus.com/count.js" async></script>




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

</html>