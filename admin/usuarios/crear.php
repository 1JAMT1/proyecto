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
                <form class="p-4" method="post" action="/espaciodeliteratura/admin/usuarios/registrarusuario.php"
        enctype="multipart/form-data">
                    <div class="mb-3">
                        <label class="form-label">NickName: </label>
                        <input type="text" class="form-control" name="nick" id="nick" autofocus required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Correo: </label>
                        <input type="text" class="form-control" name="gma" id="gma"autofocus required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Telefono: </label>
                        <input type="number" class="form-control" name="num" id="num"autofocus required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Imagen: </label>
                        <input type="file" name="ima" id="ima" accept="image/jpeg, image/png, image/jpg">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Contraseña: </label>
                        <input type="password" class="form-control" name="pass" id="pass"autofocus required>
                    </div>
                    <div class="d-grid">
                        <input type="submit" class="btn btn-primary" value="Registrar Usuario">
                    </div>
                </form>
            </div>
        </div>

    <script src="../../jsa/bootstrap.min.js" ></script>
<?php
    incluirTemplate('footer');
?>