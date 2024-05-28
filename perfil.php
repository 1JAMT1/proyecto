<?php
    // coneccion de base de datos
    require '../espaciodeliteratura/includes/config/database.php';
    $db=conectarDB();
    //header
    //require '../../includes/funciones.php';
    //incluirTemplate('header');
    //buscar usuario 
    require '../espaciodeliteratura/includes/funciones.php';
    incluirTemplate('header');
?>
<link rel="stylesheet" href="../../cssa/bootstrap.min.css">
<h1>Bienvenido a tu perfil : </h1>
<?php
    $cod=$_GET['cod'];
    $con_sql="SELECT * FROM usuarios WHERE idusuario=$cod";
    $res=mysqli_query($db,$con_sql);
    if ($res) {
        $row = mysqli_fetch_assoc($res);
    } else {
        echo "Error en la consulta: " . mysqli_error($db);
    }
?>
    <h2>Tu gmail es : <?php echo $row['gmail']; ?></h2>
    <!-- inicio de imagen  -->
    <td>
        <img src="../usuarios/imagenes/<?php echo $row['imagenUsuario']; ?>" >
    </td>
    <!-- fin de imagen -->
    <h2>Tu numero es : <?php echo $row['telefono']; ?></h2>
    <a href="/espaciodeliteratura/admin/usuarios/listado.php" class="btn btn-warning">Volver</a>
    <script src="../../jsa/bootstrap.min.js" ></script>
<?php
    //footer
    incluirTemplate('footer');
?>