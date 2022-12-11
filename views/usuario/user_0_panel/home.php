<?php 
	$logo = isset($_SESSION["imagen_fondo"]) ? $_SESSION["imagen_fondo"] : 
	"https://img.freepik.com/vector-premium/logo-restaurante-retro_23-2148474404.jpg?w=2000";
	$nombre_restaurante = isset($_SESSION["nombre_restaurante"]) ? $_SESSION["nombre_restaurante"] : "El montuno";
	$imagen_fondo = isset($_SESSION["imagen_fondo"]) ? $_SESSION["imagen_fondo"] : 
	"https://92680862a5f659b6a73e-7823e5ac71185cbd75b2aa176d0997ae.ssl.cf1.rackcdn.com/custom/img/shared/lista-recomendados.jpg";
?>

<div class="row"
	style="height: 250px; background-image:url(<?php echo $imagen_fondo;?>); background-size: cover; background-repeat: no-repeat; background-position: center;">
	<div class="col-12 d-flex align-items-center" style="background-color: rgba(0, 0, 0, 0.7); padding-left: 2%;">
		<img src="/uploads/<?php echo $logo;?>" alt="" srcset="https://img.freepik.com/vector-premium/logo-restaurante-retro_23-2148474404.jpg?w=2000" class="img-fluid rounded-circle mr-3" width="200px" style="border: 3px solid #ffffff;">
		<h1 class="text-white" style="margin-left: 2%;"><b><?php echo $nombre_restaurante;?></b></h1>
	</div>
</div>