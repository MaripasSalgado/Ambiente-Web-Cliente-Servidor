<?php
function getMenu()
{
    $menu = array(array("url" => "index.php", "name" => "Inicio"), array("url" => "about.php", "name" => "Nosotros"));
    $menu[] = array("url" => "menu.php", "name" => "Menú");
    $menu[] = array("url" => "reservas.php", "name" => "Reservas");
    $menu[] = array("url" => "contact.php", "name" => "Contacto");
    $menu[] = array("url" => "signin.php", "name" => "Ingresar");
    return $menu;
}
