<?php
$host_db="127.0.0.1";
$user_db="if0_35509983_";
$pass_db="8OtwlAdmwO7M";
$db_name="if0_35509983_login";

$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

if ($conexion->connect_error) {
 die("La conexion falló ESTUPIDO: " . $conexion->connect_error);
}
?>