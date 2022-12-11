
<!-- Toast msg -->
<div class="toast align-items-center text-bg-primary border-0 fade mt-5" role="alert" aria-live="assertive" aria-atomic="true" id="toast_msg" style="margin-top: 0; position:absolute;">
  <div class="d-flex">
    <div class="toast-body"><?php echo isset($_GET['msg']) ? $_GET['msg'] : "";?></div>
    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
  </div>
</div>

<div class="row mt-5 mx-auto">
  <div class="col-11 mx-auto">
    <form action="<?php echo 'index.php?c='.seg::codificar("categoria_plato").'&m='.seg::codificar("mostrar");?>" method="post" class="d-block mx-auto w-100">
      <h4 class="text-center">Seleccione una categoría</h4>
      <select class="form-select w-25 mx-auto border border-dark" aria-label="Default select example">
        <option selected>Open thi</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="<?php echo ""?>">Three</option>
        <?php 
          if(isset($resultado)){
            foreach($resultado as $r){ 
              echo '<option value="'.$r["nombre_categoria"].'">'.$r['nombre_categoria'].'</option>';
            } 
          }else{
            echo "<script>alert('No existe la variable que contiene categorias')</script>";
          }
        ?>
      </select>
      <button type="submit" class="btn btn-outline-dark mt-3 rounded-pill mb-3 w-25 d-block mx-auto"><i class="fa-solid fa-magnifying-glass"></i> Buscar</button>


    </form>
  </div>
</div>




<div class="row mt-1">
  <div class="col-11 mx-auto">
    <h1 class="text-center mt-5 bg-success text-white rounded-pill pt-1 pb-2 mb-4">Desayuno</h1>
    <div class="d-flex">
      <!-- Button trigger modal - crear categoria -->
      <a href="" class="btn btn-outline-dark mt-3 rounded-pill mb-3 w-25 d-block mx-auto" data-bs-toggle="modal" data-bs-target="#exampleModal">
        <i class="fa-solid fa-plus"></i> Crear categoría
      </a>

      <span class="mx-2"> </span>

      <!-- Button trigger modal - crear categoria -->
      <a href="" class="btn btn-outline-dark mt-3 rounded-pill mb-3 w-25 d-block mx-auto" data-bs-toggle="modal" data-bs-target="#exampleModal4">
        <i class="fa-solid fa-bowl-food"></i> Crear plato
      </a>

      <span class="mx-2"> </span>

      <!-- Button trigger modal - editar categoria -->
      <a href="" class="btn btn-outline-dark mt-3 rounded-pill mb-3 w-25 d-block mx-auto" data-bs-toggle="modal" data-bs-target="#exampleModal2">
        <i class="fa-solid fa-pen-to-square"></i> Editar categoría
      </a>

      <span class="mx-2"> </span>

      <!-- Button trigger modal - eliminar categoria -->
      <a class="btn btn-outline-danger mt-3 rounded-pill mb-3 w-25 d-block mx-auto" data-bs-toggle="modal" data-bs-target="#exampleModal3"><i class="fa-regular fa-trash-can"></i> Eliminar categoría </a>
    </div>

    <br>

    <?php 
      if(isset($_GET[''])){
        require_once "views/usuario/user_0_panel/platos/read.php";
      }
    ?>

  </div>
</div>
<br>


<!-- Modal - crear categoria -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header bg-dark">
        <h1 class="modal-title fs-5 text-white" id="exampleModalLabel">Nueva categoría</h1>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?php echo 'index.php?c='.seg::codificar("categoria_plato").'&m='.seg::codificar("insertar");?>" method="post">
          <div class="mb-3">
            <input type="text" class="form-control" id="exampleInputText1" aria-describedby="textHelp" placeholder="Ingrese el nombre" name="input_categoria_nombre">
            <div id="textHelp" class="form-text text-warning"><?php echo isset($error[0]) ? $error[0] : ""; ?></div>
            <br>
            <button type="submit" class="btn btn-primary">Crear</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>




<!-- Modal - editar categoria -->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header bg-dark">
        <h1 class="modal-title fs-5 text-white" id="exampleModalLabel">Editar categoría</h1>
        <button type="button" class="btn-close btn-close-white text-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?php echo 'index.php?c='.seg::codificar("categoria_plato").'&m='.seg::codificar("modificar");?>" method="post">
          <div class="mb-3">
            <input type="text" class="form-control" id="exampleInputText1" aria-describedby="textHelp" placeholder="Nuevo nombre" name="input_categoria_nombre">
            <div id="textHelp" class="form-text"></div>
            <br>
            <button type="submit" class="btn btn-primary">Aceptar</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>



<!-- Modal - eliminar categoria -->
<div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel3" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header bg-danger">
        <h1 class="modal-title fs-5 text-white" id="exampleModalLabel">¿Desea eliminar la categoría @Null?</h1>
        <button type="button" class="btn-close btn-close-white text-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="post">
          <div class="mb-3">
            <!--<input type="text" class="form-control" id="exampleInputText1" aria-describedby="textHelp" placeholder="Ingrese el nombre">-->
            <div id="textHelp" class="form-text"></div>
            <br>
            <button type="submit" class="btn btn-danger">Aceptar</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>



<!-- Modal - Agregar plato -->
<div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel4" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h1 class="modal-title fs-5 text-white" id="exampleModalLabel"><i class="fa-solid fa-utensils"></i> Nuevo plato
        </h1>
        <button type="button" class="btn-close btn-close-white text-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="post">
          <div class="mb-3">
            <div class="mb-3">
              <label for="exampleInputText1" class="form-label">Nombre</label>
              <input type="text" class="form-control" id="exampleInputText1" aria-describedby="textHelp">
              <div id="textHelp" class="form-text"></div>
            </div>
            <div class="mb-3">
              <label for="exampleInputText1" class="form-label">Descripción</label>
              <input type="text" class="form-control" id="exampleInputText1" aria-describedby="textHelp">
              <div id="textHelp" class="form-text"></div>
            </div>
            <div class="mb-3">
              <label for="exampleInputText1" class="form-label">Precio</label>
              <input type="number" class="form-control" id="exampleInputText1" aria-describedby="textHelp">
              <div id="textHelp" class="form-text"></div>
            </div>
            <div class="mb-3">
              <label for="exampleInputText1" class="form-label">Imagen</label>
              <input type="file" class="form-control" id="exampleInputText1" aria-describedby="textHelp">
              <div id="textHelp" class="form-text">We'll never share your texts with anyone else.</div>
            </div>

            <br>
            <button type="submit" class="btn btn-success"><i class="fa-solid fa-bowl-food"></i> Crear</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


<?php if(isset($_GET['msg'])){?>
 <script>
  var toast_msg = document.querySelector("#toast_msg");
  toast_msg.classList.add("show");
  setTimeout(() => {
    toast_msg.classList.remove("show");
  }, 3000);
</script> 
<?php }?>