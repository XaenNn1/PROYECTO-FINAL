<?php
require "coneccion.php";
mysqli_set_charset($conexion,'utf8');
$registroEliminado =$_POST['no_cuenta'];
$consulta="DELETE FROM usuarios WHERE no_cuenta = ";

mysqli_query($conexion, $consulta . $registroEliminado);
mysqli_close($conexion);
header('Location: eliminaruser.php');
?>