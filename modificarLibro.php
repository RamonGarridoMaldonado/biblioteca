<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ModificacionLibro.php"method="get">
        <h1>Modificar libro</h1>
        <label>Titulo:</lable>
        <input type="text" name="Titulo" value="<?php echo $_GET['titulo']; ?>">
        <br/>
        <label>Autor:</lable>
        <input type="text" name="Autor" value="<?php echo $_GET['autor']; ?>">
        <br/>
        <label>Fecha de publicacion:</lable>
        <input type="text" name="Publicacion" value="<?php echo $_GET['fecha']; ?>"><br/>
        <input type="hidden" value="<?php echo $_GET['isbn']; ?>" name="ISBN">
        <input type="submit">
        <br/>
    </form>
</body>
</html>