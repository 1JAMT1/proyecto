<?php
    require '../../includes/config/database.php';
    $db=conectarDB();
    //var_dump($db);
    require '../../includes/funciones.php';
    incluirTemplate('header');
?>
<link rel="stylesheet" href="../../cssa/bootstrap.min.css">
    <main class="contenedor seccion">
        <br>
        <h1>Eliminar</h1>
        <br>
        <a href="/espaciodeliteratura/admin/editoriales/listado.php" class="btn btn-success">Volver</a>
        <br><br>
        <?php
            $id=$_GET['cod'];
            $con="DELETE FROM editoriales WHERE idEditorial = $id";
            $res=mysqli_query($db,$con);
            if($res){
                echo "Se Elimino";
            }
            else{
                echo "No se Elimino";
            }
        ?>
        <br><br>
    </main>
    <script src="../../jsa/bootstrap.min.js" ></script>
    <?php
    incluirTemplate('footer');
    ?>