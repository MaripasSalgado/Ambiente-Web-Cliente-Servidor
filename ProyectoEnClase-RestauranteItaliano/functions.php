<?php
function getMenu()
{
    $menu = array(array("url" => "index.php", "name" => "Inicio"), array("url" => "about.php", "name" => "Nosotros"));
    $menu[] = array("url" => "#", "name" => "Menú");
    $menu[] = array("url" => "#", "name" => "Reservas");
    $menu[] = array("url" => "#", "name" => "Contacto");
    $menu[] = array("url" => "signin.php", "name" => "Ingresar");
    return $menu;
}
