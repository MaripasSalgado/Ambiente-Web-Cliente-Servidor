<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>La mejor comida italiana</title>
  <link rel="stylesheet" href="css/styles.css" />

</head>

<body>
  <header>
    <nav>

      <div class="logo">

        <img src="logo.png" alt="Trattoria Italiana">

      </div>

      <ul class="menu">
        <?php

        $menu = array(array("url" => "#", "name" => "Inicio"), array("url" => "about.html", "name" => "Nosotros"));

        $menu[] = array("url" => "#", "name" => "Menú");

        $menu[] = array("url" => "#", "name" => "Reservas");

        $menu[] = array("url" => "#", "name" => "Contacto");



        $title_page = "Reserva en Trattoria Italiana";

        $title_welcome = "¡Bienvenido a Trattoria Italiana!";

        ?>


        <?php foreach ($menu as $item) { ?>


          <li><a href="<?php echo $item["url"] ?>"><?php echo $item["name"] ?></a></li>

        <?php } ?>


      </ul>

    </nav>

  </header>
  <section class="slide">
    <div class="slide-content">
      <h1>Bienvenidos a la mejor comida italiana</h1>
      <p>
        Disfruta de la mejor comida italiana que puedes encontrar en Costa
        Rica
      </p>
      <button class="btn-booking">Reserva Aqui</button>
    </div>
  </section>
  <section class="about">
    <h2>Sobre Nosotros</h2>
    <p>
      Abrimos nuestras puertas desde 2010, ofreciendo la mejor experiencia
      gastronimica italiana con los mejores ingredientes
    </p>
  </section>
  <section class="chef">
    <h2>Nuestros Chefs</h2>
    <div class="chef-item">
      <div>Chef 1</div>
      <div>Chef 2</div>
      <div>Chef 3</div>
    </div>
  </section>
  <section class="dish">
    <h2>Nuestros Platillos</h2>
    <div class="dish-grid">
      <div class="dish-item">
        <h3>Pizza</h3>
        <p>Pizzas al horno con diferentes ingredientes a elegir</p>
      </div>
      <div class="dish-item">
        <h3>Pasta</h3>
        <p>Pastas elaboradas desde 0 con diferentes ingredientes a elegir</p>
      </div>
      <div class="dish-item">
        <h3>Lasagna</h3>
        <p>
          Tenemos lasagna de diversos tipos ofreciendole asi la mejor opcion
          para su gusto!
        </p>
      </div>
    </div>
  </section>
  <footer>
    <p>Realizado por La mejor comida italiana - 2023</p>
  </footer>
</body>

</html>