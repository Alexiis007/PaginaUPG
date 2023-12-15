<?php
session_start();

include 'conexion.php';

$nombre_completo=$_POST['nombre_completo'];
$correo=$_POST['correo'];
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];

//Encriptacion de clave
$clave=hash('sha512', $clave);

$query="INSERT INTO Usuarios(nombre_completo,correo,usuario,clave) VALUES('$nombre_completo','$correo','$usuario','$clave')";

//Verificador de no repeticion en correo
$antiRepeticion_correo=mysqli_query($conexion, "SELECT * FROM Usuarios WHERE correo='$correo'");

if(mysqli_num_rows($antiRepeticion_correo)>0)
{
	echo'
	<script>
		alert("El correo ingresado ya existe!!");
		window.location="http://foroupg.260mb.net/";
	</script> ';
	mysql_close($conexion);
	exit();
}
//Verificador de no repeticion en usuario
$antiRepeticion_usuario=mysqli_query($conexion, "SELECT * FROM Usuarios WHERE usuario='$usuario'");

if(mysqli_num_rows($antiRepeticion_usuario)>0)
{	
	echo' 
	<script>
		alert("El nombre de usuario ingresado ya existe!!");
		window.location="http://foroupg.260mb.net/";
	</script> ';
	mysql_close($conexion);
	exit();
}

//Ejecutar la consulta de insercion de datos
$ejecutar=mysqli_query($conexion, $query);


//If para saber si se ejecuto y else si no se ejecuto
if($ejecutar)
{
	$_SESSION['usuario']=$correo;
	header("Location:/seccion_inicial/Pagina_Inicial.php");
}
else
{
	echo' 
	<script>
		alert("Algo salio mal :(");
		window.location="http://foroupg.260mb.net/";
	</script> ';
}


mysql_close($conexion);
?>