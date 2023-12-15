//Declaracion de variables

var alerta = document.querySelector(".alert");

document.getElementById("cerrar_sesion").addEventListener("click", funcion1);
document.getElementById("volver").addEventListener("click", funcion2);


//funcion para que se mueva el formulario de registrar a la derecha
//y desaparesca el fromulario de iniciar secion
function funcion1() {
  alerta.style.display = "block";
}
function funcion2() {
  alerta.style.display = "none";
}
