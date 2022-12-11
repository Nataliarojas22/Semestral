<div class="section bg-light" data-aos="fade-up" id="section-reservation">
    <div class="container">
        <div class="row section-heading justify-content-center mb-5">
            <div class="col-md-8 text-center">
                <h2 class="heading mb-3">Inicia sesión</h2>
                <p class="sub-heading mb-5">Coloca tus datos para entrar</p>
            </div>
            <?php if (isset($msg)) { ?>
                <div class="alert alert-primary" role="alert">
                    <h5 class="alert-heading"><strong>Aviso:</strong><?php echo " ".$msg?></p></h5>
                </div>
            <?php } ?>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-10 p-5 form-wrap">
                <form action="<?php echo "index.php?c=" . seg::codificar("usuario") . "&m=" . seg::codificar("validar_usuario") ?>" method="POST">
                    <div class="row mb-4">
                        <div class="form-group col-md-4">
                            <label for="name" class="label">Usuario</label>
                            <div class="form-field-icon-wrap">
                                <input type="text" class="form-control" id="name" name="txtUsuario" value="<?php echo isset($usuario)?$usuario:"" ?>">
                                <span style="color: #FF0000"></span>
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="email" class="label">Contraseña</label>
                            <div class="form-field-icon-wrap">
                                <input type="password" class="form-control" id="email" name="txtPassword" value="">
                                <span style="color: #FF0000"></span>
                            </div>
                        </div>
                        
                        <div class="form-check">
                            <br>
                            <input class="form-check-input" type="checkbox" id="flexCheckDefault" name="ckbRecordar" value="1">
                            <label class="form-check-label" for="flexCheckDefault">
                                Recordar usuario
                            </label>
                        </div>

                        <input type="hidden" name="token" value="<?php echo seg::getToken() ?>">
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-4">
                            <input type="submit" value="Ingresar" class="btn btn-primary btn-outline-primary btn-block">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>