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
    $agregarLibro -> set_NumeroSocio($numeroSocio);
    $agregarLibro -> set_Nombre($Nombre);
    $agregarLibro -> set_Apellidos($Apellidos);
    $agregarLibro -> set_Telefono($Telefono);
    $agregarLibro -> set_Direccion($Direccion);

    array_push($_SESSION["Socios"] ,$agregarSocio);
    header("Location: listadosocios.php");
}
?>