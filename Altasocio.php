<?php
include 'Libreria.php';
session_start();

if ($_GET) {
    $numeroSocio = $_GET['NSocio'];
    $Nombre = $_GET['Nombre'];
    $Apellidos = $_GET['Apellidos'];
    $Telefono = $_GET['Telefono'];
    $Direccion = $_GET['Direccion'];

    $agregarSocio = new Socio();
    $agregarSocio -> set_NumeroSocio($numeroSocio);
    $agregarSocio -> set_Nombre($Nombre);
    $agregarSocio -> set_Apellidos($Apellidos);
    $agregarSocio -> set_Telefono($Telefono);
    $agregarSocio -> set_Direccion($Direccion);

    array_push($_SESSION["Socios"] ,$agregarSocio);
    header("Location: listadosocios.php");
}
?>