<?php

include("config.php");

$conn = new mysqli($servername, $username, $password, $database);



if ($conn->connect_error) {

    die("Error de conexion");
}

$user_post = $_POST["username"];

$password_post = $_POST["password"];





$sql = "SELECT password FROM usuario where username =  '$user_post'";

$result = $conn->query($sql);

$row = $result->fetch_assoc();

if ($row) {

    if (password_verify($password_post, $row["password"])) {

        session_start();

        $_SESSION["username"] = $user_post;

        header("Location: index.php");
    } else {

        echo "El usuario y clave es incorrecto. Intente de nuevo.";
    }
} else {

    echo "El usuario y clave es incorrecto. Intente de nuevo.";
}
