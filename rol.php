<?php
    require 'includes/config/database.php';
    require 'includes/funciones.php';
    incluirTemplate('header');
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<main>
    <br><br>
    <center><h1>Cual es su Rol</h1></center>
    <br>
    <center>
    <select name="tipo" id="tipo">
        <option value="a">Autor</option>
        <option value="b">Ususario</option>
    </select>
    <a href="../espaciodeliteratura/admin/usuarios/crear.php" class="btn btn-primary">Crear cuenta</a>
    <a href="../espaciodeliteratura/admin/usuarios/crear.php" class="btn btn-primary">Usuarios</a>
    <a href="../espaciodeliteratura/admin/autor/crear.php" class="btn btn-success">Autores</a>
    <a href="../espaciodeliteratura/admin/editoriales/crear.php" class="btn btn-danger">Editoriales</a>
    </center>
    <br><br>
</main>
<?php
    incluirTemplate('footer');
?>
<script
	src="https://kit.fontawesome.com/81581fb069.js"
></script>