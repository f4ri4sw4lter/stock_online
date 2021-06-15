<?php
require_once 'app/views/head.php';
require_once 'app/views/menu.php';
?>
<div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Agregar Producto</h5>
            <form class="form-signin" method="post" enctype="multipart/form-data">
              <div class="form-label-group">
                <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre del producto" required autofocus>
                <label for="nombre">Nombre del producto</label>
              </div>

              <div class="form-label-group">
                <input type="number" id="precio" name="precio" class="form-control" placeholder="Precio" required >
                <label for="precio">Precio</label>
              </div>

              <div class="form-label-group">
                <input type="text" id="descripcion" name="descripcion" class="form-control" placeholder="Nombre del producto" required >
                <label for="descripcion">Descripcion</label>
              </div>

              <div class="form-label-group">
                <input type="text" id="categoria" name="categoria" class="form-control" placeholder="Categoria" required >
                <label for="categoria">Categoria</label>
              </div>

              <div class="mb-3">
                <label for="imagen" class="form-label">Imagen (450*300)</label>
                <input type="file" id="imagen" name="imagen" class="form-control" required >
              </div>

              <div class="mb-3">
                <label for="imagen_post" class="form-label">Imagen para el post (600*700)</label>
                <input type="file" id="imagen_post" name="imagen_post" class="form-control" required >
              </div>

              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Cargar</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php require_once 'app/views/footer.php'; ?>
</body>