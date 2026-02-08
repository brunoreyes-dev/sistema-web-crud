<?php include("conexion.php"); ?>
<!DOCTYPE html>
<html>
<head>
<title>CRUD PHP</title>
<link rel="stylesheet" href="estilos.css">
</head>
<body>
<h2>Registro de Usuarios</h2>
<form action="insertar.php" method="POST">
<input type="text" name="nombre" placeholder="Nombre" required>
<input type="email" name="correo" placeholder="Correo" required>
<button type="submit">Guardar</button>
</form>

<table>
<tr><th>ID</th><th>Nombre</th><th>Correo</th><th>Acciones</th></tr>
<?php
$resultado = $conexion->query("SELECT * FROM usuarios");
while($fila = $resultado->fetch_assoc()){
echo "<tr>
<td>{$fila['id']}</td>
<td>{$fila['nombre']}</td>
<td>{$fila['correo']}</td>
<td>
<a href='editar.php?id={$fila['id']}'>Editar</a>
<a href='eliminar.php?id={$fila['id']}'>Eliminar</a>
</td>
</tr>";
}
?>
</table>
</body>
</html>
