<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="vista/css/estilos.css">
	<link rel="stylesheet" href="vista/css/bootstrap.css">
	<title>Document</title>
</head>
<body>
<h1>Modificar Informacion Usuarios</h1>
<form class="form-group" method="post">					
		<?php
	$editarUsuario= new MvcControlador;
	$editarUsuario -> editarUsuarioControlador();
	$editarUsuario -> actualizarUsuarioContolador();

?>

	</form>
</body>
</html>