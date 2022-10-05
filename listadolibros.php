<?php
    session_start();
    if (!isset($_SESSION) || !isset($_SESSION['Libros'])) {
        $s = '<table border="1">';
        $s .= '<tr>';
        $s .= '<td>'."<b>ISBN</b>".'</td>';
        $s .= '<td>'."<b>Titulo</b>".'</td>';
        $s .= '<td>'."<b>Autor</b>".'</td>';
        $s .= '<td>'."<b>Fecha de publicacion</b>".'</td>';
        $s .= '<td colspan="2">'."<b></b>".'</td>';
        $s .= '</tr>';
        $_SESSION["Libros"] = array();
    } else {
        $s = '<h1>Listado de libros</h1><table border="1">';
        $s .= '<tr>';
        $s .= '<td>'."<b>ISBN</b>".'</td>';
        $s .= '<td>'."<b>Titulo</b>".'</td>';
        $s .= '<td>'."<b>Autor</b>".'</td>';
        $s .= '<td>'."<b>Fecha de publicacion</b>".'</td>';
        $s .= '<td colspan="2">'."<b></b>".'</td>';
        $s .= '</tr>';
        foreach (array_unique($_SESSION["Libros"],SORT_REGULAR) as $libro ) {
            $s .= '<tr>';
            $isbn = "";
            $titulo = "";
            $autor = "";
            $fecha = "";
            $contador = 0;
            foreach ( $libro as $valor ) {
                    if ($valor != "Libro") {
                        $s .= '<td>'.$valor.'</td>';
                        switch ($contador) {
                            case 0:
                                $isbn = $valor;
                                break;
                            case 1:
                                $titulo = $valor;
                                break;
                            case 2:
                                $autor = $valor;
                                break;
                            case 3: 
                                $fecha = $valor;
                                break;
                        }
                        $contador++;
                    }
            }
            $s .= '<td><button onclick="window.location.href=\'modificarLibro.php?isbn='.$isbn.'&titulo='.$titulo.'&autor='.$autor.'&fecha='.$fecha.'\'">Modificar</button></td>';
            $s .= '<td><button onclick="window.location.href=\'EliminarLibro.php?isbn='.$isbn.'\'">Eliminar</button></td>';
            $s .= '</tr>';
            $contador = 0;
        }   
    }
$s .= '</table>';
echo $s;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br/>
    <button onclick="location.href='NuevoLibro.php'">Nuevo libro</button>
    <button onclick="location.href='index.html'">Volver a INDEX</button>
</body>
</html>