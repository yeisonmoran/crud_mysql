<?php

if (!empty($_POST["btnregistrar"])) {
   if (
      !empty($_POST["documento_identidad"]) and !empty($_POST["nombre"])
      and !empty($_POST["apellido"]) and !empty($_POST["email"]) and
      !empty($_POST["direccion"]) and !empty($_POST["telefono"]) and !empty($_POST["fecha_nacimiento"])
      
   ) {
      $documento_identidad= $_POST["documento_identidad"];
      $nombre= $_POST["nombre"];
      $apellido= $_POST["apellido"];
      $email= $_POST["email"];
      $direccion= $_POST["direccion"];
      $telefono= $_POST["telefono"];
      $fecha_nacimiento= $_POST["fecha_nacimiento"];

$sql=$conexion->query(" insert into clientes(documento_identidad,nombre,apellido,email,direccion,telefono,fecha_nacimiento)values('$documento_identidad','$nombre','$apellido','$email','$direccion',$telefono,'$fecha_nacimiento')");

if ($sql==1) {
   echo '<div class="alert alert-success">CLIENTE REGISTRADO CORRECTAMENTE</div>';
} else {
   echo '<div class="alert alert-danger">ERROR AL REGISTRAR CLIENTE</div>';

}


   } else{
      echo '<div class="alert alert-succes">ALGUNOS DE LOS CAMPOS ESTA VACIO</div>';

   }


}


?>