<?php

include 'Libreria.php';
session_start();

if ($_GET) {
    $ISBN = $_GET['isbn'];
    $index = 0;
    $listaDeLibros = $_SESSION["Libros"];
    for ($i=0;$i<count($listaDeLibros);$i++) {
        if ($listaDeLibros[$i]->get_ISBN() == $ISBN) {
            $index = $i;
        }
    }
    unset($listaDeLibros[$index]);
    $_SESSION['Libros'] = $listaDeLibros;
    header("Location: listadolibros.php");
}

?>