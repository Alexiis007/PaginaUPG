//Declaracion de variables

var formularios = document.querySelector(".Contenedor_Formularios");
var formulario_login = document.querySelector(".Form_Login");
var formulario_registro = document.querySelector(".Form_Registro");
var caja_trasera_login = document.querySelector(".Login");
var caja_trasera_registro = document.querySelector(".Registro");

document.getElementById("btn_registrar").addEventListener("click", funcion_btn_registrar);
document.getElementById("btn_iniciarSesion").addEventListener("click", funcion_btn_iniciarSesion);

//funcion para que se mueva el formulario de registrar a la derecha
//y desaparesca el fromulario de iniciar secion
function funcion_btn_registrar() {
	formulario_registro.style.display = "block";
	formularios.style.left="410px";
	formulario_login.style.display= "none";
	caja_trasera_registro.style.opacity="0";
	caja_trasera_login.style.opacity="1";

}
function funcion_btn_iniciarSesion() {
	formulario_registro.style.display = "none";
	formularios.style.left="10px";
	formulario_login.style.display= "block";
	caja_trasera_registro.style.opacity="1";
	caja_trasera_login.style.opacity="0";

}

