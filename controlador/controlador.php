<?php

class MvcControlador{
	public  function pagina(){		
		include "vista/plantilla.php";	
	}

	public  function enlacesPaginasControlador(){
		if(isset( $_GET['action'])){			
			$enlaces = $_GET['action'];		
		}
		else{
			$enlaces = "index";
		}
		$respuesta = Paginas::enlacesPaginasModel($enlaces);
		include $respuesta;
	}

	public  function registroUsuarioControlador(){
		if(isset($_POST['usuarioRegistro'])){	
		$datosControlador = array("usuario"=>$_POST["usuarioRegistro"],
								 "password"=>$_POST["passwordRegistro"],
								 "email"=>	$_POST["emailRegistro"]);
		$respuesta = Datos::registroUsuariosModel($datosControlador, "usuarios");		
		if ($respuesta=="Correcto"){
			header("location:index.php?action=OK");
		}
		else{
			header("location:index.php");
		}
	}
}

public  function ingresoUsuarioControlador(){
	if(isset($_POST['usuarioIngreso'])){
		$datosControlador = array("usuario"=>$_POST['usuarioIngreso'],"password"=>$_POST['passwordIngreso']);
		$respuesta = Datos::ingresoUsuarioModel($datosControlador,"usuarios");
		if($respuesta["usuario"] == $_POST['usuarioIngreso'] && $respuesta["password"] == $_POST['passwordIngreso']){
			session_start();
			$_SESSION["validar"] = true; 
			header("location:index.php?action=usuarios");
		}
		else{
			header("location:index.php?action=fallo");
		}
}
}

 public  function vistaUsuariosControlador(){
	 $respuesta = Datos::vistaUsuariosModel("usuarios");
	 foreach($respuesta as $fila=>$item)
	 echo'
	 <tr>
		<td>'.$item["usuario"].'</td>
		<td>'.$item["password"].'</td>
		<td>'.$item["email"].'</td>
		<td><a href="index.php?action=editar&id='.$item["id"].'"><button class="btn btn-warning">Editar</button></a></td>
		<td><a href="index.php?action=Usuarios&idBorrar='.$item["id"].'"><button class="btn btn-danger">Borrar</button></a></td>
	</tr>';

 }

public   function editarUsuarioControlador(){
	 $datosControlador = $_GET['id']; 
	 $respuesta = Datos::editarUsuarioModel($datosControlador,"usuarios");
	 echo '<input type="hidden" value="'.$respuesta["id"].'" name="idEditar">
	 <input class="form-control" type="text" value="'.$respuesta["usuario"].'" name="usuarioEditar" required>
	 <input class="form-control" type="text" value="'.$respuesta["password"].'" name="passwordEditar" required>
	 <input class="form-control" type="email" value="'.$respuesta["email"].'" name="emailEditar" required>
	 <input class="btn btn-success" type="submit" value="Actualizar">';
 }
public   function actualizarUsuarioContolador(){
	 if(isset($_POST["usuarioEditar"])){
		$datosControlador = array("id"=>$_POST["idEditar"],
						"usuario"=>$_POST["usuarioEditar"],
						"password"=>$_POST["passwordEditar"],
						"email"=>	$_POST["emailEditar"]);
		$respuesta = Datos::actualizarUsuarioModel($datosControlador,"usuarios");
		if($respuesta == "correcto"){
			header("location:index.php?action=cambio");
		}
		else{
			echo "error";
		}
	}
 }

 public  function borrarUsuariosControlador(){
	 if(isset($_GET["idBorrar"])){
		 $datosControlador = $_GET["idBorrar"];
		 $respuesta = Datos::borrarUsuariosModel($datosControlador,"usuarios");
		 if ($respuesta =="Correcto"){
			header("location:index.php?action=usuarios");
		}
		
	 }

 }


}
