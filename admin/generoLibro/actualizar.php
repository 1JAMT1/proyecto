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
        $text1=$_POST['nom'];
        $con_sql="UPDATE generolibros
        SET nombreGenero='$text1' WHERE idGenero='$cod'";
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
        <h1>Modificar Editorial</h1>
        <br>
        <a href="/espaciodeliteratura/admin/generoLibro/listado.php" class="btn btn-success">Volver</a>
        <br><br>
        <?php
            $consulta="SELECT * FROM generolibros WHERE idGenero='$cod'";
            $res = mysqli_query($db,$consulta);
            while($fila=mysqli_fetch_array($res))
        {
        ?>
        <form action="actualizar.php?cod=<?php echo $fila['idGenero'];?>" method="post">
        <table class="table table-striped table-bordered table-hover">
            <tr>
                <td>Nombre Genero</td>
                <td><input type="text" class="form-control" name="nom" id="nom" value="<?php echo $fila['nombreGenero']; ?> "></td>
            </tr>
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