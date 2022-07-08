<?php   
    class Conexion{
        public static function conectar(){
            $link= new PDO("mysql:host=localhost;dbname=usuarioscrud","root","");
            return $link;
        }
    }



?>