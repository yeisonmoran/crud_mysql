<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud_php_mysqul</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/d2f26fe8ff.js" crossorigin="anonymous"></script>

</head>

<body>
    <h1 class="text-center p-3 text-primary">Registro|Clientes</h1>

    <div class="container-fluid row">

        <form class="col-4 p-3" method="POST">
            <h3 class="text-center text-primary">Registro</h3>

            <?php
            include("modelo/conexion.php");
            include("controller/registro.php");

            ?>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Apellido</label>
                <input type="text" class="form-control" name="apellido">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Documento de identidad</label>
                <input type="text" class="form-control" name="documento_identidad">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Correo electronico</label>
                <input type="email" class="form-control" name="email">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Direccion</label>
                <input type="text" class="form-control" name="direccion">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Numero de telefono</label>
                <input type="text" class="form-control" name="telefono">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Fecha de nacimiento</label>
                <input type="date" class="form-control" name="fecha_nacimiento">
            </div>


            <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">registrar</button>
        </form>

        <div class="col-8 p-4">
            <table class="table">
                <thead class="table-success">
                    <tr>
                        <th scope="col">documento_identidad</th>
                        <th scope="col">nombre</th>
                        <th scope="col">apellido</th>
                        <th scope="col">email</th>
                        <th scope="col">direccion</th>
                        <th scope="col">telefono</th>
                        <th scope="col">fecha_nacimiento</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "modelo/conexion.php";
                    $sql = $conexion->query(" select * from clientes ");
                    while ($datos = $sql->fetch_object()) { ?>
                        <tr>
                        
                            <td>
                                <?= $datos->documento_identidad ?>
                            </td>
                            <td>
                                <?= $datos->nombre ?>
                            </td>
                            <td>
                                <?= $datos->apellido ?>
                            </td>
                            <td>
                                <?= $datos->email ?>
                            </td>
                            <td>
                                <?= $datos->direccion ?>
                            </td>
                            <td>
                                <?= $datos->telefono ?>
                            </td>
                            <td>
                                <?= $datos->fecha_nacimiento ?>
                            </td>

                            <td style="white-space: nowrap;">
                                <a href="modificar_registro.php?documento_identidad=<?= $datos->documento_identidad ?>" class="btn btn-small btn-warning" style="margin-right: 5px;"><i
                                        class="fa-solid fa-pen-to-square"></i></a>
                                <a href="" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
                            </td>

                        </tr>

                    <?php }
                    ?>

                </tbody>
            </table>

        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</body>

</html>