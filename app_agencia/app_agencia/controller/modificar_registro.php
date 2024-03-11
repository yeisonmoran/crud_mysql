<?php

if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["email"]) and !empty($_POST["direccion"]) and !empty($_POST["telefono"]) and !empty($_POST["fecha_nacimiento"])) {

        $documento_identidad=$_POST["documento_identidad"];
        $nombre=$_POST["nombre"];
        $apellido=$_POST["apellido"];
        $email=$_POST["email"];
        $direccion=$_POST["direccion"];
        $telefono=$_POST["telefono"];
        $fecha_nacimiento=$_POST["fecha_nacimiento"];

        $sql=$conexion->query(" update clientes set nombre='$nombre', apellido='$apellido',
        email='$email', direccion='$direccion', telefono=$telefono, fecha_nacimiento='$fecha_nacimiento' where documento_identidad='$documento_identidad' ");
        if ($sql==1) {
           header("location:index.php");
        } else {
            echo "<div class='alert alert-danger'>ERROR AL MODIFICAR CLIENTE</div";
        }
        
    }else {
        echo"<div class='alert-warning'>CAMPOS VACIOS</div>";
    }
}

?>