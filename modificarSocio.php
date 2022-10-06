<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ModificacionSocio.php"method="get">
        <h1>Modificar socio</h1>
        <label>Nombre:</lable>
        <input type="text" name="Nombre" value="<?php echo $_GET['Nombre']; ?>">
        <br/>
        <label>Apellidos:</lable>
        <input type="text" name="Apellidos" value="<?php echo $_GET['Apellidos']; ?>">
        <br/>
        <label>Apellidos:</lable>
        <input type="text" name="Telefono" value="<?php echo $_GET['Telefono']; ?>"><br/>
        <label>Direccion:</lable>
        <input type="text" name="Direccion" value="<?php echo $_GET['Direccion']; ?>"><br/>
        <input type="hidden" value="<?php echo $_GET['NumeroSocio']; ?>" name="NumeroSocio">
        <input type="submit">
        <br/>
    </form>
</body>
</html>