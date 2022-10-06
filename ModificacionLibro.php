<?php
include 'Libreria.php';
session_start();

if ($_GET) {
    $ISBN = $_GET['ISBN'];
    $Titulo = $_GET['Titulo'];
    $Autor = $_GET['Autor'];
    $Fecha = $_GET['Publicacion'];

    $agregarLibro = new Libro();
    $agregarLibro -> set_ISBN($ISBN);
    $agregarLibro -> set_Titulo($Titulo);
    $agregarLibro -> set_Autor($Autor);
    $agregarLibro -> set_FechaPublicacion($Fecha);
    $listaDeLibros = $_SESSION["Libros"];

    for ($i=0;$i<count($listaDeLibros);$i++) {
        if ($listaDeLibros[$i]->get_ISBN() == $ISBN) {
            $listaDeLibros[$i]->set_Titulo($Titulo);
            $listaDeLibros[$i]->set_Autor($Autor);
            $listaDeLibros[$i]->set_FechaPublicacion($Fecha);
        }
    }
    $_SESSION['Libros'] = $listaDeLibros;
    header("Location: listadosocios.php");
}
?>