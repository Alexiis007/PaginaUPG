<?php
session_start();


include 'conexion.php';

$correo = $_POST['correo'];
$clave=$_POST['clave'];
$clave=hash('sha512', $clave);



$validacion_login = mysqli_query($conexion, "SELECT * FROM Usuarios WHERE correo='$correo' AND clave='$clave'");

if (mysqli_num_rows($validacion_login)>0) {
	$_SESSION['usuario']=$correo;
	echo'
	<script>
		window.location="/seccion_inicial/Pagina_Inicial.php";
	</script> ';
	exit();
}
else
{
	echo'
	<script>
		alert("El correo ingresado o la contraseña estan mal revise bien sus datos.");
		window.location="http://foroupg.260mb.net/";
	</script> ';
	mysql_close($conexion);
	exit();
}

?>