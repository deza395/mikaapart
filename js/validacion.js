// validacion de los campos del formulario

// declaro las variables

var nombre= document.getElementById('nombre');
var telefono= document.getElementById('telefono');
var email= document.getElementById('email');
var mensaje= document.getElementById('mensaje');
var btnEnviar= document.getElementById('enviar');


// eventliseners
eventListners();
function eventListners(){
  // desabilito el boton

  document.addEventListener('DOMContentloaded', inicioApp);
}


// funciones

function inicioApp(){
  // desabilitamos el envio
  btnEnviar.disabled=true;

}
