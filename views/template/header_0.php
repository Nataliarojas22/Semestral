<?php
$logo = isset($_SESSION["imagen_fondo"]) ? 'uploads/' . $_SESSION["imagen_fondo"] : 
"https://img.freepik.com/vector-premium/logo-restaurante-retro_23-2148474404.jpg?w=2000";

$nombre_restaurante = isset($_SESSION["nombre_restaurante"]) ? $_SESSION["nombre_restaurante"] : "El montuno";

$imagen_fondo = isset($_SESSION["imagen_fondo"]) ? 'uploads/' . $_SESSION["imagen_fondo"] : 
"https://cdn.foodandwineespanol.com/2019/07/destacada-cocinas.jpg";
?>

<div class="cover_1 overlay bg-slant-white bg-light">
    <div class="img_bg" style="background-image: url(<?php echo $imagen_fondo ?>);" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">
                <div class="col-md-10" data-aos="fade-up">
                    <h2 class="heading mb-5"><?php echo $nombre_restaurante ?></h2>
                    <img src="/uploads/<?php echo $logo; ?>" alt="" srcset="https://img.freepik.com/vector-premium/logo-restaurante-retro_23-2148474404.jpg?w=2000" class="img-fluid rounded-circle mr-3" width="200px" style="border: 3px solid #ffffff;">
                </div>
            </div>
        </div>
    </div>
</div>