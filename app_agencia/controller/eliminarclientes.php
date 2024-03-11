<?php

if (!empty($_GET["documento_identidad"])) {
    $documento_identidad=$_GET["documento_identidad"];
    $sql=$conexion->query(" delete from clientes where documento_identidad='$documento_identidad' ");
    if ($sql==1) {
        echo '<div class="alert alert-success">ELIMINADO CORRECTAMENTE</div>';
    } else {
        echo '<div class="alert alert-danger">ERROR AL ELIMINAR</div>';
    }
    
}



?>