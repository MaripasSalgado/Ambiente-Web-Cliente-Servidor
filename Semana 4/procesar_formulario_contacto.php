<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    echo "Los datos fueron ingresados correctamente" . "<br>";
    echo "Estimado o Estimada " . $name . " " . $last_name . " le contactaremos al siguiente correo electronico " . $email;
}
