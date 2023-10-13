<?php


if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $username = $_GET["username"];
    $password = $_GET["password"];
    $confirm_password = $_GET["confirm-password"];
    echo "Ha iniciado sesion" . "<br>";
}
