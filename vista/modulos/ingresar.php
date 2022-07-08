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
<h1>Ingreso </h1>
	<form class="form-group" method="post">					
		<input class="form-control" type="text" placeholder="Usuario" name="usuarioIngreso" required>
		<input class="form-control" type="password" placeholder="Contraseña" name="passwordIngreso" required>
		<input class="btn btn-success" type="submit" value="Enviar">

	</form>
</body>
</html>
<?php
$ingreso = new MvcControlador();
$ingreso -> ingresoUsuarioControlador();
if(isset($_GET["action"])){
	if($_GET["action"]=="fallo"){
	?>
	<div class="alert alert-danger text-center role=alert"><?php echo "Fallo al ingresar al sistema";?></div>
	<?php
}
}
?>

