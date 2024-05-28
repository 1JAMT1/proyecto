<?php
    require '../../includes/config/database.php';
    conectarDB();
    require '../../includes/funciones.php';
    incluirTemplate('header');
?>
<link rel="stylesheet" href="../../cssa/bootstrap.min.css">
    <main class="contenedor seccion">
        <br>
        <h1>Crear Autor</h1>
        <br>
        <a href="/espaciodeliteratura/admin/autor/listado.php" class="btn btn-success">Volver</a>
        <br><br>
        <form method="post" action="/espaciodeliteratura/admin/autor/registrarautor.php" class="formulario">
            <fieldset>
                <legend>Información General</legend>
                <label for="">Nombre:</label>
                <input type="text" name="nom" id="nom" placeholder="Nombre">
                <label for="">Paterno:</label>
                <input type="text" name="pat" id="pat" placeholder="Paterno">
                <label for="">Materno:</label>
                <input type="text" name="mat" id="mat" placeholder="Materno">
                <label for="">Fecha de Nacimiento:</label>
                <input type="date" name="fec" id="fec" placeholder="Fechanacimiento">
                <label for="">Género:</label>
                <input type="text" name="gen" id="gen" placeholder="Genero">
                <input type="text">
            </fieldset>
            <br>
            <input type="submit" value="Regristar Autor" class="btn btn-success">
            <br><br>
        </form>
    </main>
    <script src="../../jsa/bootstrap.min.js" ></script>
<?php
    incluirTemplate('footer');
?>