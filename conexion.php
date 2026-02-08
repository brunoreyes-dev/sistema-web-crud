<?php
$conexion = new mysqli("localhost", "root", "", "crud_db");
if($conexion->connect_error){
    die("Error de conexión");
}
?>
