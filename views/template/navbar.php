<nav class="site-menu" id="ftco-navbar-spy">
    <div class="site-menu-inner" id="ftco-navbar">
        <ul class="list-unstyled">
            <?php if (!isset($_SESSION["id_usuario"])) { ?>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="<?php echo "index.php?c=".seg::codificar("usuario")."&m=".seg::codificar("login") ?>">Inicia sesión</a></li>
                <li><a href="<?php echo "index.php?c=".seg::codificar("usuario")."&m=".seg::codificar("registro") ?>">Registrate</a></li>

            <?php } elseif ($_SESSION["tipo_usuario"] == 1) { ?> <!-- este es el menu de administrador -->
                <li><a href="index.php">Inicio</a></li>
                <li><a href="<?php echo "index.php?c=".seg::codificar("usuario")."&m=".seg::codificar("listar_usuarios") ?>">Ver usuarios</a></li>
                <li><a href="<?php echo "index.php?c=".seg::codificar("usuario")."&m=".seg::codificar("listar_suscripcion") ?>">Ver suscripciones</a></li>
                <li><a href="<?php echo "index.php?c=".seg::codificar("usuario")."&m=".seg::codificar("cerrar_sesion") ?>">Cerrar sesión</a></li>

            <?php } elseif ($_SESSION["tipo_usuario"] == 0){ ?>
                <li><a href="index.php">Inicio</a></li> <!-- este es el menu de usuario -->
                <li><a href="<?php echo "index.php?c=".seg::codificar("usuario")."&m=".seg::codificar("ver_menu")."&id=".$_SESSION["id_usuario"] ?>">Ver Menú</a></li>
                <li><a href="<?php echo "index.php?c=".seg::codificar("usuario")."&m=".seg::codificar("modificar_cuenta") ?>">Categorías</a></li>
                <li><a href="<?php echo "index.php?c=".seg::codificar("usuario")."&m=".seg::codificar("modificar_cuenta") ?>">Platos</a></li>
                <li><a href="<?php echo "index.php?c=".seg::codificar("usuario")."&m=".seg::codificar("modificar_cuenta") ?>">Modificar Cuenta</a></li>
                <hr>
                <li><a href="<?php echo "index.php?c=".seg::codificar("usuario")."&m=".seg::codificar("cerrar_sesion") ?>">Cerrar sesión</a></li>
            <?php } ?>
        </ul>
    </div>
</nav>