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
        <a href="/espaciodeliteratura/admin/libros/crear.php" class="btn btn-success">Nuevo Libro</a>
        <br><br>
        <h1> Listado de Libros </h1>
        <h3>
        <table class="table table-striped">
            <thead>
                <th> Título </th>
                <th> Fecha de Creación </th>
                <th> Género </th>
                <th> Portada </th>
                <th> Precio </th>
                <th> Descripción </th>
                <th> Editorial </th>
                <th> Cantidad </th>
                <th colspan="2"> Acciones </th>
            </thad>
            <tbody>
                <?php
                    $consql=("SELECT * FROM libros");
                    $resultado=mysqli_query($db,$consql);
                    while($var=mysqli_fetch_array($resultado))
                    {
                ?>
                <tr>
                        <td><?php echo $var['titulo']; ?> </td>
                        <td><?php echo $var['fechacreacion']; ?> </td>
                        <td><?php echo $var['generoLibro']; ?> </td>
                        <!-- inicio de imagen  -->
                        <td>
                            <img src="imagenes/<?php echo $var['portada']; ?>" style="max-width: 100px; max-height: 100px;" >
                        </td>
                        <!-- fin de imagen -->
                        <td><?php echo $var['precio']; ?> </td>
                        <td><?php echo $var['descripcion']; ?> </td>
                        <?php
                        $idEdiLib=$var['editorial'];
                        $con_sql="SELECT * FROM editoriales WHERE idEditorial='$idEdiLib'";
                        $resultado1=mysqli_query($db,$con_sql);
                        $editorial=mysqli_fetch_array($resultado1);
                        ?>
                        <td><?php echo $editorial['nombreEditorial']; ?> </td>
                        <td><a href="borrar.php?cod=<?php echo $var['idlibro']; ?>"class="btn btn-danger">Eliminar</a></td>
                        <td><a href="actualizar.php?cod=<?php echo $var['idlibro']; ?>"class="btn btn-info">Actualizar</a></td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>

        </h3>
        <a href="/espaciodeliteratura/BASEDEDATOS.php" class="btn btn-warning">Volver</a>
        <br><br>
    </main>
    <script src="../../jsa/bootstrap.min.js" ></script>
<?php
    incluirTemplate('footer');
?>