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

  
  
  $(document).ready(function () {
    $("#reservaForm").submit(function (event) {
        // Evitar que el formulario se envíe automáticamente
        event.preventDefault();

        // Obtener valores de los campos
        var nombre = $("#nombre").val();
        var correo = $("#correo").val();
        var telefono = $("#telefono").val();
        var fecha = $("#fecha").val();
        var personas = $("#personas").val();

        // Verificar campos
        var mensajeError = "";

        if (nombre === '') {
            mensajeError += "Por favor, ingresa tu nombre.\n";
        }

        if (correo === '') {
            mensajeError += "Por favor, ingresa tu correo electrónico.\n";
        } else if (!isValidEmail(correo)) {
            mensajeError += "Por favor, ingresa un correo electrónico válido.\n";
        }

        if (telefono === '') {
            mensajeError += "Por favor, ingresa tu número de teléfono.\n";
        }

        if (fecha === '') {
            mensajeError += "Por favor, selecciona una fecha de reserva.\n";
        }

        if (personas === '') {
            mensajeError += "Por favor, selecciona el número de personas.\n";
        }

        // Mostrar mensajes de error o éxito
        if (mensajeError !== '') {
            alert("Por favor, corrige los siguientes errores:\n\n" + mensajeError);
        } else {
            // Todos los campos son válidos, puedes enviar el formulario o hacer lo que necesites aquí
            alert("Formulario enviado correctamente");
            // Aquí puedes agregar lógica adicional, como enviar el formulario mediante AJAX
        }
    });

    // Función para validar el formato del correo electrónico
    function isValidEmail(email) {
        var regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return regex.test(email);
    }
});

$(document).ready(function () {
  // Mostrar u ocultar precio al hacer clic en el botón
  $(".toggle-precio").click(function () {
      var precioElement = $(this).siblings(".precio").find("span");
      precioElement.toggleClass("precio-oculto");
  });

  // Calcular el total de la orden
  $("#calcularTotal").click(function () {
      var totalAmount = 0;

      $(".menu-item").each(function () {
          var precioElement = $(this).find(".precio span");
          var precio = parseFloat(precioElement.data("precio"));
          var cantidad = parseInt($(this).find(".cantidad").val());

          if (!precioElement.hasClass("precio-oculto")) {
              totalAmount += precio * cantidad;
          }
      });

      // Actualizar el total en la página
      $("#total").text(totalAmount.toFixed(2));
  });
});