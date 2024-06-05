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
        <a href="/espaciodeliteratura/admin/blog/crear.php" class="btn btn-success">Nuevo Blog</a>
        <br><br>
        <h1> Listado de Blogs </h1>
        <h3>
        <table class="table table-striped">
            <thead>
                <th> Titulo </th>
                <th> Contenido </th>
                <th> Imagen </th>
                <th> Escrito por  </th>
                <th colspan="2"> Acciones </th>
            </thad>
            <tbody>
                <?php
                    $consql=("SELECT p.*, v.* FROM blog
                    p INNER JOIN usuarios v ON 
                    p.idusuario=v.idusuario ");
                    $resultado=mysqli_query($db,$consql);
                    while($var=mysqli_fetch_array($resultado))
                    {
                ?>
                <tr>
                        <td><?php echo $var['titulo']; ?> </td>
                        <td><?php echo $var['contenido']; ?> </td>
                        <!-- inicio de imagen  -->
                        <td>
                            <img src="imagenes/<?php echo $var['imagen']; ?>" style="max-width: 100px; max-height: 100px;" >
                        </td>
                        <!-- fin de imagen -->
                        <!-- inicio usuario -->
                        <td><?php echo $var['nickname']; ?></td>
                        <!-- fin usuario -->
                        <td><a href="borrar.php?cod=<?php echo $var['idblog']; ?>"class="btn btn-danger">Eliminar</a></td>
                        <td><a href="actualizar.php?cod=<?php echo $var['idblog']; ?>"class="btn btn-info">Actualizar</a></td>
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