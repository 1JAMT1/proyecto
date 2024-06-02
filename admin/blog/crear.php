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
        <a href="/espaciodeliteratura/admin/blog/listado.php" class="btn btn-success">Volver</a>
        <br><br>
        <form method="post" action="/espaciodeliteratura/admin/blog/registrarblog.php" class="formulario"
        enctype="multipart/form-data">
            <fieldset>
                <legend>Información General</legend>
                <label for="">Título:</label>
                <input type="text" name="tit" id="tit" placeholder="Titulo">
                <label for="">Contenido:</label>
                <input type="text" name="con" id="con" placeholder="Contenido">
                <!-- inicio imagen -->
                <label for="">Imagen:</label>
                <input type="file" name="ima" id="ima" accept="image/jpeg, image/png, image/jpg">
                <!-- fin imagen -->
                <label for="">Escrito por : </label>
                <!-- inicio de autor del blog -->
                <select name="idu" id="idu">
                    <?php
                    $con_sql='SELECT * FROM usuarios';
                    $res=mysqli_query($db,$con_sql);
                    while($reg=$res->fetch_assoc())
                    {
                    ?>
                    <option value="<?php echo $reg['idusuario']; ?>">
                        <?php echo $reg['nickname']; ?>
                    </option>
                    <?php 
                         } 
                    ?>
                </select>
                <!-- fin de autor del blog -->
            </fieldset>
            <br>
            <input type="submit" value="Regristar Blog" class="btn btn-success">
            <br><br>
        </form>
    </main>
    <script src="../../jsa/bootstrap.min.js" ></script>
<?php
    incluirTemplate('footer');
?>