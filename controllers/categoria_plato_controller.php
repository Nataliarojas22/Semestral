<?php
    require_once("utils/seg.php");
    require_once("models/categoria_plato_model.php");
    require_once("models/usuario_model.php");

    class categoria_plato_controller {

        // public static function test_mostrar(){
        //     require_once("views/template/header.php");
        //     require_once("views/template/navbar.php");
        //     require_once("views/template/header2.php");
        //     require_once("views/template/header_0_options.php");
        //     require_once("views/template/footer.php");
        // }

        public static function mostrar() {
            //pendiente de revisar
            if (!isset($_SESSION["id_usuario"])) {
                header("location: index.php?c=".seg::codificar("principal")."&m=".seg::codificar("mensaje")."&msg=Se te ha impedido el acceso. Debes iniciar sesión para continuar.");
                exit();
            }

            $obj = new categoria_plato_model();
            $obj->set_id_usuario(isset($_SESSION["id_usuario"]) ?($_SESSION["id_usuario"]) : "");
            $resultado = $obj->listar_categorias();

            require_once("views/template/header.php");
            require_once("views/template/navbar.php");
            require_once("views/template/header2.php");
            require_once("views/categoria_platos/crud_categoria.php");
            require_once("views/template/footer.php");
        }

        public static function mostrar_modificar() {
            //pendiente de revisar
            if (!isset($_SESSION["id_usuario"])) {
                header("location: index.php?c=".seg::codificar("principal")."&m=".seg::codificar("mensaje")."&msg=Se te ha impedido el acceso. Debes iniciar sesión para continuar.");
                exit();
            }

            $_id = $_GET['_id'];

            require_once("views/template/header.php");
            require_once("views/template/navbar.php");
            require_once("views/template/header2.php");
            require_once("views/template/header_0.php");
            require_once("views/categoria_platos/modificar.php");
            require_once("views/template/footer.php");
        }

        public static function registro() {
            //pendiente de revisar
            if (!isset($_SESSION["id_usuario"])) {
                header("location: index.php?c=".seg::codificar("principal")."&m=".seg::codificar("mensaje")."&msg=Se te ha impedido el acceso. Debes iniciar sesión para continuar.");
                exit();
            }

            $obj = new usuario_model();
            $obj->setId($_SESSION["id_usuario"]);
            $resultado = $obj->ver_datos();

            require_once("views/template/header.php");
            require_once("views/template/navbar.php");
            require_once("views/template/header2.php");
            //require_once("views/categoria_plato/registro.php");
            require_once("views/template/footer.php");
        }

        public static function modificar() {
            //pendiente de revisar
            if (!isset($_SESSION["id_usuario"])) {
                header("location: index.php?c=".seg::codificar("principal")."&m=".seg::codificar("mensaje")."&msg=Se te ha impedido el acceso. Debes iniciar sesión para continuar.");
                exit();
            }

            $id = $_GET["id"];

            $obj = new categoria_plato_model();
            $obj->setId($id);
            $resultado = $obj->buscar_categoria();

            require_once("views/template/header.php");
            require_once("views/template/navbar.php");
            require_once("views/template/header2.php");
            require_once("views/template/header_0.php");
            require_once("views/categoria_platos/crud_categoria.php");
            require_once("views/template/footer.php");
        }

        public static function insertar() {
            //pendiente de revisar
            if ($_POST) {
                if (!isset($_POST["token"]) || !seg::validarSesion($_POST["token"])) {
                    echo "Acceso restringido";
                    exit();
                }

                empty($_POST["input_categoria_nombre"])?$error[0]="Este campo es obligatorio":$descripcion = $_POST["input_categoria_nombre"];

                if (isset($error)) {
                    var_dump($error);
                    $titulo = "Scratt &mdash; Sitio web oficial | REGISTRO DE CATEGORIA";

                    require_once("views/template/header.php");
                    require_once("views/template/navbar.php");
                    require_once("views/template/header2.php");
                    require_once("views/categoria_platos/crud_categoria.php");
                    require_once("views/template/footer.php");
                
                } else {
                    $descripcion = filter_var($descripcion, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

                    $obj = new categoria_plato_model();
                    $obj->setNombre_categoria($descripcion);
                    $obj->set_id_usuario($_SESSION["id_usuario"]);
                    $resultado = $obj->insertar();

                    if (isset($resultado)) {
                        header("location: index.php?c=".seg::codificar("principal")."&m=".seg::codificar("show_panel_user_0")."&msg=La categoria ha sido registrada con éxito");

                    } else {
                        header("location: index.php?c=".seg::codificar("principal")."&m=".seg::codificar("show_panel_user_0")."&msg=Algo ha fallado. Intentalo nuevamente");
                    }
                }
            }
        }

        public static function actualizar() {
            //pendiente de revisar
            if ($_POST) {
                if (!isset($_POST["token"]) || !seg::validarSesion($_POST["token"])) {
                    echo "Acceso restringido";
                    exit();
                }

                empty($_POST["input_categoria_nombre"])?$error[0]="Este campo es obligatorio":$descripcion = $_POST["input_categoria_nombre"];

                $id = $_POST["_id"];

                if (isset($error)) {
                    $titulo = "Scratt &mdash; Sitio web oficial | REGISTRO DE CATEGORIA";

                    require_once("views/template/header.php");
                    require_once("views/template/navbar.php");
                    require_once("views/template/header2.php");
                    //require_once("views/categoria_plato/modificar.php");
                    require_once("views/template/footer.php");
                
                } else {
                    $descripcion = filter_var($descripcion, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                    $id = filter_var($id, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

                    $obj = new categoria_plato_model();
                    $obj->setId($id);
                    $obj->setNombre_categoria($descripcion);
                    $obj->set_id_usuario($_SESSION["id_usuario"]);
                    $resultado = $obj->actualizar();

                    if (isset($resultado)) {
                        header("location: index.php?c=".seg::codificar("principal")."&m=".seg::codificar("mensaje")."&msg=La categoria ha sido actualizado con exito");

                    } else {
                        header("location: index.php?c=".seg::codificar("principal")."&m=".seg::codificar("mensaje")."&msg=Algo ha fallado. Intentalo nuevamente");
                    }
                }
            }
        }

        public static function mostrar_actualizar() {
            //pendiente de revisar
            if ($_POST) {
                if (!isset($_POST["token"]) || !seg::validarSesion($_POST["token"])) {
                    echo "Acceso restringido";
                    exit();
                }

                empty($_POST["input_categoria_nombre"])?$error[0]="Este campo es obligatorio":$descripcion = $_POST["input_categoria_nombre"];

                $id = $_POST["_id"];

                if (isset($error)) {
                    $titulo = "Scratt &mdash; Sitio web oficial | REGISTRO DE CATEGORIA";

                    require_once("views/template/header.php");
                    require_once("views/template/navbar.php");
                    require_once("views/template/header2.php");
                    //require_once("views/categoria_plato/modificar.php");
                    require_once("views/template/footer.php");
                
                } else {
                    $descripcion = filter_var($descripcion, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                    $id = filter_var($id, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

                    $obj = new categoria_plato_model();
                    $obj->setId($id);
                    $obj->setNombre_categoria($descripcion);
                    $obj->set_id_usuario($_SESSION["id_usuario"]);
                    $resultado = $obj->actualizar();

                    if (isset($resultado)) {
                        header("location: index.php?c=".seg::codificar("principal")."&m=".seg::codificar("mensaje")."&msg=La categoria ha sido actualizado con exito");

                    } else {
                        header("location: index.php?c=".seg::codificar("principal")."&m=".seg::codificar("mensaje")."&msg=Algo ha fallado. Intentalo nuevamente");
                    }
                }
            }
        }

        public static function eliminar() {
            $id = $_GET["id"];
            $id = filter_var($id, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $obj = new categoria_plato_model();
            $obj->setId($id);
            $resultado = $obj->eliminar();

            if ($resultado > 0) {
                header("location: index.php?c=".seg::codificar("principal")."&m=".seg::codificar("mensaje")."&msg=La categoria ha sido eliminado con exito");

            } else {
                header("location: index.php?c=".seg::codificar("principal")."&m=".seg::codificar("mensaje")."&msg=Algo ha fallado. Intentalo nuevamente");
            }
        }
    }
?>