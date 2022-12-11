<div class="section bg-white" data-aos="fade-up">
    <div class="container">
        <div class="row section-heading justify-content-center mb-5">
            <div class="col-md-8 text-center">
                <h2 class="heading mb-3">Tabla de suscripciones</h2>
            </div>
        </div>
        <div class="row justify-content-center text-center" data-aos="fade-up">
            <div class="col-md-8">
                <div class="owl-carousel home-slider-loop-false">

                    <div class="item">
                        <blockquote class="testimonial">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">CORREO</th>
                                        <th scope="col">FECHA DE REGISTRO</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><?php echo $_SESSION["id_usuario"] ?></td>
                                        <td><?php echo $_SESSION["correo"] ?></td>
                                        <td><?php echo "10/12/2022" ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 