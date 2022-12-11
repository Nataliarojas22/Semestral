<?php if (!isset($_SESSION["id_usuario"])) { ?>
    <div class="cover_1 overlay bg-slant-white bg-light">
        <div class="img_bg" style="background-image: url(images/slider-1.jpg);" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row align-items-center justify-content-center text-center">
                    <div class="col-md-10" data-aos="fade-up">
                        <h2 class="heading mb-5">Bienvenido a Scratt, donde los platos hablan por si mismos.</h2>
                        <p class="sub-heading mb-5">Diseña, crea y vende tus platillos favoritos. <a href="<?php echo "index.php?c=" . seg::codificar("usuario") . "&m=" . seg::codificar("registro") ?>"><strong>Registrate</strong></a></p>
                        <p><a href="<?php echo "index.php?c=" . seg::codificar("usuario") . "&m=" . seg::codificar("login") ?>" class="smoothscroll btn btn-outline-white px-5 py-3">Inicia sesión</a></p>
                        <!-- <p><a href="<?php echo "index.php?c=" . seg::codificar("categoria_plato") . "&m=" . seg::codificar("test_mostrar") ?>" class="smoothscroll btn btn-outline-white px-5 py-3">Test anthony</a></p> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section" data-aos="fade-up">
        <div class="container">
            <div class="row section-heading justify-content-center mb-5">
                <div class="col-md-8 text-center">
                    <h2 class="heading mb-3">Muestra tus mejores comidas</h2>
                    <p class="sub-heading mb-5">Provee de una gran variedad de categorias para tus clientes. <a href="<?php echo "index.php?c=" . seg::codificar("usuario") . "&m=" . seg::codificar("registro") ?>">Registrate</a></p>
                </div>
            </div>

            <div class="row">

                <div class="ftco-46">
                    <div class="ftco-46-row d-flex flex-column flex-lg-row">
                        <div class="ftco-46-image" style="background-image: url(images/img_1.jpg);"></div>
                        <div class="ftco-46-text ftco-46-arrow-left">
                            <h4 class="ftco-46-subheading">Almuerzo</h4>
                            <h3 class="ftco-46-heading">Entomatadas de camarón</h3>
                            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <p><a href="#" class="btn-link">Ver más <span class="ion-android-arrow-forward"></span></a></p>
                        </div>
                        <div class="ftco-46-image" style="background-image: url(images/img_2.jpg);"></div>
                    </div>

                    <div class="ftco-46-row d-flex flex-column flex-lg-row">
                        <div class="ftco-46-text ftco-46-arrow-right">
                            <h4 class="ftco-46-subheading">Desayuno</h4>
                            <h3 class="ftco-46-heading">Bowl de frutas</h3>
                            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <p><a href="#" class="btn-link">Ver más <span class="ion-android-arrow-forward"></span></a></p>
                        </div>
                        <div class="ftco-46-image" style="background-image: url(images/img_3.jpg);"></div>
                        <div class="ftco-46-text ftco-46-arrow-up">
                            <h4 class="ftco-46-subheading">Cena</h4>
                            <h3 class="ftco-46-heading">Omelette</h3>
                            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <p><a href="#" class="btn-link">Ver más <span class="ion-android-arrow-forward"></span></a></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="section pb-3 bg-white" id="section-about" data-aos="fade-up">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-12 col-lg-8 section-heading">
                    <h2 class="heading mb-5">Acerca de nosotros</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="section bg-white pt-2 pb-2 text-center" data-aos="fade">
        <p><img src="images/bg_hero.png" alt="Free Website Template for Restaurants by Free-Template.co" class="img-fluid"></p>
    </div>

    <div class="section bg-white services-section" data-aos="fade-up">
        <div class="container">
            <div class="row section-heading justify-content-center mb-5">
                <div class="col-md-8 text-center">
                    <h2 class="heading mb-3">Otros beneficios</h2>
                    <p class="sub-heading mb-5">Administra, modifica y visualiza tus creaciones. <a href="<?php echo "index.php?c=" . seg::codificar("usuario") . "&m=" . seg::codificar("registro") ?>">Registrate</a></p>
                </div>
            </div>
            <div class="row">
                <div class="col-m mb-5d-6 col-lg-4" data-aos="fade-up">
                    <div class="media feature-icon d-block text-center">
                        <div class="icon">
                            <span class="flaticon-soup"></span>
                        </div>
                        <div class="media-body">
                            <h3>Acceso 24/7</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="100">
                    <div class="media feature-icon d-block text-center">
                        <div class="icon">
                            <span class="flaticon-vegetables"></span>
                        </div>
                        <div class="media-body">
                            <h3>Servicio personalizado</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="300">
                    <div class="media feature-icon d-block text-center">
                        <div class="icon">
                            <span class="flaticon-pancake"></span>
                        </div>
                        <div class="media-body">
                            <h3>Paga una sola vez</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } else { ?>
    <?php if ($_SESSION["tipo_usuario"] == 1) { ?>
        <div class="section bg-white" data-aos="fade-up">
            <div class="container">
                <div class="row section-heading justify-content-center mb-5">
                    <div class="col-md-8 text-center">
                        <h2 class="heading mb-3">Vista de administrador</h2>
                    </div>
                </div>
                <div class="row justify-content-center text-center" data-aos="fade-up">
                    <div class="col-md-8">
                        <div class="owl-carousel home-slider-loop-false">

                            <div class="item">
                                <blockquote class="testimonial">
                                    <p>Esta vista solo la puede ver el administador del sistema.<br>Aqui puedes ver la lista de usuarios y suscripciones</p>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php } elseif ($_SESSION["monto_pago"] == 0) { ?>
        <div class="section bg-white" data-aos="fade-up">
            <div class="container">
                <div class="row section-heading justify-content-center mb-5">
                    <div class="col-md-8 text-center">
                        <h2 class="heading mb-3">Bienvenido <?php echo $_SESSION["nombre_contacto"] ?></h2>
                    </div>
                </div>
                <div class="row justify-content-center text-center" data-aos="fade-up">
                    <div class="col-md-8">
                        <div class="owl-carousel home-slider-loop-false">

                            <div class="item">
                                <blockquote class="testimonial">
                                    <p>Como último paso, debes pagar para finalizar el registro</p>

                                    <form target="paypal" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="POST">
                                        <input type="hidden" name="cmd" value="_xclick">
                                        <input type="hidden" name="business" value="sb-vicwk15327995@business.example.com">
                                        <input type="hidden" name="item_name" value="descripcion del pago">
                                        <input type="hidden" name="item_number" value="codigo del pago">
                                        <input type="hidden" name="amount" value="49.99">
                                        <input type="hidden" name="tax" value="0">
                                        <input type="hidden" name="quantity" value="1">
                                        <input type="hidden" name="currency_code" value="USD">
                                        <input type="hidden" name="country" value="PA">
                                        <input type="hidden" name="return" value="<?php echo  $_SERVER["REQUEST_SCHEME"] . "://" . $_SERVER["SERVER_NAME"] . "/index.php?c=" . seg::codificar("paypal") . "&m=" . seg::codificar("retorno") ?>">
                                        <input type='hidden' name='notify_url' value="<?php echo  $_SERVER["REQUEST_SCHEME"] . "://" . $_SERVER["SERVER_NAME"] . "/index.php?c=" . seg::codificar("paypal") . "&m=" . seg::codificar("registar_notificacion") ?>">
                                        <input type='hidden' name='cancel_return' value="<?php echo  $_SERVER["REQUEST_SCHEME"] . "://" . $_SERVER["SERVER_NAME"] . "/index.php?c=" . seg::codificar("paypal") . "&m=" . seg::codificar("cancelar") ?>">
                                        <input type="submit" name="submit" value="Pagar $49.99 " class="sub-heading mb-5">
                                    </form>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php } elseif ($_SESSION["monto_pago"] == 0) { 
        require_once "views/template/header_0_options.php";
        } else{

        }
    }?>