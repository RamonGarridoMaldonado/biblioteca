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
        if ($listaDeLibros[$i]->get_NumeroSocio() == $numeroSocio) {
            $listaDeLibros[$i]->set_Nombre($Nombre);
            $listaDeLibros[$i]->set_Apellidos($Apellidos);
            $listaDeLibros[$i]->set_Telefono($Telefono);
            $listaDeLibros[$i]->set_Direccion($Direccion);
        }
    }
    $_SESSION['Socios'] = $listaDeLibros;
    header("Location: listadolibros.php");
}
?>