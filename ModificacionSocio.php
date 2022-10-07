<?php
include 'Libreria.php';
session_start();

if ($_GET) {
    $numeroSocio = $_GET['NumeroSocio'];
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
    $listaDeSocios = $_SESSION["Socios"];

    for ($i=0;$i<count($listaDeSocios);$i++) {
        if ($listaDeSocios[$i]->get_NumeroSocio() == $numeroSocio) {
            $listaDeSocios[$i]->set_Nombre($Nombre);
            $listaDeSocios[$i]->set_Apellidos($Apellidos);
            $listaDeSocios[$i]->set_Telefono($Telefono);
            $listaDeSocios[$i]->set_Direccion($Direccion);
        }
    }
    $_SESSION['Socios'] = $listaDeSocios;
    header("Location: listadosocios.php");
}
?>