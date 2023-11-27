<?php
require "conexion.php";
mysqli_set_charset($conexion,'utf8');

// Verificar si el formulario se ha enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombre = $_POST['nombre'];
    $usuario = $_POST['usuario'];
    $no_cuenta = $_POST['no_cuenta'];
    $email = $_POST['email'];
    $contraseña = $_POST['contraseña'];
    $numero = $_POST['numero'];

    // Generar el query para insertar los datos en la tabla usuarios
    $consulta_sql = "INSERT INTO usuarios (nombre, usuario, no_cuenta, email, pass, numero, credencial) VALUES ('$nombre', '$usuario', '$no_cuenta', '$email', '$contraseña', '$numero', '2')";

    // Ejecutar el query
    if ($conexion->query($consulta_sql) === TRUE) {
        // Redirigir a index.php
        header("Location: index.php");
        exit(); // Asegura que el script se detenga después de redirigir
    } else {
        echo "<p>Error al insertar datos: " . $conexion->error . "</p>";
    }
}

// Continuar con el código existente para mostrar la tabla y enlaces
$consulta_sql = "SELECT * FROM usuarios";
$resultado = $conexion->query($consulta_sql);
$count = mysqli_num_rows($resultado);

echo "<table border='2'>
    <tr>
        <th>Nombre</th>
        <th>Usuario</th>
        <th>No Cuenta Institucional</th>
        <th>Email</th>
        <th>Password</th>
        <th>Telefono</th>
    </tr>";

if ($count > 0) {
    while ($row = mysqli_fetch_assoc($resultado)) {
        echo "<tr>";
        echo "<td>" . $row['nombre'] . "</td>";
        echo "<td>" . $row['usuario'] . "</td>";
        echo "<td>" . $row['no_cuenta'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['pass'] . "</td>";
        echo "<td>" . $row['numero'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "<h1 style='color:red'>Sin Ningun registro</h1>";
}

echo "<h1><a href='EliminarU.php'>Eliminar Usuario</a></h1>";
?>