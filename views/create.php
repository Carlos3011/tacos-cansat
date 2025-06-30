<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
<div class="container py-4 px-4">
    <h2 class="mb-5">Agregar Taco</h2>
    <form method="post" action="index.php?accion=store">
        <div class="form-floating">
            <input type="text" class="form-control" name="nombre" placeholder="Nombre" required>
            <label for="floatingPassword">Nombre</label>
        </div>
        <div class="form-floating">
            <textarea name="descripcion" class="form-control" placeholder="Descripcion"></textarea>
            <label for="floatingPassword">Descripcion</label>
        </div>
        <div class="form-floating">
            <input type="number" class="form-control" step="0.01" name="precio" placeholder="Precio" required>
            <label for="floatingPassword">$Precio</label>
        </div>
        <div class="form-check my-3 text-start">
             <input type="checkbox" class="form-check-input" name="disponibilidad" checked> 
            <label class="form-check-label" for="checkDefault">
                Disponible
            </label>
        </div>
        <div class="form-floating">
            <input type="text" name="imagen" class="form-control" placeholder="Ruta de imagen">
            <label for="floatingPassword">Imagen</label>
        </div>
        <input type="submit" class= " w-100 btn btn-warning " value="Guardar">
    </form>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>