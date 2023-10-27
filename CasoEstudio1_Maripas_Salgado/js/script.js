// Validación del formulario antes de enviar
document.getElementById('contact-form').addEventListener('submit', function (event) {
    const nombre = document.getElementById('nombre');
    const email = document.getElementById('email');
    const mensaje = document.getElementById('mensaje');
    
    if (nombre.value.trim() === '' || email.value.trim() === '' || mensaje.value.trim() === '') {
        event.preventDefault(); // Detiene el envío del formulario
        alert('Por favor, complete todos los campos.');
    } else if (!isValidEmail(email.value)) {
        event.preventDefault(); // Detiene el envío del formulario
        alert('Por favor, ingrese un correo electrónico válido.');
    }
});

// Función para validar correo electrónico
function isValidEmail(email) {
    const emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    return emailRegex.test(email);
}

// Mensaje de confirmación después de enviar el formulario
document.getElementById('contact-form').addEventListener('submit', function () {
    alert('Gracias por tu mensaje. Nos pondremos en contacto contigo pronto.');
});