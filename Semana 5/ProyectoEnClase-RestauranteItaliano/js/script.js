function  mostrarMensaje(){

    alert("HOLA");

}

function validar(){

    var username = document.getElementById("username").value;

    var password = document.getElementById("password").value;

    var validacion = 0;

    if(password.length < 5){

        validacion++;

        alert("Error el password debe ser mayor a 5 digitos");

    } if(username == "" || password == ""){

        validacion++;

        alert("Error todos los campos deben tener informacion")

    }

    if(validacion == 0){

        var formulario = document.getElementById("formLogin");

        formulario.submit();

    }

}
function validarFormulario() {
    var nombre = document.getElementById("nombre").value;
    var email = document.getElementById("email").value;
    var mensaje = document.getElementById("mensaje").value;

    if (nombre === "" || email === "" || mensaje === "") {
      alert("Por favor, complete todos los campos.");
      return false;
    }

    if (!validarEmail(email)) {
      alert("Por favor, ingrese una dirección de correo electrónico válida.");
      return false;
    }

    return true;
  }

  function validarEmail(email) {
    var re = /\S+@\S+\.\S+/;
    return re.test(email);
  }

  function mouseHover() {
    var submitButton = document.getElementById("submit-button");
    submitButton.style.backgroundColor = "#007cd4";
  }

  function mouseOut() {
    var submitButton = document.getElementById("submit-button");
    submitButton.style.backgroundColor = "#FF5733";
  }