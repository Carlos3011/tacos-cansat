<!-- Agrega el CDN de Bootstrap si este archivo se usa de forma independiente -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header bg-success text-white">
          <h2 class="mb-0">Agregar Taco</h2>
        </div>
        <div class="card-body">
          <form method="POST" action="index.php?accion=store" enctype="multipart/form-data">
            <div class="mb-3">
              <label class="form-label">Nombre</label>
              <input type="text" class="form-control" name="nombre" placeholder="Nombre" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Descripción</label>
              <textarea class="form-control" name="descripcion" placeholder="Descripción"></textarea>
            </div>
            <div class="mb-3">
              <label class="form-label">Precio</label>
              <input type="number" step="0.01" class="form-control" name="precio" placeholder="Precio" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Imagen (Archivo)</label>
              <input type="file" class="form-control" name="imagen_file" accept="image/*">
            </div>
            <div class="mb-3">
              <label class="form-label">Imagen (URL)</label>
              <input type="text" class="form-control" name="imagen_url" placeholder="URL de la imagen">
            </div>
            <button type="submit" class="btn btn-success w-100">Guardar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>