<?php
    require '../../includes/config/database.php';
    $db=conectarDB();
    require '../../includes/funciones.php';
    incluirTemplate('header');
?>
<?php 
    $cod=$_GET['cod'];
    $contador=1;
    $con_sql="SELECT * FROM usuarios WHERE idusuario='$cod'";
    $res=mysqli_query($db,$con_sql);
    if($res){
        $usuario=mysqli_fetch_array($res);
    }else{
        echo "Error en la consulta ".mysqli_error($db);
    }
?>
    <h2>Bienvenido a tu perfil <?php echo $usuario['nickname']; ?></h2>
    <img src="../usuarios/imagenes/<?php echo $usuario['imagenUsuario']; ?>" >
    <h2>Tus pedidos son : </h2>
    <?php 
    $con_sql="SELECT *FROM pedido WHERE idusuario='$cod'";
    $res1=mysqli_query($db,$con_sql);
    while($pedido=mysqli_fetch_array($res1)){
    ?>
    <h2>Fecha de pedido : <?php echo $pedido['fechacompra']; ?></h2>
    <h2>Cantidad : <?php echo $pedido['cantidad']; ?></h2>
        <?php
        $codLibro=$pedido['idlibro'];
        $con_sql1="SELECT * FROM libros WHERE idLibro='$codLibro'";
        $res2=mysqli_query($db,$con_sql1);
        $libro=mysqli_fetch_array($res2);
        ?>
        <h2>Titulo : <?php echo $libro['titulo']; ?></h2>
    <?php
    }
    ?>
    <h2>Tus blogs son :</h2>
    <?php 
    $con_sql="SELECT * FROM blog WHERE idusuario='$cod'";
    $res3=mysqli_query($db,$con_sql);
    while($blog=mysqli_fetch_array($res3)){
    ?>
    <h2>Titulo : <?php echo $blog['titulo']; ?></h2>
    <h2>Contenido : <?php echo $blog['contenido']; ?></h2>
    <img src="../blog/imagenes/<?php echo $blog['imagen']; ?>" >
    <?php
    }
    ?>
<?php
incluirTemplate('footer');
?>