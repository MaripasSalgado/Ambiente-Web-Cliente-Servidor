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
    <link rel="stylesheet" href="css/stylereserva.css">
    <script src="js/jquery-3.7.1.min.js"></script>
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
    <h1>Reservar Ahora</h1>
    <div id="formulario">
        <h1>Formulario de Reservas</h1>
        <form id="reservaForm">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>

            <label for="correo">Correo electrónico:</label>
            <input type="email" id="correo" name="correo" required>

            <label for="telefono">Teléfono:</label>
            <input type="tel" id="telefono" name="telefono" required>

            <label for="fecha">Fecha de reserva:</label>
            <input type="date" id="fecha" name="fecha" required>

            <label for="personas">Número de personas:</label>
            <select id="personas" name="personas" required>
                <option value="1">1 persona</option>
                <option value="2">2 personas</option>
                <option value="3">3 personas</option>
                <option value="4">4 personas</option>
            </select>

            <button type="submit" id="enviarBtn">Enviar Reserva</button>
        </form>
    </div>

    <footer>
        <p>Derechos de autor &copy; <?php echo date('Y') ?> Trattoria Italiana</p>
    </footer>
</body>

</html>