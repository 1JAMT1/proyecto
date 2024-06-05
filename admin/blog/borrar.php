<?php
//inicio seguridad
session_start();
$auth=$_SESSION['login'];
if(!$auth){
    header('Location:/espaciodeliteratura');
}
//fin de seguridad
    if(!isset($_SESSION)){
        session_start();
    }
    $rol=$_SESSION['rol'];
    $idu=$_SESSION['idUsuario'];
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

        <a <?php if ($rol == 'admin') {; ?>
                    href="/espaciodeliteratura/BASEDEDATOS.php"
                <?php }; ?>
                <?php
                if($rol=='usuario'){; ?>
                    href="/espaciodeliteratura/admin/perfilUsuario/index.php?cod=<?php echo $idu;?>"
                <?php
                };?>
                <?php 
                if($rol=='autor'){; ?>
                    href="/espaciodeliteratura/admin/perfilAutor/index.php?cod=<?php echo $idu;?>"
                <?php
                }; ?>
        class="btn btn-success">Volver</a>
        <br><br>
        <?php
            $id=$_GET['cod'];
            $con="DELETE FROM blog WHERE idblog = $id";
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