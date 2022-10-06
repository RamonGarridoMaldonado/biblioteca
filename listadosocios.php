<?php
    session_start();
    if (!isset($_SESSION) || !isset($_SESSION['Socios'])) {
        $s = '<table border="1">';
        $s .= '<tr>';
        $s .= '<td>'."<b>NºSocio</b>".'</td>';
        $s .= '<td>'."<b>Nombre</b>".'</td>';
        $s .= '<td>'."<b>Apellidos</b>".'</td>';
        $s .= '<td>'."<b>Telefono</b>".'</td>';
        $s .= '<td>'."<b>Direccion</b>".'</td>';
        $s .= '<td colspan="2">'."<b></b>".'</td>';
        $s .= '</tr>';
        $_SESSION["Libros"] = array();
    } else {
        $s = '<h1>Listado de socios</h1><table border="1">';
        $s .= '<tr>';
        $s .= '<td>'."<b>NºSocio</b>".'</td>';
        $s .= '<td>'."<b>Nombre</b>".'</td>';
        $s .= '<td>'."<b>Apellidos</b>".'</td>';
        $s .= '<td>'."<b>Telefono</b>".'</td>';
        $s .= '<td>'."<b>Direccion</b>".'</td>';
        $s .= '<td colspan="2">'."<b></b>".'</td>';
        $s .= '</tr>';
        foreach (array_unique($_SESSION["Socios"],SORT_REGULAR) as $socio ) {
            $s .= '<tr>';
            $NumeroSocio = "";
            $Nombre = "";
            $Apellidos = "";
            $Telefono = "";
            $Direccion = "";
            $contador = 0;
            foreach ( $socio as $valor ) {
                    if ($valor != "Socio") {
                        $s .= '<td>'.$valor.'</td>';
                        switch ($contador) {
                            case 0:
                                $NumeroSocio = $valor;
                                break;
                            case 1:
                                $Nombre = $valor;
                                break;
                            case 2:
                                $Apellidos = $valor;
                                break;
                            case 3: 
                                $Telefono = $valor;
                                break;
                            case 4: 
                                $Direccion = $valor;
                                break;
                        }
                        $contador++;
                    }
            }
            $s .= '<td><button onclick="window.location.href=\'modificarSocio.php?NumeroSocio='.$NumeroSocio.'&Nombre='.$Nombre.'&Apellidos='.$Apellidos.'&Telefono='.$Telefono.'&Direccion='.$Direccion.'\'">Modificar</button></td>';
            $s .= '<td><button onclick="window.location.href=\'EliminarSocio.php?NumeroSocio='.$NumeroSocio.'\'">Eliminar</button></td>';
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