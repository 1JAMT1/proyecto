<?php
    require '../../includes/config/database.php';
    $db=conectarDB();
    require '../../includes/funciones.php';
    incluirTemplate('header');
?>
<link rel="stylesheet" href="../../cssa/bootstrap.min.css">
    <main class="contenedor seccion">
        <br>
        <h1>Crear Libro</h1>
        <br>
        <a href="/espaciodeliteratura/admin/libros/listado.php" class="btn btn-success">Volver</a>
        <br><br>
        <form method="post" action="/espaciodeliteratura/admin/libros/registrarlibro.php" class="formulario"
        enctype="multipart/form-data">
            <fieldset>
                <legend>Información General</legend>
                <label for="">Título:</label>
                <input type="text" name="tit" id="tit" placeholder="Titulo">
                <!--Fin autor -->
                <label for="">Fecha de Creación:</label>
                <input type="date" name="fec" id="fec" placeholder="Fechacreacion">
                <label for="">Género:</label>
                <input type="text" name="gen" id="gen" placeholder="Genero">
                <!-- inicio de portada -->
                    <label for="">Portada:</label>
                    <input type="file" name="por" id="por" accept="image/jpeg, image/png, image/jpg">
                <!-- fin de  portada -->
                <label for="">Precio:</label>
                <input type="decimal" name="pre" id="pre" placeholder="Precio">
                <label for="">Descripción:</label>
                <input type="text" name="des" id="des" placeholder="Descripcion">
            </fieldset>
            <!-- inicio editorial -->
            <label for="">Editorial:</label>

                <select name="idEd" id="idEd">
                        <?php
                        $con_sql='SELECT * FROM editoriales';
                        $res=mysqli_query($db,$con_sql);
                        while($reg=$res->fetch_assoc())
                        {
                        ?>
                        <option value="<?php echo $reg['idEditorial']; ?>">
                            <?php echo $reg['nombreEditorial']; ?>
                        </option>
                        <?php 
                            } 
                        ?>
                </select>
            <!-- fin editorial -->
            <fieldset>
                
            </fieldset>
            <fieldset>
            <!--Autor -->
            <label for="">Autor:</label>
                <!-- inicio autor -->
                <select name="ida" id="ida">
                    <?php
                    $con_sql="SELECT * FROM usuarios WHERE rolUsuario='autor'";
                    $res=mysqli_query($db,$con_sql);
                    while($reg=$res->fetch_assoc())
                    {
                    ?>
                    <option value="<?php echo $reg['idusuario']; ?>">
                        <?php echo $reg['nombre']." ".$reg['paterno']; ?>
                    </option>
                    <?php 
                         } 
                    ?>
                </select>
            <!-- fin autor -->
            </fieldset>
            <br>
            <input type="submit" value="Regristar Libro" class="btn btn-success">
            <br><br>
        </form>
    </main>
    <script src="../../jsa/bootstrap.min.js" ></script>
<?php
    incluirTemplate('footer');
?>