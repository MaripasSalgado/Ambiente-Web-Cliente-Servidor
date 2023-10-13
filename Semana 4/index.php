<?php



$longintud = strlen("Hola esto es una cadena");

$fecha = date("Y-m-d H:i:s");

$frase = "Hola estoy en un curso de PHP";

$posicion = strpos($frase, "PHP");

$arregloFrutas = array("manzana", "melon", "fresa");



for ($i = 0; $i < count($arregloFrutas); $i++) {

    echo $arregloFrutas[$i] . "<br>";
}



$nombre = "KaRol";

echo strtolower($nombre) . "<br>";

echo strtoupper($nombre) . "<br>";



function suma($a, $b)
{

    return $a + $b;
}



echo suma(6, 7) . "<br>";



function factorial($n)
{

    if ($n <= 1) {

        return 1;
    }

    return $n * factorial($n - 1);
}



$resultado = factorial(5);

echo $resultado;

// Archivos en PHP

//Crean archivos

$archivo = fopen("miarchivo.txt", "w");

fwrite($archivo, "Hola, este es mi primer archivo en PHP \n");

fwrite($archivo, "Y esta es mi segunda linea");

fclose($archivo);

// Leen archivos

$archivo2 = fopen("miarchivo.txt", "r");

if ($archivo2) {

    while (!feof($archivo2)) {

        $linea = fgets($archivo2);

        echo $linea;
    }

    fclose($archivo2);
}

// Sesiones en PHP

session_start();
$_SESSION["usuario"] = "kleal";
$_SESSION["nombre"] = "Karol";
echo "<br>";
echo "Usuario: " . $_SESSION["usuario"] . "<br>";
echo "Nombre: " . $_SESSION["nombre"] . "<br>";


try {

    $resultado = 10 / 1;
} catch (Exception $e) {

    echo "Se ha producido un error " . $e->getMessage();
}


// CRUD

$servername = "localhost";
$username = "root";
$password = "";
$database = "clasephp";
$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Error de conexion ");
}

//Crear

$sql = "INSERT INTO usuario (nombre, email) VALUES ('maripas','maripas@gmail.com')";

if ($conn->query($sql) === TRUE) {

    echo "Se agrego correctamente";
} else {

    echo "Error al agregar";
}
echo "<br>";

$sql = "SELECT id,nombre,email FROM usuario";
$resultado = $conn->query($sql);

if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
        echo "ID: " . $row["id"] . "- " . $row["nombre"] . "-" . $row["email"] . "<br>";
    }
} else {

    echo "No hay registros. <br>";
}


//update

$sql = "UPDATE usuario set nombre='Tatiana' where id= '3'";

if ($conn->query($sql) === TRUE) {

    echo "Se actualizo correctamente";
} else {

    echo "Error al actualizar";
}

//delete

$sql = "DELETE FROM usuario where id= '4'";

if ($conn->query($sql) === TRUE) {

    echo "Se actualizo correctamente";
} else {

    echo "Error al actualizar";
}
