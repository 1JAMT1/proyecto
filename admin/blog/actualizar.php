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
    $cod=$_GET['cod'];
    if(isset($_POST['Modificar']))
    {
        $int=$_POST['idu'];
        $text1=$_POST['tit'];
        $text2=$_POST['con'];
        $varchar=$_POST['ima'];
        $con_sql="UPDATE blog SET idusuario='$int', titulo='$text1', contenido='$text2', imagen='$varchar' WHERE idblog='$cod'";
        $resm=mysqli_query($db,$con_sql);
        if($resm){
            echo "
            <script>
                window.alert('registro modificado con exito');
                window.location='listado.php';
            </script>
            ";
        }
    }
?>
<link rel="stylesheet" href="../../cssa/bootstrap.min.css">
    <main class="contenedor seccion">
        <br>
        <h1>Modificar Blog</h1>
        <br>
        <a href="/espaciodeliteratura/admin/blog/listado.php" class="btn btn-success">Volver</a>
        <br><br>
        <?php
             $consulta="SELECT * FROM blog WHERE idblog='$cod'";
            $res = mysqli_query($db,$consulta);
            while($fila=mysqli_fetch_array($res))
        {
        ?>
        <form action="actualizar.php?cod=<?php echo $fila['idblog'];?>" method="post">
        <table class="table table-striped table-bordered table-hover">
            <tr>
                <td>IdUsuario</td>
                <td><input type="int" class="form-control" name="idu" id="idu" value="<?php echo $fila['idusuario']; ?> "></td>
            </tr>
            <tr>
                <td>Titulo</td>
                <td><input type="text" class="form-control" name="tit" id="tit" value="<?php echo $fila['titulo']; ?> "></td>
            </tr>
            <tr>
                <td>Contenido</td>
                <td><input type="text" class="form-control" name="con" id="con" value="<?php echo $fila['contenido']; ?> "></td>
            </tr>
            <tr>
                <td>Imagen</td>
                <td><input type="varchar" class="form-control" name="ima" id="ima" value="<?php echo $fila['imagen']; ?> "></td>
            </tr>
            <tr>
            <td colspan="3">
                <div aling="center">
                    <input type="submit" name="Modificar" id="Modificar"
                    value="Modificar" class="btn btn-primary">
            </td>
            </tr>
        <?php
        }
        ?>
        </table>
        <br>
        </from>
    </main>
    <script src="../../jsa/bootstrap.min.js" ></script>
<!-- find de actualizar -->
<?php
    incluirTemplate('footer');
?>