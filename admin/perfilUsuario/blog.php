<?php
    require '../../includes/config/database.php';
    $db=conectarDB();
    require '../../includes/funciones.php';
    incluirTemplate('header');
?>
<link rel="stylesheet" href="../../cssa/bootstrap.min.css">
    <main class="contenedor seccion">
        <br>
        <h1>Crear Blog</h1>
        <br>
        <br><br>
<!-- inicio -->
<div class="col-md-4">
<div class="card">
                <div class="card-header">
                    Ingresar datos:
                </div>
                <?php  $iu=$_GET['cod']; ?>
                <form class="p-4" method="post" action="/espaciodeliteratura/admin/blog/registrarblog1.php?cod=<?php echo $iu; ?>"
        enctype="multipart/form-data">
                    <div class="mb-3">
                        <label class="form-label">Titulo: </label>
                        <input type="text" class="form-control" name="tit" id="tit" autofocus required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Contenido: </label>
                        <input type="text" class="form-control" name="con" id="con"autofocus required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Imagen: </label>
                        <input type="file" name="ima" id="ima" accept="image/jpeg, image/png, image/jpg">
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