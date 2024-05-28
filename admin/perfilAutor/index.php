<?php
    // coneccion de base de datos
    require '../../includes/config/database.php';
    $db=conectarDB();
    require '../../includes/funciones.php';
    incluirTemplate('header');
?>
<?php
$cod=$_GET['cod'];
$contador=1;
$con_sql="SELECT * FROM autor WHERE idautor='$cod'";
$res=mysqli_query($db,$con_sql);
if($res){
    $row=mysqli_fetch_array($res);
}else{
    echo "Error en la consulta ".mysqli_error($db);
}
?>
    <h2>Bienvenido a tu perfil: <?php echo $row['nombre']." ".$row['paterno']." ".$row['materno']; ?></h2>
    <h2>Tus libros son: </h2>
    <?php
        $con_sql1="SELECT * FROM libros WHERE idautor='$cod'";
        $res1=mysqli_query($db,$con_sql1);
        while ($libro=mysqli_fetch_array($res1)){
    ?>
        <h2>Titulo : <?php echo $libro['titulo']; ?></h2>
        <h2>Fecha  : <?php echo $libro['fechacreacion']; ?></h2>
        <h2>Cantidad : <?php echo $libro['cantidadLibro']; ?></h2>
        <!-- inicio imagen -->
        <img src="../libros/imagenes/<?php echo $libro['portada']; ?>" >
        <!--fin de imagen -->
    <?php
        }
    ?>
<?php 
    incluirTemplate('footer');
?>