<?php 
    require '../../includes/config/database.php';
    $db=conectarDB();
    require '../../includes/funciones.php';
    incluirTemplate('header');
    $cod=$_GET['cod'];
    if(isset($_POST['Modificar']))
    {
        $text1=$_POST['nom'];
        $text2=$_POST['pat'];
        $text3=$_POST['mat'];
        $text4=$_POST['gen'];
        $date=$_POST['fec'];
        $con_sql="UPDATE autor SET nombre='$text1', paterno='$text2', materno='$text3', fechanacimiento='$date', genero='$text4' WHERE idautor='$cod'";
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
        <h1>Modificar Autor</h1>
        <br>
        <a href="/espaciodeliteratura/admin/autor/listado.php" class="btn btn-success">Volver</a>
        <br><br>
        <?php
             $consulta="SELECT * FROM autor WHERE idautor='$cod'";
            $res = mysqli_query($db,$consulta);
            while($fila=mysqli_fetch_array($res))
        {
        ?>
        <form action="actualizar.php?cod=<?php echo $fila['idautor'];?>" method="post">
        <table class="table table-striped table-bordered table-hover">
            <tr>
                <td>Nombre</td>
                <td><input type="text" class="form-control" name="nom" id="nom" value="<?php echo $fila['nombre']; ?> "></td>
            </tr>
            <tr>
                <td>Paterno</td>
                <td><input type="text" class="form-control" name="pat" id="pat" value="<?php echo $fila['paterno']; ?> "></td>
            </tr>
            <tr>
                <td>Materno</td>
                <td><input type="text" class="form-control" name="mat" id="mat" value="<?php echo $fila['materno']; ?> "></td>
            </tr>
            <tr>
                <td>Fecha de Nacimiento</td>
                <td><input type="date" class="form-control" name="fec" id="fec" value="<?php echo $fila['fechanacimiento']; ?> "></td>
            </tr>
            <tr>
                <td>Género</td>
                <td><input type="text" class="form-control" name="gen" id="gen" value="<?php echo $fila['genero']; ?> "></td>
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