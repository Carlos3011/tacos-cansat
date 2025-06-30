<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">

    <title>Tacos de Canasta</title>
</head>

<body>

    <div class="d-flex flex-column vh-100 justify-content-center px-4 py-5 text-center ">
        <img class="d-block mx-auto mb-4" src="https://1.bp.blogspot.com/-W66uSwINIOw/X2zyNW32kXI/AAAAAAAAajA/J6nR9QbDNUQB1SeJlJUZ2GQhewzQObHzACLcBGAsYHQ/w1200-h630-p-k-no-nu/IMG_2209.jpg" alt="taco" width="200" height="150">
        <h1 class="display-5 fw-bold text-body-emphasis">Taqueria tacomiendo</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">Tacos de canasta y más</p>

        </div>
        <a href="#tacos1" class="mx-auto btn btn-warning btn-lg px-4 gap-3">Tacos</a>
    </div>




    <div class="vh-100 text-center mt-2" id="tacos1">
        <h1 class="display-5 fw-bold text-body-emphasis ">Nuestros Tacos</h1>
        <!-- Botón -->
        <button type="button" class="my-4  btn btn-warning " data-bs-toggle="modal" data-bs-target="#modalFormulario">
            Agregar taco
        </button>

        <!-- Modal vacío -->
        <div class="modal fade" id="modalFormulario" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content" id="contenido-del-modal">
                    <!-- Aquí se cargará el formulario -->
                </div>
            </div>
        </div>

        <!-- <a href="index.php?accion=create">Agregar Taco</a>-->


        <!-- Modal reutilizable -->
        <div class="modal fade" id="modalEditar" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content" id="contenidoEditar">
                    <!-- Aquí se inyectará el formulario -->
                </div>
            </div>
        </div>


        <div class="album py-5 bg-body-tertiary">
            <div class="container text-">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <?php while ($row = $tacos->fetch_assoc()): //Se ocupa dos puntos de ahuevo hermano 
                    ?>
                        <div class="col text-start">
                            <div class="card shadow-sm"> <svg aria-label="Placeholder: Thumbnail" class="bd-placeholder-img card-img-top" height="225" preserveAspectRatio="xMidYMid slice" role="img" width="100%" xmlns="http://www.w3.org/2000/svg">
                                    <title>Placeholder</title>
                                    <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Taquillo</text>
                                </svg>

                                <div class="card-body">
                                    <span class="d-flex flex-row justify-content-between">
                                        <h5><?= $row["nombre"] ?></h5>
                                        <h3>$<?= $row["precio"] ?></h3>
                                    </span>


                                    <p class="card-text mb-4"><?= $row["descripcion"] ?></p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">

                                            
                                            <button class="btn btn-outline-warning "
                                                data-bs-toggle="modal"
                                                data-bs-target="#modalEditar"
                                                data-id="<?= $row['id'] ?>">
                                                Editar
                                            </button>
                                            <a type="button" class="btn btn-light   btn-outline-danger" href="index.php?accion=delete&id=<?php echo $row["id"]  ?>" onclick="return confirm('Quieres eliminar este taco?') //Esto es JS">Eliminar</a>

                                        </div>
                                        <small class="text-body-secondary">
                                            <?= $row["disponibilidad"] ? "Disponible" : "No disponible" ?>
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php endwhile; ?>
                </div>
            </div>
        </div>



        <!---
                    <table>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Precio</th>
            <th>Disponibilidad</th>
            <th>Acciones</th>

            <?php //while ($row = $tacos->fetch_assoc()): //Se ocupa dos puntos de ahuevo hermano 
            ?>
                <tr>
                    <td><? //= $row["nombre"] 
                        ?></td>
                    <td><? //= $row["descripcion"] 
                        ?></td>
                    <td><? //= $row["precio"] 
                        ?></td>
                    <td><? //= $row["disponibilidad"] ? "Si" : "No" 
                        ?></td>
                    <td>
                        <a href="index.php?accion=edit&id=<?php //echo $row["id"] 
                                                            ?>">Editar</a>
                        <a href="index.php?accion=delete&id=<? // echo $row["id"]  
                                                            ?>" onclick="return confirm('Quieres eliminar este taco?') //Esto es JS">Eliminar</a>
                    </td>
                </tr>
            <?php //endwhile; 
            ?>
        </table>
        
                -->

    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var modal = document.getElementById('modalFormulario');
            modal.addEventListener('show.bs.modal', function() {
                fetch("index.php?accion=create")
                    .then(response => response.text())
                    .then(html => {
                        document.getElementById("contenido-del-modal").innerHTML = html;
                    });
            });
        });


        document.addEventListener("DOMContentLoaded", function() {
            const modalEditar = document.getElementById('modalEditar');

            modalEditar.addEventListener('show.bs.modal', function(event) {
                const boton = event.relatedTarget;
                const id = boton.getAttribute('data-id');

                fetch("index.php?accion=edit&id=" + id)
                    .then(response => response.text())
                    .then(html => {
                        document.getElementById("contenidoEditar").innerHTML = html;
                    });
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>

</html>