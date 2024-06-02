<?php
    require '../../includes/config/database.php';
    conectarDB();
    require '../../includes/funciones.php';
    incluirTemplate('header');
?>
<link rel="stylesheet" href="../../cssa/bootstrap.min.css">
<div class="col-md-4">
<div class="card">
                <div class="card-header">
                    Ingresar datos:
                </div>
                <form class="p-4" method="post" action="/espaciodeliteratura/admin/autor/registrarautor.php"
        enctype="multipart/form-data">
                    <div class="mb-3">
                        <label class="form-label">Nombre: </label>
                        <input type="text" class="form-control" name="nom" id="nom" autofocus required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Paterno: </label>
                        <input type="text" class="form-control" name="pat" id="pat"autofocus required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Materno: </label>
                        <input type="text" class="form-control" name="mat" id="mat"autofocus required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Genero: </label>
                        <input type="text" class="form-control" name="gen" id="gen"autofocus required>
                    </div>
                    <div class="mb-3">
                    <label class="form-label">Fecha de Nacimiento: </label>
                        <input type="date" class="form-control" name="fec" id="fec" autofocus required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Contraseña: </label>
                        <input type="password" class="form-control" name="pass" id="pass"autofocus required>
                    </div>
                    <div class="d-grid">
                        <input type="submit" class="btn btn-primary" value="Registrar Autor">
                    </div>
                </form>
            </div>
        </div>
    <script src="../../jsa/bootstrap.min.js" ></script>
<?php
    incluirTemplate('footer');
?>