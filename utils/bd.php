<?php 
    class bd {
        public static function connection() {
            require_once("vendor/autoload.php");

            $cadena = "mongodb+srv://root:z3jimrFrqqqw7cqF@scratchdatabase.qlpeh67.mongodb.net/?retryWrites=true&w=majority";

            $cliente = new MongoDB\Client($cadena);
            $conexion = $cliente->selectDatabase("scratchDatabase");

            return $conexion;
        }
    }
?>