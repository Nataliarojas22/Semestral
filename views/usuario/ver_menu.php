<div class="section bg-light" id="section-menu" data-aos="fade-up">
	<section class="hero-wrap hero-wrap-2 img_bg" style="background-image: url('<?php echo $imagen_fondo ?>');" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>

		<div class="container justify-content-center" style="height: 500px; justify-content: center;">
			<div class="row no-gutters slider-text align-items-end justify-content-center">
				<div class="col-md-9 ftco-animate text-center">
					<h1>
						<img src="<?php echo $logo ?>" style="width: 100px; height: 100px;">
						<span class="mb-2 bread bg-white"><?php echo $nombre_empresa ?></span>
					</h1>
				</div>
			</div>
		</div>
	</section>

	<!-- ******************************************************* -->
	<section class="ftco-section">
		<div class="container-fluid px-4">
			<div class="row justify-content-center mb-5 pb-2">
			</div>
			<div class="row">

				<?php foreach ($listaCat as $categoria) { 
				?>


				<div class="col-md-6 col-lg-4 menu-wrap">
					<div class="heading-menu text-center ftco-animate">
						<h3><?php echo $categoria["nombre_categoria"] ?></h3>
					</div>


					<?php foreach ($listaPlat as $plato)
					if ((new MongoDB\BSON\ObjectId($plato->_id_categoria)) == $categoria["_id"]) {
					?>

					<div class="card" style="width: 18rem; margin-bottom: 50px;">
						<img src="<?php echo $plato["foto_plato"]?>" class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title" id="nombre-plato"><?php echo $plato["nombre_plato"]?></h5>
							<p class="card-text" id="descripcion-plato"><?php echo $plato["descripcion_plato"]?></p>
							<a href="#" class="btn btn-primary" id="precio-plato"><?php echo $plato["precio_plato"]?></a>
						</div>
					</div>


					<?php } 
					?>
				</div>
				<?php } 
				?>

				
			</div>
	</section>
</div>