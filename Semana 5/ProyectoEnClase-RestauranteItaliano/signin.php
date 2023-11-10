<?php
include("functions.php");
include("config.php");
$menu = getMenu();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo  $title_page; ?></title>
    <link rel="stylesheet" href="css/style.css">
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
        </nav>
    </header>
    <section>

        <form method="POST" action="process_login.php" id="formLogin">

            <label>Usuario:</label><br>

            <input type="text" name="username" id="username"><br>

            <label>Clave:</label><br>

            <input type="password" name="password" id="password"><br>

            <input type="button" onclick="validar()" value="Ingresar">



        </form>

    </section>


    <footer>
        <p>Derechos de autor &copy; <?php echo date('Y') ?> Trattoria Italiana</p>
    </footer>
</body>

</html>