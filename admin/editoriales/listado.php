<?php
    require '../../includes/config/database.php';
    $db=conectarDB();
    require '../../includes/funciones.php';
    incluirTemplate('header');
?>
<link rel="stylesheet" href="../../cssa/bootstrap.min.css">
    <main class="contenedor seccion">
        <br>
        <a href="/espaciodeliteratura/admin/editoriales/crear.php" class="btn btn-success">Nueva Editorial</a>
        <br><br>
        <h1> Listado de Editoriales </h1>
        <h3>
        <table class="table table-striped">
            <thead>
                <th> Nombre de Editorial </th>
                <th colspan="2"> Acciones </th>
            </thad>
            <tbody>
                <?php
                    $consql=("SELECT * FROM editoriales");
                    $resultado=mysqli_query($db,$consql);
                    while($var=mysqli_fetch_array($resultado))
                    {
                ?>
                <tr>
                        <td><?php echo $var['nombreEditorial']; ?> </td>
                        <td><a href="borrar.php?cod=<?php echo $var['idEditorial']; ?>"class="btn btn-danger">Eliminar</a></td>
                        <td><a href="actualizar.php?cod=<?php echo $var['idEditorial']; ?>"class="btn btn-info">Actualizar</a></td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
        <a href="/espaciodeliteratura/BASEDEDATOS.php" class="btn btn-warning">Volver</a>
<?php
incluirTemplate('footer');
?>