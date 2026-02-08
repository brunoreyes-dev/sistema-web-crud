<?php
include("conexion.php");

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];

$sql = "INSERT INTO usuarios(nombre, correo) VALUES('$nombre','$correo')";
$conexion->query($sql);

header("Location: index.php");
?>
