<?php
include("conexion.php");

$id = $_GET['id'];

if(isset($_POST['actualizar'])){
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];

    $sql = "UPDATE usuarios SET nombre='$nombre', correo='$correo' WHERE id=$id";
    $conexion->query($sql);
    header("Location: index.php");
}

$resultado = $conexion->query("SELECT * FROM usuarios WHERE id=$id");
$fila = $resultado->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
<title>Editar Usuario</title>
<link rel="stylesheet" href="estilos.css">
</head>
<body>

<h2>Editar Usuario</h2>
<form method="POST">
<input type="text" name="nombre" value="<?php echo $fila['nombre']; ?>" required>
<input type="email" name="correo" value="<?php echo $fila['correo']; ?>" required>
<button type="submit" name="actualizar">Actualizar</button>
</form>

</body>
</html>
