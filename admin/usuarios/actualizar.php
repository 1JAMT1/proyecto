<?php 
    require '../../includes/config/database.php';
    $db=conectarDB();
    require '../../includes/funciones.php';
    incluirTemplate('header');
    $cod=$_GET['cod'];
    if(isset($_POST['Modificar']))
    {
        $var=$_POST['gma'];
        $tel=$_POST['tel'];
        $nick=$_POST['nick'];
        $nombre=$_POST['nom'];
        $paterno=$_POST['pat'];
        $materno=$_POST['mat'];
        $con_sql="UPDATE usuarios SET gmail='$var'
        ,nombre='$nombre', paterno='$paterno',materno='$materno', 
        telefono='$tel', nickname='$nick' WHERE idusuario='$cod'";
        $resm=mysqli_query($db,$con_sql);
        if($resm){
            echo "
            <script>
                window.alert('registro modificado con exito');
                window.location='/espaciodeliteratura/index.php';
            </script>
            ";
        }
    }
?>
<link rel="stylesheet" href="../../cssa/bootstrap.min.css">
    <main class="contenedor seccion">
        <br>
        <h1>Modificar Tu Perfil</h1>

        <?php
             $consulta="SELECT * FROM usuarios WHERE idusuario='$cod'";
            $res = mysqli_query($db,$consulta);
            while($fila=mysqli_fetch_array($res))
        {
        ?>
        <form action="actualizar.php?cod=<?php echo $fila['idusuario'];?>" method="post">
        <table class="table table-striped table-bordered table-hover">
            <tr>
                <td>Gmail</td>
                <td><input type="varchar" class="form-control" name="gma" id="gma" value="<?php echo $fila['gmail']; ?> "></td>
            </tr>
            <tr>
                <td>Telefono</td>
                <td><input type="number" class="form-control" name="tel" id="tel" value="<?php echo $fila['telefono']; ?>"></td>
            </tr>
            <tr>
                <td>Nickname</td>
                <td><input type="text" class="form-control" name="nick" id="nick" value="<?php echo $fila['nickname']; ?>"></td>
            </tr>
            <tr>
                <td>Nombre</td>
                <td><input type="text" class="form-control" name="nom" id="nom" value="<?php echo $fila['nombre']; ?>"></td>
            </tr>
            <tr>
                <td>Apellido Paterno</td>
                <td><input type="text" class="form-control" name="pat" id="pat" value="<?php echo $fila['paterno']; ?>"></td>
            </tr>
            <tr>
                <td>Apellido Materno</td>
                <td><input type="text" class="form-control" name="mat" id="mat" value="<?php echo $fila['materno']; ?>"></td>
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