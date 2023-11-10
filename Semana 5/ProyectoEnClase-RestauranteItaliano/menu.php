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
    <link rel="stylesheet" href="css/stylemenu.css">
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
    <h1>Menú y Reservas</h1>

    <div class="menu-item">
        <h2>Hamburguesa</h2>
        <p>Pan, carne, lechuga, tomate</p>
        <p class="precio">Precio: $<span data-precio="10.00">10.00</span></p>
        <label for="cantidad_hamburguesa">Cantidad:</label>
        <select id="cantidad_hamburguesa" class="cantidad" data-precio="10.00">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
        </select>
        <button class="toggle-precio">Mostrar/Ocultar Precio</button>
    </div>

    <div class="menu-item">
        <h2>Pizza</h2>
        <p>Masa, salsa, queso, pepperoni</p>
        <p class="precio">Precio: $<span data-precio="12.00">12.00</span></p>
        <label for="cantidad_pizza">Cantidad:</label>
        <select id="cantidad_pizza" class="cantidad" data-precio="12.00">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <!-- Agrega más opciones según sea necesario -->
        </select>
        <button class="toggle-precio">Mostrar/Ocultar Precio</button>
    </div>

    <div id="orden">
        <h2>Orden</h2>
        <label for="total">Total de la Orden</label>
        <p id="total">0.00</p>
        <button id="calcularTotal">Calcular Total</button>
    </div>

    <footer>
        <p>Derechos de autor &copy; <?php echo date('Y') ?> Trattoria Italiana</p>
    </footer>
</body>

</html>