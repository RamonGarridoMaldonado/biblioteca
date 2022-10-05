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

    array_push($_SESSION["Libros"] ,$agregarLibro);
    header("Location: listadolibros.php");
}
?>