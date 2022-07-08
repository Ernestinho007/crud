<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="vista/css/bootstrap.css">
	<link rel="stylesheet" href="vista/css/estilos.css">
	
	<title>Template</title>

	
</head>

<body >


<?php include "modulos/navegacion.php"; ?>


<section >

<?php 

$mvc = new MvcControlador();
$mvc -> enlacesPaginasControlador();

 ?>

</section>
	
</body>

</html>