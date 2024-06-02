<?php 
    require '../../includes/config/database.php';
    $db=conectarDB();
    require '../../includes/funciones.php';
    incluirTemplate('header');
    $cod=$_GET['cod'];
    if(isset($_POST['Modificar']))
    {
        $text1=$_POST['tit'];
        $int=$_POST['ida'];
        $date=$_POST['fec'];
        $text2=$_POST['gen'];
        $varchar1=$_POST['por'];
        $decimal=$_POST['pre'];
        $varchar2=$_POST['est'];
        $text3=$_POST['des'];
        $varchar3=$_POST['edi'];
        $con_sql="UPDATE libros SET titulo='$text1', idautor='$int', fechacreacion='$date', genero='$text2', portada='$varchar1', precio='$decimal', estado='$varchar2', descripcion='$text3', editorial='$varchar3' WHERE idlibro='$cod'";
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
        <h1>Modificar Libro</h1>
        <br>
        <a href="/espaciodeliteratura/admin/libros/listado.php" class="btn btn-success">Volver</a>
        <br><br>
        <?php
             $consulta="SELECT * FROM libros WHERE idlibro='$cod'";
            $res = mysqli_query($db,$consulta);
            while($fila=mysqli_fetch_array($res))
        {
        ?>
        <form action="actualizar.php?cod=<?php echo $fila['idlibro'];?>" method="post">
        <table class="table table-striped table-bordered table-hover">
            <tr>
                <td>Título</td>
                <td><input type="text" class="form-control" name="tit" id="tit" value="<?php echo $fila['titulo']; ?> "></td>
            </tr>
            <tr>
                <td>IdAutor</td>
                <td><input type="int" class="form-control" name="ida" id="ida" value="<?php echo $fila['idautor']; ?> "></td>
            </tr>
            <tr>
                <td>Fecha de Creación</td>
                <td><input type="date" class="form-control" name="fec" id="fec" value="<?php echo $fila['fechacreacion']; ?> "></td>
            </tr>
            <tr>
                <td>Género</td>
                <td><input type="text" class="form-control" name="gen" id="gen" value="<?php echo $fila['generoLibro']; ?> "></td>
            </tr>
            <tr>
                <td>Portada</td>
                <td><input type="varchar" class="form-control" name="por" id="por" value="<?php echo $fila['portada']; ?> "></td>
            </tr>
            <tr>
                <td>Precio</td>
                <td><input type="decimal" class="form-control" name="pre" id="pre" value="<?php echo $fila['precio']; ?> "></td>
            </tr>
            <tr>
                <td>Estado</td>
                <td><input type="varchar" class="form-control" name="est" id="est" value="<?php echo $fila['estado']; ?> "></td>
            </tr>
            <tr>
                <td>Descripción</td>
                <td><input type="text" class="form-control" name="des" id="des" value="<?php echo $fila['descripcion']; ?> "></td>
            </tr>
            <tr>
                <td>Editorial</td>
                <td><input type="varchar" class="form-control" name="edi" id="edi" value="<?php echo $fila['editorial']; ?> "></td>
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