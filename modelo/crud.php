<?php
    require_once "modelo/conexion.php";

    Class Datos extends Conexion{

        public static function registroUsuariosModel($datosModel, $tabla){
            $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (usuario, password,email)
                                        VALUES (:usuario,:password,:email)");
            $stmt-> bindParam(":usuario",$datosModel["usuario"],PDO::PARAM_STR);
            $stmt-> bindParam(":password",$datosModel["password"],PDO::PARAM_STR);
            $stmt-> bindParam(":email",$datosModel["email"],PDO::PARAM_STR);

            if ($stmt -> execute()){
                return "Correcto";
            }
                else "Error";
        }

        public static function ingresoUsuarioModel($datosModel, $tabla){
            $stmt = Conexion::conectar()->prepare("SELECT usuario, password From $tabla Where usuario= :usuario");
            // luego copio la linea de $stmt, la pego y la modifico
            $stmt -> bindParam(":usuario", $datosModel["usuario"], PDO::PARAM_STR);
            // como solo necesito el campo usuario no tengo que traer el password, luego la ejecuto
            $stmt->execute(); // pido que se ejecute la función con la variable stmt
            return $stmt->fetch();
          }

          public static function vistaUsuariosModel($tabla){
            $stmt = Conexion::conectar()->prepare("SELECT id, usuario, password, email From $tabla");
            $stmt->execute();
            return $stmt->fetchAll();

          }

            public static function editarUsuarioModel($datosModel, $tabla){
            $stmt = Conexion::conectar()->prepare("SELECT id, usuario, password, email From $tabla
            WHERE id = :id");
            $stmt-> bindParam(":id",$datosModel,PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetch();
          }

          public static function actualizarUsuarioModel($datosModel, $tabla){
              $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET usuario = :usuario, password = :password,  email = :email WHERE id = :id");

             $stmt->bindParam(":usuario", $datosModel["usuario"], PDO::PARAM_STR);
             $stmt->bindParam(":password", $datosModel["password"], PDO::PARAM_STR);
             $stmt->bindParam(":email", $datosModel["email"], PDO::PARAM_STR);
             $stmt-> bindParam(":id",$datosModel["id"],PDO::PARAM_INT);
             if ($stmt -> execute()){                
                header("location:index.php?action=cambio");               
            }
                else "Error";    
    }  

         public static function borrarUsuariosModel($datosModel, $tabla){
        $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id= :id");
        $stmt-> bindParam(":id",$datosModel,PDO::PARAM_INT);
        if ($stmt -> execute()){
            return "Correcto";
        }
            else {
                "Error";
            }
           
    }  
        

    }
?>