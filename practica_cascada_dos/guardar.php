<?php
$conexion = new mysqli("localhost", "root", "", "semana_evento");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$nombre   = $_POST['nombre'];
$correo   = $_POST['correo'];
$carrera  = $_POST['carrera'];
$telefono = $_POST['telefono'];

$sql = "INSERT INTO registros (nombre, correo, carrera, telefono) 
        VALUES ('$nombre', '$correo', '$carrera', '$telefono')";

if ($conexion->query($sql) === TRUE) {
    echo "<h2>¡Registro guardado exitosamente!</h2>";
    echo "<a href='index.html'>Volver</a>";
} else {
    echo "Error: " . $conexion->error;
}

$conexion->close();
?>
