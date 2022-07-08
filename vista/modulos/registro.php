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
<h1>Bienvenido</h1>

<h4>  TRANSPORTES Y LOGISTICAS S.A. </h4>

<h3>Registrar Usuario</h3>

	<form class="form-group" method="post">
						
		<input class="form-control" type="text" placeholder="Usuario" name="usuarioRegistro" required>
		<input class="form-control" type="password" placeholder="Contraseña" name="passwordRegistro" required>
		<input class="form-control" type="email" placeholder="Email" name="emailRegistro" required>
		<input class="btn btn-success" type="submit" value="Enviar">

	</form>
</body>
</html>
<?php
$registro = new MvcControlador();
$registro -> registroUsuarioControlador();

if(isset($_GET["action"])){
	if($_GET["action"]=="OK"){
	?>
	<div class="alert alert-success text-center role=alert"><?php echo "Registro Exitoso";?></div>
	<?php
}
}
?>

