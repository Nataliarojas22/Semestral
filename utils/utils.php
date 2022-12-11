<?php
    require_once("utils/seg.php");

    class utils {
        public static function enviarCorreo($correo, $id) {
            //revisado
            $headers = "From: grupo2@ddinnova.info\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=utf-8\r\n";
            
            $link = $_SERVER["REQUEST_SCHEME"]."://".$_SERVER["SERVER_NAME"]."/index.php?c=".seg::codificar("usuario")."&m=".seg::codificar("activar")."&s=".$id;
            $mensaje = '<h2>Activación de la cuenta</h2>Estimado usuario,<br><br>Se ha generado un correo de <strong>activación</strong>. Para iniciar sesión, haga clic en <a href="'.$link.'">ACTIVAR</a> para continuar.<br><br><br>Att: Scratt Inc<br>SaaS Sitio Web Oficial';
            
            mail($correo, "Activa tu cuenta de Scratt", $mensaje, $headers);
        }

        public static function subirArchivo($archivo_temporal, $archivo, $destino) {
            //pendiente de revisar
            $arreglo = explode(".", $archivo);
            $extension = $arreglo[count($arreglo) - 1];
            $archivo = md5(time().$archivo).".".$extension;
            $destino = $destino."/".$archivo;
            
            if (move_uploaded_file($archivo_temporal, $destino))
                return $destino;

            else
                return null;
        }

        public static function generarQr($url) {
            //pendiente de revisar
            //require_once("libs/codigo_qr/qrlib.php");

            //Declaramos una carpeta temporal para guardar la imágenes generadas
            $dir = 'libs/temp/';
            
            //Si no existe la carpeta la creamos
            if (!file_exists($dir))
                mkdir($dir);
            
            //Declaramos la ruta y nombre del archivo a generar
            $filename = $dir.md5($url).'.png';
            
            //Parámetros de Configuración
            $tamaño = 10; //Tamaño de Pixel
            $level = 'L'; //Precisión Baja
            $framSize = 3; //Tamaño en blanco
            $contenido = $url; //Texto
            
            //Enviamos los parámetros a la Función para generar código QR 
            //QRcode::png($contenido, $filename, $level, $tamaño, $framSize); 
            
            //Mostramos la imagen generada
            return $dir.basename($filename);  
        }
    }
?>  