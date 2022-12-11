<?php
    require_once("utils/bd.php");
    require_once("models/usuario_model.php");

    class paypal_model {
        
        public function registrar() {
            //revisado
            // $conexion = bd::connection();
            // $coleccion = $conexion->pagos_paypal;

            // try {
            //     $resultado = $coleccion->insertOne($peticion);
            //     $coleccion = $conexion->usuario;

            //     try {
            //         $resultado = $coleccion->updateOne(
            //             ["cuenta_paypal" => $_SESSION["cuenta_paypal"]],
            //             ['$set' => [
            //                 "monto_pago" => "49.99"
            //             ]]
            //         );

            //         $_SESSION["monto_pago"] = $peticion["payment_gross"];

            //         return $resultado->getModifiedCount();

            //     } catch (Exception $e) {
            //         return 0;
            //     }

            // } catch (Exception $e) {
            //     return null;
            // }

            // $conexion = bd::connection();
            // $coleccion = $conexion->pagos_paypal;
            $conexion = bd::connection();
            $coleccion = $conexion->usuario;

            try {
                $cuenta = $_SESSION["cuenta_paypal"];

                $resultado = $coleccion->updateOne(
                    ["cuenta_paypal" => $cuenta],
                    ['$set' => [
                        "monto_pago" => "49.99"
                    ]]
                );

                $_SESSION["monto_pago"] = 49.99;

                return $resultado->getModifiedCount();

            } catch (Exception $e) {
                return 0;
            }
        } 
    }
?>