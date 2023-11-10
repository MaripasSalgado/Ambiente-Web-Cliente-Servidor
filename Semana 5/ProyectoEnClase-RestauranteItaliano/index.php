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
    <section class="slide">
        <div class="slide-content">
            <h1><?php echo $title_welcome; ?></h1>
            <p>Disfruta de la auténtica cocina italiana en un ambiente acogedor.</p>
            <a href="#" class="btn-reservar" onclick="sumarNumeros(6,4)">Reservar una Mesa</a>
        </div>
    </section>
    <section class="about">
        <h2>Sobre Nosotros</h2>
        <p>Trattoria Italiana es un restaurante que ofrece una experiencia culinaria única. Nuestros chefs expertos
            preparan platos auténticos utilizando los mejores ingredientes frescos.</p>
    </section>
    <section class="dish">
        <h2>Nuestros platos principales</h2>
        <div class="dish-grid">
            <?php
            $sql = "SELECT * FROM menu where principal =  1";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
            ?>
                    <div class="dish-item">
                        <img src='<?php echo $row["image"] ?>' alt="Pasta 1">
                        <h3><?php echo $row["name"] ?></h3>
                        <p><?php echo $row["description"] ?></p>
                    </div>
            <?php }
            } ?>
        </div>
    </section>
    <footer>
        <p>Derechos de autor &copy; <?php echo date('Y') ?> Trattoria Italiana</p>
    </footer>
</body>

</html>