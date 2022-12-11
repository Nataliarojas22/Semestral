<?php
    require_once("utils/seg.php");

    class principal_controller {
        public static function index() {
            if (isset($_COOKIE["usuario"])) {
                $_SESSION["nombre"] = seg::decodificar($_COOKIE["nombre"]);
                $_SESSION["usuario"] = seg::decodificar($_COOKIE["usuario"]);
            }

            $titulo = "Scratt &mdash; Sitio web oficial | INICIO";

            require_once("views/template/header.php");
            require_once("views/template/navbar.php");
            require_once("views/template/header2.php");
            require_once("views/principal/index.php");
            require_once("views/template/footer.php");
        }

        public static function error() {
            $titulo = "Scratt &mdash; Sitio web oficial | ERROR";

            require_once("views/template/header.php");
            require_once("views/template/navbar.php");
            require_once("views/template/header2.php");
            require_once("views/principal/error.php");
            require_once("views/template/footer.php");
        }

        public static function mensaje() {
            $mensaje = $_GET["msg"];

            $titulo = "Scratt &mdash; Sitio web oficial | NOTIFICACIÓN";

            require_once("views/template/header.php");
            require_once("views/template/navbar.php");
            require_once("views/template/header2.php");
            require_once("views/principal/mensaje.php");
            require_once("views/template/footer.php");
        }


        #Vista de los clientes
        public static function show_panel_user_0(){
            /*if (!isset($_SESSION["id_usuario"])) {
                header("location:" . "index.php?c=" . seg::codificar("principal") . "&m=" . seg::codificar("mensaje") . "&msg=Notiene acceso a esta pantalla, debe acceder para continuar");
                exit();
            }*/

            $titulo = "Scratt &mdash; Sitio web oficial | PANEL DE USUARIO";

            require_once "views/usuario/user_0_panel/header.php";
            require_once "views/usuario/user_0_panel/navbar.php";
            require_once "views/usuario/user_0_panel/home.php";
            require_once "views/usuario/user_0_panel/categorias/read.php";
            require_once "views/usuario/user_0_panel/footer.php";
        }

        #Vista del usuario root
        public static function show_panel_user_1(){
            
        }
    }
?>  