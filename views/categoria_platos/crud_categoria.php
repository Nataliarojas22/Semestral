<?php require_once "views/template/header_0.php" ?>

<div class="row mx-3">
  <div class="col-12">
    <h1 class="text-center">Editar Categorías</h1>

      <a class="btn btn-primary mb-4 text-white mt-4" data-toggle="modal" data-target="#exampleModal"><i class="fa-solid fa-plus"></i>
        Agregar categoría</a>
    <table class="table w-100 mb-5">
      <thead>
        <tr>
          <th scope="col">Nombre</th>
          <th scope="col">Creación</th>
          <th scope="col">Modificación</th>
          <th scope="col" colspan="3">Acciones</th>
        </tr>
      </thead>
      <tbody>
        <?php if (isset($resultado)) {?>
        <?php foreach ($resultado as $r) { ?>
        <tr>
          <td>
            <?php echo $r["nombre_categoria"]; ?>
          </td>
          <td>
            <?php echo $r["fecha_creacion"]; ?>
          </td>
          <td>
            <?php echo $r["fecha_actualizacion"]; ?>
          </td>
          <td>
            <a class="btn btn-warning" data-bs-target="#exampleModal2" href="<?php echo 'index.php?c='.seg::codificar("plato_categoria").'&m='.seg::codificar("mostrar_modificar").'&_id='.$r['_id']; ?>;">>Editar
          </td>
          <td>
            <a class="btn btn-danger" href="<?php echo 'index.php?c='.seg::codificar("plato_categoria").'&m='.seg::codificar("eliminar").'&_id='.$r['_id']; ?>;">Eliminar
          </td>
        </tr>
        <?php } ?>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>


<?php if (isset($_GET['msg'])) { ?>
<script>
  var toast_msg = document.querySelector("#toast_msg");
  toast_msg.classList.add("show");
  setTimeout(() => {
    toast_msg.classList.remove("show");
  }, 3000);
</script>
<?php } ?>

<!-- Toast msg -->
<div class="toast align-items-center text-bg-primary border-0 fade mt-5" role="alert" aria-live="assertive"
  aria-atomic="true" id="toast_msg" style="margin-top: 0; position:absolute;">
  <div class="d-flex">
    <div class="toast-body">
      <?php echo isset($_GET['msg']) ? $_GET['msg'] : ""; ?>
    </div>
    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
      aria-label="Close"></button>
  </div>
</div>



<!-- Modal - crear categoria
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header bg-dark">
        <h1 class="modal-title fs-5 text-white" id="exampleModalLabel">Nueva categoría</h1>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?php echo 'index.php?c=' . seg::codificar(" categoria_plato") . '&m=' .
          seg::codificar("insertar") . '&_id=' ; ?>" method="post">
          <div class="mb-3">
            <input type="text" class="form-control" id="exampleInputText1" aria-describedby="textHelp"
              placeholder="Ingrese el nombre" name="input_categoria_nombre">
            <div id="textHelp" class="form-text text-warning">
              <?php echo isset($error[0]) ? $error[0] : ""; ?>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Crear</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div> -->



<!-- Modal - editar categoria -->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header bg-dark">
        <h1 class="modal-title fs-5 text-white" id="exampleModalLabel">Editar categoría</h1>
        <button type="button" class="btn-close btn-close-white text-white" data-bs-dismiss="modal"
          aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?php echo 'index.php?c=' . seg::codificar(" categoria_plato") . '&m=' .
          seg::codificar("modificar"); ?>" method="post">
          <div class="mb-3">
            <input type="text" class="form-control" id="exampleInputText1" aria-describedby="textHelp"
              placeholder="Nuevo nombre" name="input_categoria_nombre">
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
        <h1 class="modal-title fs-5 text-white" id="exampleModalLabel">¿Desea eliminar esta categoría?</h1>
        <button type="button" class="btn-close btn-close-white text-white" data-bs-dismiss="modal"
          aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?php echo 'index.php?c=' . seg::codificar(" categoria_plato") . '&m=' .
          seg::codificar("eliminar"); ?>" method="post">
          <div class="mb-3">
            <div id="textHelp" class="form-text"></div>
            <br>
            <button type="submit" class="btn btn-danger">Aceptar</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header bg-dark">
        <h1 class="modal-title fs-5 text-white" id="exampleModalLabel">Nueva categoría</h1>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?php echo 'index.php?c=' . seg::codificar(" categoria_plato") . '&m=' .
          seg::codificar("insertar") . '&_id=' ; ?>" method="post">
          <div class="mb-3">
            <input type="text" class="form-control" id="exampleInputText1" aria-describedby="textHelp"
              placeholder="Ingrese el nombre" name="input_categoria_nombre">
            <div id="textHelp" class="form-text text-warning">
              <?php echo isset($error[0]) ? $error[0] : ""; ?>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Crear</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>