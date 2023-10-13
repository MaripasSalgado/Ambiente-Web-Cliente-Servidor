<?php
session_start();
$_SESSION["username"] = "msalgado";
$_SESSION["password"] = "12345";
$_SESSION["rol"] = "admin";
echo "<br>";

if ($_SESSION["rol"] == "admin") {

    echo "Eres un admin";
}
