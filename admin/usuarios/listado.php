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
    incluirTemplate('header',$inicio=true);
?>

<link rel="stylesheet" href="../../cssa/bootstrap.min.css">
    <main class="contenedor seccion">
        <br>
        <a href="/espaciodeliteratura/admin/usuarios/crear.php" class="btn btn-success">Nuevo Usuario</a>
        <br><br>
        <h1> Listado de Usuarios </h1>
        <h3>
        <table class="table table-striped">
            <thead>
                <th> NickName </th>
                <th> Gmail </th>
                <th> Imagen</th>
                <th> Telefono</th>
                <th colspan="2"> Acciones </th>
            </thad>
            <tbody>
                <?php
                    $consql=("SELECT * FROM usuarios");
                    $resultado=mysqli_query($db,$consql);
                    while($var=mysqli_fetch_array($resultado))
                    {
                ?>
                <tr>
                        <td><?php echo $var['nickname']; ?></td>
                        <td><?php echo $var['gmail']; ?> </td>
                        <!-- inicio de imagen  -->
                        <td>
                             <img src="imagenes/<?php echo $var['imagenUsuario']; ?>" 
                             style="max-width: 100px; max-height: 100px;">
                        </td>

                        <!-- fin de imagen -->
                        <td><?php echo $var['telefono']; ?> </td>
                        <!-- inicio pruba -->
                        <!-- fin prueba --->
                        <?php ?>
                        <td><a href="borrar.php?cod=<?php echo $var['idusuario']; ?>"class="btn btn-danger">Eliminar</a></td>
                        <td><a href="actualizar.php?cod=<?php echo $var['idusuario']; ?>"class="btn btn-info">Actualizar</a></td>
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