<?php

include "modelo/conexion.php";

$documento_identidad=$_GET["documento_identidad"];

$sql = $conexion->query(" select * from clientes where documento_identidad='$documento_identidad' ");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <form class="col-4 p-3 m-auto" method="POST">
        <h5 class="text-center text-primary">Modificar datos de cliente</h5>
        <input type="hidden" name="documento_identidad" value="<?= $_GET["documento_identidad"] ?> ">
        <?php
        include "controller/modificar_registro.php";

        while ($datos = $sql->fetch_object()) { ?>
            
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">nombre</label>
                <input type="text" class="form-control" name="nombre" value="<?= $datos->nombre ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">apellido</label>
                <input type="text" class="form-control" name="apellido" value="<?= $datos->apellido ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">correo electronico</label>
                <input type="email" class="form-control" name="email" value="<?= $datos->email ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">direccion</label>
                <input type="text" class="form-control" name="direccion" value="<?= $datos->direccion ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">numero de telefono</label>
                <input type="text" class="form-control" name="telefono" value="<?= $datos->telefono ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">fecha de nacimiento</label>
                <input type="date" class="form-control" name="fecha_nacimiento" value="<?= $datos->fecha_nacimiento ?>">
            </div>

        <?php }
        ?>

        <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">modificar registro</button>
    </form>



</body>

</html>