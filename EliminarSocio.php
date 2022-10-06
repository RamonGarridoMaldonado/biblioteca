<?php

include 'Libreria.php';
session_start();

if ($_GET) {
    $NumeroSocio = $_GET['NumeroSocio'];
    $index = 0;
    $listaDeSocios = $_SESSION["Socios"];
    $nuevaLista = array();
    for ($i=0;$i<count($listaDeSocios);$i++) {
        if ($listaDeSocios[$i]->get_NumeroSocio() == $NumeroSocio) {
            $index = $i;
        }
    }

    $contador = 0;
    for ($i=0;$i<count($listaDeSocios);$i++) {
        if ($i!=$index) {
            array_push($nuevaLista,$listaDeSocios[$i]);
        }
    } 

    $_SESSION['Socios'] = $nuevaLista;
    header("Location: listadosocios.php");
}

?>