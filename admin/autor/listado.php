<?php
    require '../../includes/config/database.php';
    $db=conectarDB();
    //var_dump($db);
    require '../../includes/funciones.php';
    incluirTemplate('header');
?>
<link rel="stylesheet" href="../../cssa/bootstrap.min.css">
    <main class="contenedor seccion">
        <br>
        <a href="/espaciodeliteratura/admin/autor/crear.php" class="btn btn-success">Nuevo Autor</a>
        <br><br>
        <h1> Listado de Autores </h1>
        <h3>
        <table class="table table-striped">
            <thead>
                <th> Nombre </th>
                <th> Paterno </th>
                <th> Materno </th>
                <th> Fecha de Nacimiento </th>
                <th> Género </th>
                <th colspan="2"> Acciones </th>
            </thad>
            <tbody>
                <?php
                    $consql=("SELECT * FROM autor");
                    $resultado=mysqli_query($db,$consql);
                    while($var=mysqli_fetch_array($resultado))
                    {
                ?>
                <tr>
                        <td><?php echo $var['nombre']; ?> </td>
                        <td><?php echo $var['paterno']; ?> </td>
                        <td><?php echo $var['materno']; ?> </td>
                        <td><?php echo $var['fechanacimiento']; ?> </td>
                        <td><?php echo $var['genero']; ?> </td>

                        <td><a href="/espaciodeliteratura/admin/perfilAutor/index.php?cod=<?php echo $var['idautor'];?>" class="btn btn-success">Tu perfil</a></td>
                        <td><a href="borrar.php?cod=<?php echo $var['idautor']; ?>"class="btn btn-danger">Eliminar</a></td>
                        <td><a href="actualizar.php?cod=<?php echo $var['idautor']; ?>"class="btn btn-info">Actualizar</a></td>
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