<?php
include("functions.php");
include("config.php");
session_start();
$menu = getMenu();

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Error de conexion");
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo  $title_page; ?></title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/stylecontact.css">
    <script src="js/script.js"></script>
</head>

<body>
    <header>
        <nav>
            <div class="logo">
                <img src="images/logo.png" alt="Trattoria Italiana">
            </div>
            <ul class="menu">
                <?php foreach ($menu as $item) { ?>
                    <li><a href="<?php echo $item["url"] ?>"><?php echo $item["name"] ?></a></li>
                <?php } ?>
            </ul>
            <?php if (!empty($_SESSION["username"])) { ?>
                <div>
                    Hola! <?php echo $_SESSION["username"] ?>
                </div>
            <?php } ?>
        </nav>
    </header>
    <h1>Contacto - Restaurante Italiano</h1>
    <form id="formulario" onsubmit="return validarFormulario()">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="mensaje">Mensaje:</label>
        <textarea id="mensaje" name="mensaje" rows="4" required></textarea>

        <input type="submit" id="submit-button" value="Enviar" onmouseover="mouseHover()" onmouseout="mouseOut()" onclick="alert('Formulario enviado');">
    </form>

    <footer>
        <p>Derechos de autor &copy; <?php echo date('Y') ?> Trattoria Italiana</p>
    </footer>
</body>

</html>