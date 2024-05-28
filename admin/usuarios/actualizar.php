<?php 
    require '../../includes/config/database.php';
    $db=conectarDB();
    require '../../includes/funciones.php';
    incluirTemplate('header');
    $cod=$_GET['cod'];
    if(isset($_POST['Modificar']))
    {
        $var=$_POST['gma'];
        $varchar=$_POST['pas'];
        $con_sql="UPDATE usuarios SET gmail='$var', password='$varchar' WHERE idusuario='$cod'";
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
        <h1>Modificar Usuario</h1>
        <br>
        <a href="/espaciodeliteratura/admin/usuarios/listado.php" class="btn btn-success">Volver</a>
        <br><br>
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
                <td>Password</td>
                <td><input type="varchar" class="form-control" name="pas" id="pas" value="<?php echo $fila['password']; ?> "></td>
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