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