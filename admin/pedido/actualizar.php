<?php 
    require '../../includes/config/database.php';
    $db=conectarDB();
    require '../../includes/funciones.php';
    incluirTemplate('header');
    $cod=$_GET['cod'];
    if(isset($_POST['Modificar']))
    {
        $int1=$_POST['idu'];
        $int2=$_POST['idl'];
        $date=$_POST['fec'];
        $con_sql="UPDATE pedido SET idusuario='$int1', idlibro='$int2', fechacompra='$date' WHERE idpedido='$cod'";
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
        <h1>Modificar Pedido</h1>
        <br>
        <a href="/espaciodeliteratura/admin/pedido/listado.php" class="btn btn-success">Volver</a>
        <br><br>
        <?php
            $consulta="SELECT * FROM pedido WHERE idpedido='$cod'";
            $res = mysqli_query($db,$consulta);
            while($fila=mysqli_fetch_array($res))
        {
        ?>
        <form action="actualizar.php?cod=<?php echo $fila['idpedido'];?>" method="post">
        <table class="table table-striped table-bordered table-hover">
            <tr>
                <td>IdUsuario</td>
                <td><input type="int" class="form-control" name="idu" id="idu" value="<?php echo $fila['idusuario']; ?> "></td>
            </tr>
            <tr>
                <td>IdLibro</td>
                <td><input type="int" class="form-control" name="idl" id="idl" value="<?php echo $fila['idlibro']; ?> "></td>
            </tr>
            <tr>
                <td>Fecha de Compra</td>
                <td><input type="date" class="form-control" name="fec" id="fec" value="<?php echo $fila['fechacompra']; ?> "></td>
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