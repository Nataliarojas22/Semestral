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
                    <h2 class="heading mb-5 p-3" style="background-color: rgba(0, 0, 0, 0.815); border-radius: 20px;"><?php echo $nombre_restaurante ?></h2>
                    <img src="/uploads/<?php echo $logo; ?>" alt="" srcset="https://img.freepik.com/vector-premium/logo-restaurante-retro_23-2148474404.jpg?w=2000" class="img-fluid rounded-circle mr-3" width="200px" style="border: 3px solid #ffffff;">
                </div>
            </div>
        </div>
    </div>
</div>



<div class="container d-flex mb-5">
    <div class="card mr-5" style="width: 18rem;">
        <img class="card-img-top" src="https://www.rebanando.com/cache/slideshow/47/0f/b6/1a/thinkstockphotos-872066430.jpg/2cb6823c975ee09b0d93e071c71c86d5.jpg" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Categorías</h5>
            <a href="<?php echo 'index.php?c='.seg::codificar("categoria_plato").'&m='.seg::codificar("mostrar");?>" class="btn btn-primary">Gestionar</a>
        </div>
    </div>

    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="https://conexion360.mx/wp-content/uploads/2019/04/FOTO-WEB-CUARESMA-RESTAURANTES-2-1.jpg" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Paltillos</h5>
            <a href="<?php echo 'index.php?c='.seg::codificar("plato").'&m='.seg::codificar("mostrar");?>" class="btn btn-primary">Gestionar</a>
        </div>
    </div>
</div>