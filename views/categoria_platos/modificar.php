<!-- Modal - editar categoria -->
<form action="<?php echo 'index.php?c='.seg::codificar(" categoria_plato").'&m='.seg::codificar("modificar").'&_id'.$_id; ?>" method="post">
    <div class="mb-3">
        <input type="text" class="form-control" id="exampleInputText1" aria-describedby="textHelp" placeholder="Nuevo nombre" name="input_categoria_nombre">
        <div id="textHelp" class="form-text"></div>
        <br>
        <button type="submit" class="btn btn-primary">Aceptar</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
    </div>
</form>