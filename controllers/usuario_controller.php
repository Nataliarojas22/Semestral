<?php
    require_once("utils/seg.php");
    require_once("utils/utils.php");
    require_once("models/usuario_model.php");
    require_once("models/categoria_plato_model.php");
    require_once("models/plato_model.php");
    
    class usuario_controller {

        public static function registro() {
            //revisadoooo
            $titulo = "Scratt &mdash; Sitio web oficial | REGISTRO";

            require_once("views/template/header.php");
            require_once("views/template/navbar.php");
            require_once("views/template/header2.php");
            require_once("views/usuario/registro.php");
            require_once("views/template/footer.php");
        }

        public static function insertar() {
            //revisado
            if ($_POST) {
                if (!isset($_POST["token"]) ||  !seg::validarSesion($_POST["token"])) {
                    echo "Acceso restringido";
                    exit();
                }

                empty($_POST["txtUsuario"])?$error[0]="usuario obligatorio":$usuario=$_POST["txtUsuario"];
                empty($_POST["txtCorreo"])?$error[1]="correo obligatorio":$correo=$_POST["txtCorreo"];
                empty($_POST["txtPassword"])?$error[2]="contraseña obligatorio":$password=$_POST["txtPassword"];

                !($_POST["txtPassword"] == $_POST["txtPassword2"])?$error[3]="contraseñas distintas":"";

                $nombre_contacto = $_POST["txtNombre"];
                $nombre_empresa = $_POST["txtNombreEmpresa"];

                #=================================== Img ================================

                empty($_POST["txtCuentaPaypal"])?$error[4]="correo obligatorio":$cuenta_paypal=$_POST["txtCuentaPaypal"];

                if (isset($error)) {
                    $msg = "dejaste un campo vacío o llenaste un campo de forma incorrecta";
                    $titulo = "Scratt &mdash; Sitio web oficial | REGISTRO";

                    require_once("views/template/header.php");
                    require_once("views/template/navbar.php");
                    require_once("views/template/header2.php");
                    require_once("views/usuario/registro.php");
                    require_once("views/template/footer.php");


                } else {
                    $usuario = filter_var($usuario, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                    $correo = filter_var($correo, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                    $password = filter_var($password, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                    $nombre_contacto = filter_var($nombre_contacto, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                    $nombre_empresa = filter_var($nombre_empresa, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                    $cuenta_paypal = filter_var($cuenta_paypal, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

                    $obj = new usuario_model();
                    $obj->setUsuario($usuario);
                    $obj->setCorreo($correo);
                    $obj->setPassword($password);
                    $obj->setNombre_contacto($nombre_contacto);
                    $obj->setNombre_restaurante($nombre_empresa);
                    $obj->setCuenta_paypal($cuenta_paypal);
                    $obj->setImagen_fondo($imagen_fondo);
                    $obj->setLogo_empresa($logo_empresa);

                    $resultado2 = $obj->validar_user();
                    
                    if (isset($resultado2)) {
                        header("location:index.php?c=".seg::codificar("principal")."&m=".seg::codificar("mensaje")."&msg=El usuario ingresado ya existe<br>Elige otro distinto para poder registrarte...");
                        exit();
                    }

                    $resultado3 = $obj->validar_mail();
                    
                    if (isset($resultado3)) {
                        header("location:index.php?c=".seg::codificar("principal")."&m=".seg::codificar("mensaje")."&msg=El correo ingresado ya existe<br>Elige otro distinto para poder registrarte...");
                        exit();
                    }

                    $resultado = $obj->insertar();

                    if (isset($resultado)) {
                        utils::enviarcorreo($resultado->getCorreo(), $resultado->getId());

                        header("location:index.php?c=".seg::codificar("principal")."&m=".seg::codificar("mensaje")."&msg=Has sido registrado con exito.<br>Para continuar e iniciar sesión, revisa tu correo y activa tu cuenta.<br><br>¡Gracias por tu preferencia!");
                    
                    } else
                        header("location:index.php?c=".seg::codificar("principal")."&m=".seg::codificar("mensaje")."&msg=¡Upps! algo ha fallado. Intentalo nuevamente...");
                }
            }
        }

        public static function modificar()
        {
            if ($_POST) {
                if (!isset($_POST["token"]) ||  !seg::validarSesion($_POST["token"])) {
                    echo "Acceso restringido";
                    exit();
                }

                empty($_POST["txtCorreo"])?$error[1] ="Este campo es obligatorio":$correo=$_POST["txtCorreo"];

                $nombre_contacto = $_POST["txtNombre"];
                $nombre_empresa = $_POST["txtNombreEmpresa"];

                empty($_POST["txtCuentaPaypal"])?$error[2]="Este campo es obligatorio":$cuenta_paypal = $_POST["txtCuentaPaypal"];

                $logo_restaurante = $_POST["imgLogo"];
                $imagen_fondo = $_POST["imgFondo"];

                if (isset($error)) {
                    $titulo = "Scratt &mdash; Sitio web oficial | REGISTRO DE USUARIO";

                    require_once("views/template/header.php");
                    require_once("views/template/navbar.php");
                    require_once("views/template/header2.php");
                    //require_once("views/usuario/modificar_cuenta.php");
                    require_once("views/template/footer.php");

                } else {
                    $correo = filter_var($correo, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                    $nombre_contacto = filter_var($nombre_contacto, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                    $nombre_empresa = filter_var($nombre_empresa, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                    $cuenta_paypal = filter_var($cuenta_paypal, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                    
                    $obj = new usuario_model();
                    $obj->setId($_SESSION["id_usuario"]);
                    $obj->setCorreo($correo);
                    $obj->setNombre_contacto($nombre_contacto);
                    $obj->setNombre_restaurante($nombre_empresa);
                    $obj->setCuenta_paypal($cuenta_paypal);
                    $obj->setLogo_empresa($logo_restaurante);
                    $obj->setImagen_fondo($imagen_fondo);

                    $resultados = $obj->actualizar_datos();
                    if (isset($resultados)) {
                        header("location:" . "index.php?c=" . seg::codificar("principal") . "&m=" . seg::codificar("mensaje") . "&msg=Se ha modificado satisfactoriamente su cuenta <br><br>Gracias");
                    } else
                        header("location:" . "index.php?c=" . seg::codificar("principal") . "&m=" . seg::codificar("mensaje") . "&msg=No se pudo actualizar, intentelo nuevamente!");
                }
            }
        }

        public static function activar()
        {
            //revisado
            $obj = new usuario_model();

            $obj->setId($_GET["s"]);

            $resultado = $obj->activar_usuario();

            if ($resultado == 1) {
                header("location:index.php?c=".seg::codificar("principal")."&m=".seg::codificar("mensaje")."&msg=La cuenta ha sido activada con éxito.<br>Ya puedes iniciar sesión");

            } else
                header("location:index.php?c=".seg::codificar("principal")."&m=".seg::codificar("mensaje")."&msg=¡Upps! algo ha fallado. Intentalo nuevamente...");
        }

        public static function login() {
            //revisado
            $titulo = "Scratt &mdash; Sitio web oficial | INICIO DE SESIÓN";

            require_once("views/template/header.php");
            require_once("views/template/navbar.php");
            require_once("views/template/header2.php");
            require_once("views/usuario/login.php");
            require_once("views/template/footer.php");
        }

        public static function modificar_cuenta()
        {
            if (!isset($_SESSION["id_usuario"])) {
                header("location:" . "index.php?c=" . seg::codificar("principal") . "&m=" . seg::codificar("mensaje") . "&msg=Notiene acceso a esta pantalla, debe acceder para continuar");
                exit();
            }

            $obj = new usuario_model();
            $obj->setId($_SESSION["id_usuario"]);
            $resultados = $obj->ver_datos();

            require_once("views/template/header.php");
            require_once("views/template/navbar.php");
            require_once("views/template/header2.php");
            //require_once("views/usuario/modificar_cuenta.php");
            require_once("views/template/footer.php");
        }

        public static function vercodigoqr()
        {
            if (!isset($_SESSION["id_usuario"])) {
                header("location:" . "index.php?c=" . seg::codificar("principal") . "&m=" . seg::codificar("mensaje") . "&msg=Notiene acceso a esta pantalla, debe acceder para continuar");
                exit();
            }

            $url = $_SERVER["REQUEST_SCHEME"] . "://" . $_SERVER["SERVER_NAME"] . "/index.php?c=" . seg::codificar("usuario") . "&m=" . seg::codificar("ver_menu") . "&id=" . $_SESSION["id_usuario"];

            require_once("views/template/header.php");
            require_once("views/template/navbar.php");
            require_once("views/template/header2.php");
            //require_once("views/usuario/vercodigoqr.php");
            require_once("views/template/footer.php");
        }

        public static function validar_usuario() {
            //revisado
            if ($_POST) {
                if (!isset($_POST["token"]) ||  !seg::validarSesion($_POST["token"])) {
                    echo "Acceso restringido";
                    exit();
                }

                $obj = new usuario_model();
                $obj->setUsuario($_POST["txtUsuario"]);
                $obj->setPassword($_POST["txtPassword"]);

                $resultado = $obj->validar_usuario();

                if (count($resultado) > 0) {
                    if ($resultado->status == "0") {
                        header("location:index.php?c=".seg::codificar("principal")."&m=".seg::codificar("mensaje")."&msg=Aún no se ha confirmado el correo registrado.<br>Revisa tu correo y activa tu cuenta");
                        exit();
                    }

                    $_SESSION["nombre_contacto"] =  $resultado["nombre_contacto"];
                    $_SESSION["usuario"] = $resultado["usuario"];
                    $_SESSION["nombre_restaurante"] = $resultado["nombre_restaurante"];
                    $_SESSION["correo"] = $resultado["correo"];
                    $_SESSION["id_usuario"] = $resultado["_id"];
                    $_SESSION["monto_pago"] = $resultado["monto_pago"];
                    $_SESSION["cuenta_paypal"] = $resultado["cuenta_paypal"];
                    $_SESSION["imagen_fondo"] = $resultado["imagen_fondo"];
                    $_SESSION["logo_empresa"] = $resultado["logo_empresa"];
                    $_SESSION["nombre_restaurante"] = $resultado["nombre_restaurante"];
 
                    $_SESSION["tipo_usuario"] = $resultado["tipo_usuario"];

                    if (isset($_POST["chkRecordar"])) {
                        setcookie(seg::codificar("nombre"),  seg::codificar($resultado["nombre"]), time()+60);
                        setcookie(seg::codificar("usuario"),  seg::codificar($resultado["usuario"]), time()+60);
                    }

                    header("location:index.php");

                } else {
                    $msg = "dejaste un campo vacío o los datos son incorrectos";

                    $titulo = "Scratt &mdash; Sitio web oficial | INICIO DE SESIÓN";

                    require_once("views/template/header.php");
                    require_once("views/template/navbar.php");
                    require_once("views/template/header2.php");
                    require_once("views/usuario/login.php");
                    require_once("views/template/footer.php");
                }
            }
        }

        public static function cerrar_sesion()
        {
            //revisado
            session_destroy();
            header("location:index.php");
        }


        public static function ver_menu()
        {
            $id_usuario = $_GET["id"];
            $objUsuario  = new usuario_model();
            $objUsuario->setId($id_usuario);
            $datos_usuario = $objUsuario->ver_datos();
            $nombre_empresa = $datos_usuario["nombre_restaurante"];
            $logo = $datos_usuario["logo_empresa"];
            $imagen_fondo = $datos_usuario["imagen_fondo"];

            $objcategorias = new categoria_plato_model();
            $objcategorias->set_id_usuario(new MongoDB\BSON\ObjectId($id_usuario));
            $lista_categoria = $objcategorias->listar_categorias();
            foreach ($lista_categoria as $l)
                $listaCat[] = $l;
            $objplatos = new plato_model();
            $objplatos->set_id_usuario(new MongoDB\BSON\ObjectId($id_usuario));
            $lista_plato = $objplatos->mostrar_platos();
            foreach ($lista_plato as $p)
                $listaPlat[] = $p;
                
            require_once("views/template/header.php");
            require_once("views/template/header2.php");
            //require_once("views/usuario/ver_menu.php");
            require_once("views/template/footer.php");
        }

        public static function listar_usuarios() {
            $resultado = new usuario_model();
            $resultado->ver_usuarios();

            require_once("views/template/header.php");
            require_once("views/template/navbar.php");
            require_once("views/template/header2.php");
            require_once("views/verdatos/verusuarios.php");
            require_once("views/template/footer.php");
        }

        public static function listar_suscripcion() {
            $resultado = new usuario_model();
            $resultado->ver_suscripciones();

            require_once("views/template/header.php");
            require_once("views/template/navbar.php");
            require_once("views/template/header2.php");
            require_once("views/verdatos/versuscripciones.php");
            require_once("views/template/footer.php");
        }
    }
?>
