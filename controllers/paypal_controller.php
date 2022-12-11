<?php
    require_once("utils/seg.php");
    require_once("models/paypal_model.php");

    class paypal_controller {

        public static function registrar_notificacion() {
            //revisado
            // $pagos = new paypal_model();
            // $pagos->registrar($_POST);
        }

        public static function cancelar() {
            //revisado
            header("location: index.php?c=".seg::codificar("principal")."&m=".seg::codificar("mensaje")."&msg=La compra ha sido cancelada.<br>Recuerda que para iniciar, debes pagar el servicio");
        }

        public static function retorno() {
            //revisado
            $pagos = new paypal_model();
            $pagos->registrar();
            
            header("location: index.php?c=".seg::codificar("principal")."&m=".seg::codificar("mensaje")."&msg=El pago ha sido registrado con éxito.<br>Ve al inicio para utilizar el servicio");
        }
    }
?>