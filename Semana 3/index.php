<?php
$nombre = "Maripas";
$edad = '19';
$es_estudiante = false;

$saludo = "Hola soy la estudiante " . $nombre;

$total = 40;
$item = 50;

$resultado = $total + $item;

echo "<h1>" . $saludo . "</h1> Mi edad es: " . $edad . "<br>";

echo $edad;

echo "<h1>" . "Promedio Edades" . "</h1>";

$edad1 = '20';
$edad2 = '40';
$edad3 = '50';
$edad4 = '85';
$edad5 = '19';
$promedio = $edad1 + $edad2 + $edad3 + $edad4 + $edad5 / 5;

echo  $promedio;

echo "<h1>" . "Nombre Completo" . "</h1>";

$nombre = "Francisco";
$apellido = "Torres";
$nombre_completo = $nombre . " " . $apellido;
echo $nombre_completo;

echo "<h1>" . "Compra con Descuento" . "</h1>";


$compra = 20000;
$descuento = $compra * 0.15;

$total = $compra - $descuento;

echo $total;

echo "<h1>" . "Condicionales" . "</h1>";

if ($edad >= 65) {

    echo "Es un adulto mayor";
} else {

    echo "No es un adulto mayor";
}



if ($edad == 65) {

    echo "Es un adulto mayor";
}



if ($edad <= 65) {

    echo "No es un adulto mayor";
} else {

    echo "Es un adulto mayor";
}



// && ||



if ($es_estudiante && $edad < 25) {

    echo "Es un estudiante menor de 25.";
}



if ($es_estudiante || $edad < 25) {

    echo "Es un estudiante o es menor de 25.";
}



if ($edad <= 65) {

    echo "No es un adulto mayor";
} else if ($es_estudiante || $edad < 25) {

    echo "Es un estudiante o es menor de 25.";
} else {

    echo "Es un adulto mayor";
}



switch ($edad) {

    case 65:

        echo "tiene 65";

        break;

    case $edad < 64:

        echo $edad;

        break;
}

echo "<h1>" . "Verificador de Contraseña" . "</h1>";
$digitos_maximos = 8;
$digitos_minimos = 5;
$contraseña = "12345";

if (strlen($contraseña) > $digitos_maximos || strlen($contraseña) < $digitos_minimos) {
    echo "La contraseña no es valida no cumple con los requisitos minimos.";
} elseif (strlen($contraseña) <= $digitos_maximos || strlen($contraseña) >= $digitos_minimos) {
    echo "La contraseña es valida";
}

echo "<h1>" . "Aprobacion de Examen" . "</h1>";

$nota_examen = 60;
$nota_min_aprobado = 70;

if ($nota_examen > $nota_min_aprobado) {
    echo "Examen aprobado";
} elseif ($nota_examen < $nota_min_aprobado) {
    echo "Examen reprobado";
}
echo "<h1>" . "Clasificar Numeros en positivo o negativo" . "</h1>";
$numero = 10;
if ($numero > 0) {
    echo "Numero Positivo";
} elseif ($numero < 0) {
    echo "Numero Negativo";
}
echo "<h1>" . "Verificar Mayoria de Edad" . "</h1>";


$mayoria_edad = 18;

if ($edad >= $mayoria_edad) {

    echo "Es mayor de edad";
} else if ($edad < $mayoria_edad) {
    echo "No es mayor de edad";
}
