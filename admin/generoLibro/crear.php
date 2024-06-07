<?php
//inicio seguridad
session_start();
$auth=$_SESSION['login'];
if(!$auth){
    header('Location:/espaciodeliteratura');
}
//fin de seguridad
    require '../../includes/config/database.php';
    $db=conectarDB();
    require '../../includes/funciones.php';
    incluirTemplate('header');
?>
<link rel="stylesheet" href="../../cssa/bootstrap.min.css">
    <main class="contenedor seccion">
        <br>
        <h1>Crear Editorial</h1>
        <br>
        <a href="/espaciodeliteratura/admin/generoLibro/listado.php" class="btn btn-success">Volver</a>
        <br><br>
        <form method="post" action="/espaciodeliteratura/admin/generoLibro/registrarGenero.php" class="formulario">
            <fieldset>
                <legend>Información General</legend>
                <label for="">Nombre de Genero:</label>
                <input type="text" name="nom" id="nom" placeholder="NombreEditorial">
            </fieldset>
            <br>
            <input type="submit" value="Regristar Genero" class="btn btn-success">
            <br><br>
        </form>
    </main>
    <script src="../../jsa/bootstrap.min.js" ></script>
<?php
    incluirTemplate('footer');
?>


