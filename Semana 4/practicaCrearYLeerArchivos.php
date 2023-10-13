<?php

$archivo = fopen("alumnos.txt", "w");

fwrite($archivo, "Maria\n Jose\n Francisco\n Ricardo\n Camilo\n");
fclose($archivo);

// Leen archivos

$archivo2 = fopen("alumnos.txt", "r");

if ($archivo2) {

    while (!feof($archivo2)) {

        $linea = fgets($archivo2);

        echo $linea . "<br>";
    }

    fclose($archivo2);
}
