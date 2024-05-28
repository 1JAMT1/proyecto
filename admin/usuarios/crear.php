<?php
    require '../../includes/config/database.php';
    conectarDB();
    require '../../includes/funciones.php';
    incluirTemplate('header');
?>
<link rel="stylesheet" href="../../cssa/bootstrap.min.css">
    <main class="contenedor seccion">
        <br>
        <h1>Crear Usuario</h1>
        <br>
        <a href="/espaciodeliteratura/admin/usuarios/listado.php" class="btn btn-success">Volver</a>
        <br><br>
        <form method="post" action="/espaciodeliteratura/admin/usuarios/registrarusuario.php" class="formulario"
        enctype="multipart/form-data">
            <fieldset>
                <legend>Información General</legend>
                <label for="">NickName</label>
                <input type="text" name="nick" id="nick" placeholder="Tu nickname">
                <label for="">Gmail:</label>
                <input type="varchar" name="gma" id="gma" placeholder="Gmail">
                <label for="">Imagen</label>
                <input type="file" name="ima" id="ima" accept="image/jpeg, image/png, image/jpg">
                <label for="">Telefono</label>
                <input type="number" name="num" id="num">
                <label for="">Contraseña:</label>
                <input type="varchar" name="pas" id="pas" placeholder="Password">
                <label for="">Rol</label>
                <input type="text" name="rol" id="rol">
            </fieldset>
            <br>
            <input type="submit" value="Regristar Usuario" class="btn btn-success">
            <br><br>
        </form>
    </main>
    <script src="../../jsa/bootstrap.min.js" ></script>
<?php
    incluirTemplate('footer');
?>