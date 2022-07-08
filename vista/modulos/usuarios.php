<?php 
session_start(); 
if(!$_SESSION["validar"]){
header("location:index.php?action=ingresar"); 

} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="vista/css/bootstrap.css">
	<link rel="stylesheet" href="vista/css/estilos.css">
	<title>Document</title>
</head>
<body>
<h1>Usuarios registrados </h1>

<table class="table">
		<thead class="thead-dark">
		
		<tr>
			<th scope="col">Usuario</th>
			<th scope="col">Contraseña</th>
			<th scope="col">Email</th>
			<th scope="col">Acciones</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php
$ingreso = new MvcControlador();
$ingreso -> vistaUsuariosControlador();
$ingreso -> borrarUsuariosControlador();

?>
	</tbody>
</table>
</body>
</html>

<?php
if(isset($_GET["action"])){
	if($_GET["action"]=="cambio"){
	?>
	<div class="alert alert-success text-center role=alert"><?php echo "Actualización exitosa";?></div>
	<?php
}
}
?>


