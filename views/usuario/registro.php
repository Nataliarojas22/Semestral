<div class="section bg-light" data-aos="fade-up" id="section-reservation">
    <div class="container">
        <div class="row section-heading justify-content-center mb-5">
            <div class="col-md-8 text-center">
                <h2 class="heading mb-3">Registro</h2>
                <p class="sub-heading mb-5">Ingresa tus datos para comenzar</p>
            </div>
            <?php if (isset($msg)) { ?>
                <div class="alert alert-primary" role="alert">
                    <h5 class="alert-heading"><strong>Aviso:</strong><?php echo " ".$msg?></p></h5>
                </div>
            <?php } ?>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-10 p-5 form-wrap">
                <form action="<?php echo "index.php?c=".seg::codificar("usuario")."&m=".seg::codificar("insertar") ?>" method="POST">
                    <div class="row mb-4">
                        <div class="form-group col-md-4">
                            <label for="name" class="label">Usuario</label>
                            <div class="form-field-icon-wrap">
                                <input type="text" class="form-control" id="name" name="txtUsuario" value="<?php echo isset($usuario)?$usuario:"" ?>">
                                <span style="color: #FF0000"><?php echo isset($error[0])?$error[0]:"" ?></span>
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="email" class="label">Correo</label>
                            <div class="form-field-icon-wrap">
                                <input type="email" class="form-control" id="email" name="txtCorreo" value="<?php echo isset($correo)?$correo:"" ?>">
                                <span style="color: #FF0000"><?php echo isset($error[1])?$error[1]:"" ?></span>
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="email" class="label">Contraseña</label>
                            <div class="form-field-icon-wrap">
                                <input type="password" class="form-control" id="email" name="txtPassword" value="<?php echo isset($password)?$password:"" ?>">
                                <span style="color: #FF0000"><?php echo isset($error[2])?$error[2]:"" ?></span>
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="email" class="label">Repetir contraseña</label>
                            <div class="form-field-icon-wrap">
                                <input type="password" class="form-control" id="email" name="txtPassword2">
                                <span style="color: #FF0000"><?php echo isset($error[3])?$error[3]:"" ?></span>
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="name" class="label">Nombre de contacto</label>
                            <div class="form-field-icon-wrap">
                                <input type="text" class="form-control" id="name" name="txtNombre" value="<?php echo isset($usuario)?$usuario:"" ?>">
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="name" class="label">Nombre de restaurante</label>
                            <div class="form-field-icon-wrap">
                                <input type="text" class="form-control" id="name" name="txtNombreEmpresa" value="<?php echo isset($usuario)?$usuario:"" ?>">
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="email" class="label">Cuenta de PayPal</label>
                            <div class="form-field-icon-wrap">
                                <input type="email" class="form-control" name="txtCuentaPaypal" value="<?php echo isset($cuenta_paypal)?$cuenta_paypal:"" ?>">
                                <span style="color: #FF0000"><?php echo isset($error[4])?$error[4]:"" ?></span>
                            </div>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="email" class="label">Cuenta de PayPal</label>
                            <div class="form-field-icon-wrap">
                                <input type="email" class="form-control" name="txtCuentaPaypal" value="<?php echo isset($cuenta_paypal)?$cuenta_paypal:"" ?>">
                                <span style="color: #FF0000"><?php echo isset($error[4])?$error[4]:"" ?></span>
                            </div>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="email" class="label">Cuenta de PayPal</label>
                            <div class="form-field-icon-wrap">
                                <input type="email" class="form-control" name="txtCuentaPaypal" value="<?php echo isset($cuenta_paypal)?$cuenta_paypal:"" ?>">
                                <span style="color: #FF0000"><?php echo isset($error[4])?$error[4]:"" ?></span>
                            </div>
                        </div>

                        <input type="hidden" name="token" value="<?php echo seg::getToken() ?>">
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-4">
                            <input type="submit" value="Enviar" class="btn btn-primary btn-outline-primary btn-block">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>