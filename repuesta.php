<?php
session_start();
include "conexion.php";
$usuario = $_POST['usuario'];
$pass = $_POST['password'];

$q = "SELECT COUNT(*) AS contar FROM usuarios WHERE usuario= '$usuario' AND pass = '$pass'";


$q = "SELECT COUNT(*) AS contar FROM usuarios WHERE usuario= '$usuario' AND pass = '$pass'";

$consulta = mysqli_query($conexion,$q);

$array = mysqli_fetch_array($consulta);

if($array['contar']>0){
    // en la variable session se guarda el numero de cuenta esto para poder acarrearla
    $_SESSION['usermane']=$usuario;
    echo "Ingresaste";
    header("location: ./consultar.php");
}else{

        header("location: ./inicio.php");

echo "error";
   
}

?>