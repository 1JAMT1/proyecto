<?php
    require '../../includes/config/database.php';
    $db=conectarDB();
    require '../../includes/funciones.php';
    incluirTemplate('header');
?>
<link rel="stylesheet" href="../../cssa/bootstrap.min.css">
<main class="contenedor seccion">
        <br>
        <h1>Publicar Libro</h1>
        <br>
        <br><br>
<!-- inicio -->
<div class="col-md-4">
<div class="card">
                <div class="card-header">
                    Ingresar datos:
                </div>
                <form class="p-4" method="post" action="/espaciodeliteratura/admin/libros/registrarlibro.php"
        enctype="multipart/form-data">
                    <div class="mb-3">
                        <label class="form-label">Titulo: </label>
                        <input type="text" class="form-control" name="tit" id="tit" placeholder="Titulo" autofocus required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Contenido: </label>
                        <input type="text" class="form-control" name="con" id="con"placeholder="Contenido" autofocus required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Fecha de Creación: </label>
                        <input type="date" class="form-control" name="fec" id=  autofocus required>
                    </div>
                    <div class="mb-3">
                        <label for="form-label">Genero: </label>
                        <input type="text" class="form-control" name="gen" id="gen" placeholder="Genero" autofocus required>
                    </div>
                    <div>
                        <label for="">Precio:</label>
                        <input type="decimal" class="form-control" name="pre" id="pre" placeholder="Precio">
                    </div>
                    <div>
                        <label for="">Cantidad:</label>
                        <input type="text"  class="form-control"name="cant" id="cant" placeholder="Cantidad">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Portada: </label>
                        <input type="file" class="form-control" name="ima" id="ima" accept="image/jpeg, image/png, image/jpg">
                    </div>

                    <div class="d-grid">
                        <input type="submit" class="btn btn-primary" value="Registrar Blog">
                    </div>
                </form>
            </div>
        </div>
<!-- fin -->
    </main>

    <script src="../../jsa/bootstrap.min.js" ></script>
<?php
    incluirTemplate('footer');
?>