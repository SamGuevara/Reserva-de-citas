<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

// Conexión con la base de datos
$servidor = "localhost";
$usuario = "root";
$password = "";
$dbname = "registro_usuarios";

$conn = new mysqli($servidor, $usuario, $password, $dbname);
if($conn -> connect_error){
    die("Conexión Fallida: " . $conn -> connect_error);
}

// Obtener datos del formulario
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$servicio = $_POST['servicio'];
$fecha = $_POST['fecha'];
$hora = $_POST['hora'];

// Validaciones de campos vacios
if(empty($nombre) || empty($telefono) || empty($servicio) || empty($fecha) || empty($hora)){
    die("Todos los campos son obligatorios: ");
}

// Insertando los datos en la base de datos
$sql = "INSERT INTO reservas (nombre, telefono, servicio, fecha, hora) VALUES (?, ?, ?, ?, ?)";
$stmt = $conn -> prepare($sql);
$stmt -> bind_param("sssss", $nombre, $telefono, $servicio, $fecha, $hora);

if($stmt -> execute()){
    echo"Reseva agendada correctamente.";
}
else{
    echo"Error al agendar la cita: " . $stmt ->error;
}
$stmt -> close();
$conn -> close();

?>