<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/styles.css" />
    <script src="script.js"></script>
    <title>Contacto</title>
</head>

<body>
    <header>
        <div class="logo-container">
            <img src="images/logo.png" alt="Logo de la empresa">
        </div>
        <h1>Aventuras en la Naturaleza</h1>
        <nav>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="tours.php">Nuestros Tours</a></li>
                <li><a href="contact.php">Contacto</a></li>
            </ul>
        </nav>
    </header>

    <section class="container contact-section">
        <h2>Contacto</h2>
        <form id="contact-form" action="process.php" method="post">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" name="email" required>
            <label for="mensaje">Mensaje:</label>
            <textarea id="mensaje" name="mensaje" required></textarea>
            <input type="submit" value="Enviar">
        </form>
    </section>

    <footer>
        &copy; 2023 Aventuras en la Naturaleza
    </footer>
</body>

</html>