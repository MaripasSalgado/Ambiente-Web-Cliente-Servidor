<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $last_name = $_POST["last_name"];
    echo "Hola mi nombre es : " . $name . " " .  $last_name;
}
