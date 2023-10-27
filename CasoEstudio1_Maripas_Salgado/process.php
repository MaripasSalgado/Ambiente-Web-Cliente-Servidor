<?php
// Configura las credenciales de la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$database = "CasoEstudio1";

// Crea una conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $database);

// Verifica la conexión
if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}

// Obtiene los datos del formulario
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

// Validación de los datos (puedes agregar más validaciones según tus necesidades)
if (empty($nombre) || empty($email) || empty($mensaje) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Error: Por favor, complete todos los campos correctamente.";
} else {
    // Inserta los datos en la base de datos
    $sql = "INSERT INTO contactos (nombre, email, mensaje) VALUES ('$nombre', '$email', '$mensaje')";
    if ($conn->query($sql) === TRUE) {
        echo "Gracias por tu mensaje. Nos pondremos en contacto contigo pronto.";
    } else {
        echo "Error al insertar datos: " . $conn->error;
    }
}

// Cierra la conexión a la base de datos
$conn->close();
