<?php 

class Paginas{
	
	public static function enlacesPaginasModel($enlaces){


		if($enlaces == "ingresar" || $enlaces == "usuarios" || $enlaces == "editar" || $enlaces == "salir"){

			$module =  "vista/modulos/".$enlaces.".php";
		
		}

		else if($enlaces == "index"){

			$module =  "vista/modulos/registro.php";
		
		}
		else if($enlaces == "cambio"){

			$module =  "vista/modulos/usuarios.php";
		}
		
		
		else if($enlaces == "OK"){

			$module =  "vista/modulos/registro.php";
		
		}
		else if($enlaces == "fallo"){

			$module =  "vista/modulos/ingresar.php";
		
		}

		else{

			$module =  "vista/modulos/registro.php";

		}
		
		return $module;

	}

}

?>