<?php

include 'Libreria.php';
session_start();

if ($_GET) {
    $ISBN = $_GET['isbn'];
    $index = 0;
    $listaDeLibros = $_SESSION["Libros"];
    $nuevaLista = array();
    for ($i=0;$i<count($listaDeLibros);$i++) {
        if ($listaDeLibros[$i]->get_ISBN() == $ISBN) {
            $index = $i;
        }
    }

    $contador = 0;
    for ($i=0;$i<count($listaDeLibros);$i++) {
        if ($i!=$index) {
            array_push($nuevaLista,$listaDeLibros[$i]);
        }
    } 

    $_SESSION['Libros'] = $nuevaLista;
    header("Location: listadolibros.php");
}

?>