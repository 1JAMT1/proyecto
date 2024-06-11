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
    //var_dump($db);
    require '../../includes/funciones.php';
    incluirTemplate('header');
?>
<link rel="stylesheet" href="../../cssa/bootstrap.min.css">
    <main class="contenedor seccion">
        <br>
        <h1>Eliminar</h1>
        <br>
        <a href="/espaciodeliteratura/admin/libros/listado.php" class="btn btn-success">Volver</a>
        <br><br>
        <?php
            $id=$_GET['cod'];
            $con="UPDATE libros SET estado='inactivo' 
            WHERE idlibro = $id";
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