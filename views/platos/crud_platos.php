

<a class="btn btn-primary mb-4 text-white mt-4"data-toggle="modal" data-target="#exampleModal1"><i class="fa-solid fa-plus"></i>
        Agregar Plato</a>

<table class="table">
    <thead>
        <tr>
            <th scope="col">Nombre del plato</th>
            <th scope="col">Descripción</th>
            <th scope="col">Precio</th>
            <th scope="col">Foto</th>
            <th scope="col">Creación</th>
            <th scope="col">Actualización</th>
            <th scope="col" colspan="2">Acciones</th>
        </tr>
    </thead>
    <tbody>
    <?php if(isset($resultado)){?>
      <?php foreach($resultado as $p){?>
        <tr>
            <td><?php echo $p['nombre_plato'];?></td>
            <td class="w-25"><?php echo $p['descripcion_plato'];?></td>
            <td class="w-25"><?php echo $p['precio_plato'];?></td>
            <td>
                <img src="<?php echo 'uploads/'.$p['foto_plato'];?>" style="width: 100px; height: 100px;" alt="https://upload.wikimedia.org/wikipedia/commons/thumb/6/62/NCI_Visuals_Food_Hamburger.jpg/640px-NCI_Visuals_Food_Hamburger.jpg">
            </td>
            <td><?php echo $p['fecha_creacion'];?></td>
            <td><?php echo $p['fecha_actualizacion'];?></td>
            <td><a href="<?php echo 'index.php?c='.seg::codificar("plato").'&m='.seg::codificar("modificar").'&_id='.$p['_id']; ?>" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal5">Editar</a></td>
            <td><a href="<?php echo 'index.php?c='.seg::codificar("plato").'&m='.seg::codificar("eliminar").'&_id='.$p['_id']; ?>" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal6">Eliminar</a></td>
        </tr>
      <?php }} ?>
    </tbody>
</table>


<!-- Modal - editar plato -->
<div class="modal fade" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModalLabel5" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header bg-success">
          <h1 class="modal-title fs-5 text-white" id="exampleModalLabel"><i class="fa-solid fa-utensils"></i> Editar plato</h1>
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
                    <div id="textHelp" class="form-text"></div>
                </div>
                
                <br>
                <button type="submit" class="btn btn-success"><i class="fa-solid fa-bowl-food"></i> Aceptar</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>



  <!-- Modal - eliminar plato -->
  <div class="modal fade" id="exampleModal6" tabindex="-1" aria-labelledby="exampleModalLabel6" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header bg-danger">
            <h1 class="modal-title fs-5 text-white" id="exampleModalLabel">¿Desea eliminar el plato @Null?</h1>
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



<!-- Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h1 class="modal-title fs-5 text-white" id="exampleModalLabel"><i class="fa-solid fa-utensils"></i> Nuevo plato
        </h1>
        <button type="button" class="btn-close btn-close-white text-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?php echo 'index.php?c='.seg::codificar("plato").'&m='.seg::codificar("insertar")?>" method="post">
          <div class="mb-3">
            <div class="mb-3">
              <label for="exampleInputText1" class="form-label">Nombre</label>
              <input type="text" class="form-control" id="" aria-describedby="textHelp" name="txtNombre">
              <div id="textHelp" class="form-text"></div>
            </div>
            <div class="mb-3">
              <label for="exampleInputText1" class="form-label">Descripción</label>
              <input type="text" class="form-control" id="exampleInputText1" aria-describedby="textHelp" name="txtDescripcion">
              <div id="textHelp" class="form-text"></div>
            </div>
            <div class="mb-3">
              <label for="exampleInputText1" class="form-label">Precio</label>
              <input type="number" class="form-control" id="exampleInputText1" aria-describedby="textHelp" name="txtPrecio">
              <div id="textHelp" class="form-text"></div>
            </div>
            <select class="form-select" aria-label="Default select example" name="categoria">
            <?php if(isset($categorias)){?>
              <?php foreach($categorias as $c){?>
              <option selected>Open this select menu</option>
              <?php echo '<option value="'.$c['_id'].'">'.$c['nombre_categoria'].'</option>';?>
              <?php }}?>
            </select>
            <div class="mb-3">
              <label for="exampleInputText1" class="form-label">Imagen</label>
              <input type="file" class="form-control" id="exampleInputText1" aria-describedby="textHelp" name="txtFoto" size="50">
              <div id="textHelp" class="form-text"></div>
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